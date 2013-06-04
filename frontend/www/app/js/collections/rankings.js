/**
 * FIFA Ranking: Rankings Collection
 * 
 */
console.log('1.2');
define(
	[
		'backbone',
		'models/ranking'
	],
	function(Backbone, FifaRankingModel) {
		console.log('FIFA Ranking: Rankings Collection');
		var FifaRankingCollection = Backbone.Collection.extend({
			model: FifaRankingModel,
			url: '/ranking'
		});
		console.log('FifaRankingCollection: ', this);
		return FifaRankingCollection;
	}
);
