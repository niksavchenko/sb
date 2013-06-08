/**
 * IndexPageView
 *
 * Renders demo index page with login box
 *
 * @param {object} Marionette - Marionette object
 * @param {object} App Marionett Application instance
 * @param {string} IndexPageTemplate - template for current page/element
 * @param {object} HeaderMenuView - ...
 * 
 * @author Antonio Ramirez <antonio@clevertech.biz>
 */

/*global define: false, Backbone:false*/
define([
	'backboneMarionette',
	'app',
	'text!templates/index/page.tpl',
	'views/header/main'
], function (Marionette, App, IndexPageTemplate, HeaderMenuView) {
	'use strict';

	return Marionette.Layout.extend({
		template: IndexPageTemplate,
		regions: {
			nav: "#sb-confederations",
			ranking: "#sb-ranking-table"
		},
		beforeRender: function () {
			var headerMenuView = new HeaderMenuView({model: new Backbone.Model({username: this.options.username})});
			App.menuRegion.show(headerMenuView);
		}
	});

//	return Marionette.ItemView.extend({
//		template: IndexPageTemplate,
//		/**
//		 * before rendering dashboard, render main top menu
//		 */
//		beforeRender: function () {
//			var headerMenuView = new HeaderMenuView({model: new Backbone.Model({username: this.options.username})});
//			App.menuRegion.show(headerMenuView);
//		}
//	});
});