/**
 *
 * DashboarHeaderMenuView
 *
 * Renders dashboard navigation bar
 * 
 * @param {object} Marionette - Backbone.Marionette
 * @param {string} mainHeaderTemplate - template for current page/elemen
 * @param {object} App Marionett Application instance
 * 
 * @author antonio ramirez <antonio@clevertech.biz>
 */
/*global define: false, console: false, Backbone: false*/
define([
	'backboneMarionette',
	'text!templates/header/main.tpl',
	'app',
	'backboneBUI'
], function (Marionette, mainHeaderTemplate, App) {
	'use strict';
	return Marionette.ItemView.extend({
		template: mainHeaderTemplate,
		beforeRender: function () {
			Backbone.BUI.Loader.load([Backbone.BUI.Loader.bootstrapDropdown], Backbone.BUI.Config.BOOTSTRAP);
		}
	});
});