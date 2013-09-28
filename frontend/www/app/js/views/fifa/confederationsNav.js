/**
 * FIFA Ranking: Confederations Navigation Menu (CompositeView)
 * 
 * We are using this View for Nav right before/after ranking table.
 * (We also have one more view for same model for Search form.)
 * 
 * @param {object} Marionette - Backbone.Marionette
 * @param {object} FifaConfederationsCollection - collection for the current view
 * @param {string} FifaConfederationsTemplate - template for the current view
 * @param {object} FifaConfederationView - item view for the CompositeView
 * @author nik savchenko <niksavchenko@gmail.com>
 */
/*global define: false, console: false*/
define([
	'backboneMarionette',
	'collections/confederations',
	'text!templates/fifa/confederationNav.tpl',
	'views/fifa/confederationsNavElm'
], function (Marionette, FifaConfederationsCollection, FifaConfederationsTemplate, FifaConfederationView) {
	"use strict";
	console.log('FIFA Ranking: Confederations Navigation Menu');
	return Marionette.CompositeView.extend({
		collection: new FifaConfederationsCollection(),
		itemView: FifaConfederationView,
		itemViewContainer: "ul",
		template: FifaConfederationsTemplate,
		initialize: function () {
			console.log('FIFA Ranking: Confederations Collection View: ', this);
			this.collection.fetch();
		}
	});
});