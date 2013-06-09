/**
 * FooterPageView
 *
 * Renders footer
 * 
 * @param {object} Marionette - Backbone.Marionette
 * @param {string} FooterTemplate - template for current page/elemen
 *
 * @author Antonio Ramirez <antonio@clevertech.biz>
 */

/*global define: false, console: false*/
define([
	'backboneMarionette',
	'text!templates/footer/footer.html'
], function (Marionette, FooterTemplate) {
	'use strict';
	console.log('Footer Template', FooterTemplate);
	return Marionette.ItemView.extend({
		template: FooterTemplate
	});
});
