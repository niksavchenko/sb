/**
 * FIFA Ranking: Confederation ItemView
 * 
 * Confederation ItemView for Compositive view of Confederations collection
 * @see confederationsNav.js
 * @param {object} Marionette - Backbone.Marionette
 * @param {string} FifaConfederationTemplate - template for current page/elemen
 * @param {object} FifaConfederationModel - model for the template
 * @author nik savchenko <niksavchenko@gmail.com>
 */
/*global define: false, console: false*/
define([
	'backboneMarionette',
	'text!templates/fifa/confederationNavElm.tpl',
	'models/confederation'
], function (Marionette, FifaConfederationTemplate, FifaConfederationModel) {
	'use strict';
	console.log('FIFA Ranking: Confederation ItemView');
	return Marionette.ItemView.extend({
		model: FifaConfederationModel,
		template: FifaConfederationTemplate,
		tagName: "li"
	});
});