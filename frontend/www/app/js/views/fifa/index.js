/**
 * FIFA Ranking: Home page layout (IndexPageLayout)
 *
 * @param {object} Marionette - Marionette object
 * @param {string} FifaRankingLayoutTemplate - template for current page/element
 * 
 * @author nik savchenko <niksavchenko@gmail.com>
 */
/*global define: false*/
define([
	'backboneMarionette',
	'text!templates/fifa/index.tpl'
], function (Marionette, FifaRankingLayoutTemplate) {
	"use strict";
	return Marionette.Layout.extend({
		template: FifaRankingLayoutTemplate,
		regions: {
			confederations: "#sb-confederations",
			rank: "#sb-rank",
			ranking: "#sb-ranking-table-wrapper"
		}
	});
});