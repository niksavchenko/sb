/**
 * FIFA Ranking: Ranking Model 
 * 
 */
console.log('1.3');
define(
	[
		'backbone'
	],
	function(Backbone) {
		var FifaRankingModel = Backbone.Model.extend({
			//urlRoot: '/ranking'
		});
		console.log('FIFA Ranking: Ranking Model', FifaRankingModel);
		return FifaRankingModel;
	}
);
