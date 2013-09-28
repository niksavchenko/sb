/**
 * FIFA Ranking: Confederation Menu Item (ItemView)
 * 
 * Confederation ItemView for Compositive view of Confederations collection
 * @see confederationsNav.js
 * @param {object} Marionette - Backbone.Marionette
 * @param {object} FifaConfederationModel - model ...
 * @param {string} FifaConfederationTemplate - template for current page/elemen
 * @author nik savchenko <niksavchenko@gmail.com>
 */
/*global define: false, console: false*/
define([
	'backboneMarionette',
	'models/confederation',
	'text!templates/fifa/confederationNavElm.tpl'
], function (Marionette, FifaConfederationModel, FifaConfederationTemplate) {
	"use strict";
	console.log('FIFA Ranking: Confederation ItemView');
	return Marionette.ItemView.extend({
		model: FifaConfederationModel,
		template: FifaConfederationTemplate,
		tagName: "li"
	});
});