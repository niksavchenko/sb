/**
 * IndexPageView
 *
 * Renders demo index page with login box
 *
 * @param {object} Marionette - Marionette object
 * @param {string} IndexPageTemplate - template for current page/element
 * 
 * @author Antonio Ramirez <antonio@clevertech.biz>
 */

/*global define: false, Backbone:false*/
define([
	'backboneMarionette',
	'text!templates/fifa/rank.tpl'
], function (Marionette, RankTemplate) {
	'use strict';

	return Marionette.Layout.extend({
		template: IndexPageTemplate,
		regions: {
			nav: "#sb-confederations",
			ranking: "#sb-ranking-table-wrapper"
		}
	});
});