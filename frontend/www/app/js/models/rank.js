/**
 * FIFA Ranking: Rank Model 
 * 
 * @param {object} Backbone - instance of Backbone
 * 
 * @author nik savchenko <niksavchenko@gmail.com>
 */
/*global define: false, console: false*/
define([
	'backbone'
], function (Backbone) {
	"use strict";
	var FifaRankModel = Backbone.Model.extend({
		idAttribute: "rank",
		defaults: {
			rank: '',
			rank_date: '',
			next_rank: '',
			prev_rank: '',
			description: ''
		},
		urlRoot: '/ranks',
		_fetchLast: function() {
			this.set({rank:186});
			this.fetch({success: function(model){
				console.log("model in fetch success callback", model);
			}});
		}
	});
	console.log('FIFA Ranking: Rank Model', FifaRankModel);
	return FifaRankModel;
});