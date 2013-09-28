/**
 * FIFA Ranking: Ranking Table Row (ItemView)
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
	'models/ranking',
	'text!templates/fifa/rankingTableRow.tpl'
], function (Marionette, FifaRankingModel, FifaRankingTableRowTemplate) {
	"use strict";
	console.log('FIFA Ranking: Ranking Row ItemView');
	return Marionette.ItemView.extend({
		model: FifaRankingModel,
		tagName: "tr",
		template: FifaRankingTableRowTemplate,
		beforeRender: function() {
			console.log('BEFORE RENDER: ', this.model.get('change_status'));
			var view = {};
			var status = this.model.get("change_status");
				if ("Down" === status) {
					view.icon = "icon-circle-arrow-down";
				} else if ("Up" === status) {
					view.icon = "icon-circle-arrow-up";
				} else {
					view.icon = "icon-minus";
				}
			this.model.set('view', view);
		}
	});
});