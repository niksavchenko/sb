/**
 * FIFA Ranking: Ranking Table (CompositiveView)
 * 
 * @param {object} Marionette - Backbone.Marionette
 * @param {object} FifaRankingCollection - collection for the current view
 * @param {string} FifaRankingTableTemplate - template for the current view
 * @param {object} FifaRankingTableRowView - item view for the CompositeView
 * @author nik savchenko <niksavchenko@gmail.com>
 */
/*global define: false, console: false*/
define([
	'backboneMarionette',
	'collections/rankings',
	'text!templates/fifa/rankingTable.tpl',
	'views/fifa/rankingTableRow'
], function (Marionette, FifaRankingCollection, FifaRankingTableTemplate, FifaRankingTableRowView) {
	"use strict";
	console.log('FIFA Ranking: Table Collection View');
	return Marionette.CompositeView.extend({
		collection: new FifaRankingCollection(),
		itemView: FifaRankingTableRowView,
		itemViewContainer: "tbody",
		template: FifaRankingTableTemplate,
		initialize: function () {
			console.log('FIFA Ranking: Table Collection View', this);
			this.collection.fetch();
		}
	});
});