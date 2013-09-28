/**
 * FIFA Ranking: Rank Navigation block (ItemView)
 *
 * @param {object} Marionette - Marionette object
 * @param {object} FifaRankModel - model current Rank info for navigation
 * @param {string} FifaRankRegionTemplate - template for current page/element
 * 
 * @author nik savchenko <niksavchenko@gmail.com>
 */
/*global define: false, console: false*/
define([
	'backboneMarionette',
	'models/rank',
	'text!templates/fifa/rank.tpl'
], function (Marionette, FifaRankModel, FifaRankRegionTemplate) {
	"use strict";
	console.log('FIFA Ranking: Rank Navigation ItemView');
	return Marionette.ItemView.extend({
		model: new FifaRankModel(),
		template: FifaRankRegionTemplate,
		tagName: "div",
		initialize: function () {
			console.log('FIFA Ranking: Rank Nvaigation. fech', this);
			this.model.on('change', this.render, this);
			this.model._fetchLast();
			console.log('FIFA Ranking: Rank Nvaigation. json', this.model.toJSON());
		}			
	});
});