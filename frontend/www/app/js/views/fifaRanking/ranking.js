/**
 * FIFA Ranking: Ranking ItemView 
 * i.e view of one country ranking (i.e. row)
 * 
 */
console.log('1.4');
define(
	[
		'backboneMarionette',
		'text!templates/fifaRanking/row.html',
		'models/ranking'
	],
	function(Marionette, FifaRankingRowTemplate, FifaRankingModel) {
		console.log('FIFA Ranking: Ranking ItemView');
		return Marionette.ItemView.extend({
			model: FifaRankingModel,
			template: FifaRankingRowTemplate,
			initialize: function() {
				console.log('FIFA Ranking: Ranking ItemView: initialize', this);
				//this.collection.fetch();
			},
				
			zz: ''
		});
	}
);
