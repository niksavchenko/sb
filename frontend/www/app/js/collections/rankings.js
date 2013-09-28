/**
 * FIFA Ranking: Current Rankings Collection
 * 
 * For ranking table
 * 
 * @param {object} Backbone instance of Backbone
 * @param {object} FifaRankingModel - model for the collectoion
 * @author nik savchenko <niksavchenko@gmail.com>
 */
/*global define: false, console: false*/
define([
	'backbone',
	'models/ranking'
], function (Backbone, FifaRankingModel) {
	"use strict";
	console.log('FIFA Ranking: Rankings Collection');
	var FifaRankingCollection = Backbone.Collection.extend({
		model: FifaRankingModel,
		url: '/ranking',
//		_status: function () {
//			//console.log('Change Status preprocessing:', this);
//			this.forEach(function(countryRank) {
//				var status = countryRank.get("change_status");
//				if ("Down" === status) {
//					countryRank.set("change_icon", "icon-circle-arrow-down");
//				} else if ("Up" === status) {
//					countryRank.set("change_icon", "icon-circle-arrow-up");
//				}
//				//console.log('Change Status preprocessing:', countryRank.toJSON());
//			});
//		},
		initialize: function () {
			console.log('FIFA Ranking: Rankings Collection: initialize:');
			//this.on('reset', this._status);
		}	
	});
	console.log('FifaRankingCollection: ', this, FifaRankingCollection);
	return FifaRankingCollection;
});