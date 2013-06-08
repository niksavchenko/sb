/*global define: false, console: false, Backbone: false, $: false, '_':false*/

define([
	'backboneMarionette',
	'http'
], function (Marionette, Http) {

	'use strict';
	console.log('app.js:', Marionette, Http);

	/* create global object app, you can name it whatever you wish */
	var app = new Marionette.Application();

	/* add regions -please see your views/layouts and views/site/index view file */
	app.addRegions({
		menuRegion: '.menu',
		headRegion: '.head',
		pageRegion: '.page',
		footerRegion: '.footer'
	});

	/* add initializer */
	app.addInitializer(function () {
		/* Marionette hack to work with requireJS */
		Backbone.Marionette.TemplateCache.prototype.loadTemplate = function (templateId, callback) {

			// Marionette expects "templateId" to be the ID of a DOM element.
			// But with RequireJS, templateId is actually the full text of the template.
			var err, msg, template = templateId;

			// Make sure we have a template before trying to compile it
			if (!template || template.length === 0) {
				msg = "Could not find template: '" + templateId + "'";
				err = new Error(msg);
				err.name = "NoTemplateError";
				throw err;
			}

			return template;
		};

		/* You can remove it, this was to 'easy' the calls from the global object */
		// initialize Backbone custom extension methods

		/* lets override Backbone.Model.toJSON to include CSRF cookie validation */
		Backbone.Model.prototype.toJSON = function () {
			/*jslint nomen: true*/
			return $('meta[name=csrf]').length ? _(_.clone(this.attributes)).extend({
				// yii defaults to YII_CSRF_TOKEN, we can easily change that on main.php
				'YII_CSRF_TOKEN': $('meta[name=csrf]').attr('content')
			}) : _.clone(this.attributes);
		};

		// initialize Http object to make backbone work with POST instead of GET
		Http.initialize({
			type: 'POST'
		});

		// filter all http for errors
		Http.onAjaxError(function (number) {
			console.log('onAjaxError: ', arguments);
			app.router.navigate('error/' + number, {
				trigger: true
			});
		}).onAjaxStart(function () {
			// hook ajax calls and display a nice loader
			console.log('onAjaxStart: ', arguments);
			$('#loader').show();
		}).onAjaxComplete(function () {
			// hide loader when finished AJAX call
			console.log('onAjaxComplete: ', arguments);
			$('#loader').hide();
		});
	});

	return app;
});