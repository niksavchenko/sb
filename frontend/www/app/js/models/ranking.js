/**
 * FIFA Ranking: Ranking Model 
 * 
 * @param {object} Backbone instance of Backbone
 * @author nik savchenko <niksavchenko@gmail.com>
 */
/*global define: false, console: false*/
define([
	'backbone'
], function (Backbone) {
	"use strict";
	console.log('FIFA Ranking: Ranking Model');
	var FifaRankingModel = Backbone.Model.extend({
		//urlRoot: '/ranking'
		defaults: {
			fifa3: '',
			ranking: '0',
			points: '0',
			change_status: '0',
			cn_name: '',
			change_points: '0'
		}
		// TODO: add data for confederation
	});
	console.log('FIFA Ranking: Ranking Model', FifaRankingModel);
	return FifaRankingModel;
});