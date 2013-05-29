/**
 * FifaRankinPageView
 *
 * Renders demo fifaRanking page
 *
 * @author 
 */
define([
    'backboneMarionette',
    'text!templates/fifaRanking/page.html'
], function (Marionette, FifaRankingPageTemplate) {
    return Marionette.ItemView.extend({
        template:FifaRankingPageTemplate
    });
});
