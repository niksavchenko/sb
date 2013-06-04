/**
 * FIFA Ranking: Collection View
 * and in the same time Page View
 * 
 */
console.log ("1.1");
define(
	[
		'backboneMarionette',
		'text!templates/fifaRanking/page.html',
		'collections/rankings',
		'views/fifaRanking/ranking'
	],
	function(Marionette, FifaRankingPageTemplate, FifaRankingCollection, FifaRankingView) {
		console.log('FIFA Ranking: Collection/Page View');
		return Marionette.ItemView.extend({
			collection: new FifaRankingCollection(),
			itemView: FifaRankingView,
			template: FifaRankingPageTemplate,
				
			initialize: function() {
				console.log('FIFA Ranking: Collection/Page View', this);
				//this.collection.fetch();
			},
				
			zz: ''
		});
	}
);
