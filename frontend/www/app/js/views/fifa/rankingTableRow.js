/**
 * FIFA Ranking: Ranking Table Row (ItemView)
 * 
 * i.e view of one country ranking (i.e. row)
 * 
 * @see rankingTable.js
 * @param {object} Marionette - Backbone.Marionette
 * @param {string} FifaRankingTableRowTemplate - template for current view
 * @param {object} FifaRankingModel - model for the template
 * @author nik savchenko <niksavchenko@gmail.com>
 */
/*global define: false, console: false*/
define([
	'backboneMarionette',
	'text!templates/fifa/rankingTableRow.tpl',
	'models/ranking'
], function (Marionette, FifaRankingTableRowTemplate, FifaRankingModel) {
	'use strict';
	console.log('FIFA Ranking: Ranking ItemView');
	return Marionette.ItemView.extend({
		model: FifaRankingModel,
		template: FifaRankingTableRowTemplate,
		tagName: "tr"
	});
});