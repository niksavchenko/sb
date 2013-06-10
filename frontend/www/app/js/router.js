/**
 * Application router  (Marionette style)
 *
 * Backbone routers are used for routing your applications URL’s when using hash tags(#)
 * @param {object} Marionette - Backbone.Marionette
 * @param {object} Controller - Application controller
 *
 * @see http://backbonetutorials.com/what-is-a-router/
 * @see https://github.com/marionettejs/backbone.marionette/blob/master/docs/marionette.approuter.md
 */

/*global define: false, console: false*/
define([
	'backboneMarionette',
	'controller'
], function (Marionette, Controller) {

	'use strict';
	console.log('route.js:', Marionette, Controller);

	var AppRouter = Marionette.AppRouter.extend({
		/**
		 * The routes hash maps URLs with parameters to functions
		 * on your router, similar to the View's events hash.
		 *
		 * @see https://github.com/marionettejs/backbone.marionette/blob/master/docs/marionette.approuter.md
		 * @see controller.js
		 */
		appRoutes: {
			'.*': 'goto_index', // /
			'index': 'goto_index', // #/index
			'login': 'goto_login', // #/login
			'error/:number': 'goto_error', // #/error/number
			
			'dashboard/:username': 'goto_dashboard', // #/dashboard
			'fifa-ranking': 'goto_fifaRanking', // #/fifaRanking
			'fifa-ranking-old': 'goto_fifaRankingOld', // #/fifaRankingOld
			'settings': 'goto_settings', // #/settings

			// paths not found
			'*path': 'goto_notFound'
		}
	});

	return new AppRouter({controller: Controller});
});