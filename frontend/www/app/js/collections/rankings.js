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
	'use strict';
	console.log('FIFA Ranking: Rankings Collection');
	var FifaRankingCollection = Backbone.Collection.extend({
		model: FifaRankingModel,
		url: '/ranking'
	});
	console.log('FifaRankingCollection: ', this, FifaRankingCollection);
	return FifaRankingCollection;
});