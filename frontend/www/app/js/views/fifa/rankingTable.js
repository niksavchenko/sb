/**
 * FIFA Ranking: Ranking Table (Collection) CompositiveView
 * 
 * We are using this View for Nav right before/after ranking table.
 * (We also have one more view for same model for Search form.)
 * 
 * @param {object} Marionette - Backbone.Marionette
 * @param {string} FifaRankingTableTemplate - template for the current view
 * @param {object} FifaRankingCollection - collection for the current view
 * @param {object} FifaRankingTableRowView - item view for the CompositeView
 * @author nik savchenko <niksavchenko@gmail.com>
 */
/*global define: false, console: false*/
define([
	'backboneMarionette',
	'text!templates/fifa/rankingTable.tpl',
	'collections/rankings',
	'views/fifa/rankingTableRow'
], function (Marionette, FifaRankingTableTemplate, FifaRankingCollection, FifaRankingTableRowView) {
	'use strict';
	console.log('FIFA Ranking: Collection/Page View 1');
	return Marionette.CompositeView.extend({
		collection: new FifaRankingCollection(),
		itemView: FifaRankingTableRowView,
		itemViewContainer: "tbody",
		template: FifaRankingTableTemplate,
		initialize: function () {
			console.log('FIFA Ranking: Collection/Page View', this);
			this.collection.fetch();
		}
	});
});