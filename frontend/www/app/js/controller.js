/**
 * Application controller
 *
 * @param {object} Backbone - instance of Backbone lib
 * @param {object} Http - see utils/http.js
 * @param {object} App - Marionett Application instance
 *
 * @author antonio ramirez <antonio@clevertech.biz>, nik savchenko <niksavchenko@gmail.com>
 */
/*global require:false, define: false, console: false*/
define([
	'backbone',
	'http',
	'app'
], function (Backbone, Http, App) {
	'use strict';
	console.log('controller.js');

	return {
		/* renders index page*/
		goto_index: function () {
			console.log('controller: index');
			App.router.navigate('fifa-ranking', {trigger: true, replace: true});
		},
		/* renders error page with correspondent failure number */
		goto_error: function (actions) {
			require(['views/error/page'], function (ErrorPage) {
				if (Http.isUnAuthorized(actions)) {
					App.router.navigate('index', {trigger: true});
					return false;
				}
				var
					description = Http.getStatusDescription(actions) || 'Unknown',
					errorPage = new ErrorPage({model: new Backbone.Model({number: actions, description: description})});
				App.pageRegion.show(errorPage);
				return true;
			});
		},
		/* renders login page (formet index) */
		goto_login: function () {
			require(['views/index/page'], function (LoginIndexPage) {
				var loginIndexPage = new LoginIndexPage();
				App.pageRegion.show(loginIndexPage);
			});
		},
		/* triggers not found error/404 when page is not found */
		goto_notFound: function () {
			console.log('ERROR');
			//App.router.navigate('error/404', {trigger: false});
			// TODO: check details and change maybe
			// for a while it better then change URL each time to error/404
			// if I've done small error in URL like:
			// `dashboad` instead of `dashboard` I don't whant to see error/404
			// and print `dashboard` from the begining instead of change:
			// `dashboad` to `dashborad`
			var actions = "404";
			require(['views/error/page'], function (ErrorPage) {
				if (Http.isUnAuthorized(actions)) {
					App.router.navigate('index', {trigger: true});
					return false;
				}
				var
					description = Http.getStatusDescription(actions) || 'Unknown',
					errorPage = new ErrorPage({model: new Backbone.Model({number: actions, description: description})});
				App.pageRegion.show(errorPage);
				return true;
			});
		},
		/*  
		 * 
		 * 
		 * 
		 */
		/* renders dashboard */
		goto_dashboard: function (username) {
			require(['views/dashboard/page'], function (DashboardPage) {
				var dashboardPage = new DashboardPage({username: username});
				App.pageRegion.show(dashboardPage);
			});
		},
		/* renders fifaRanking page*/
		goto_fifaRanking: function () {
			require([
				'views/fifa/index',
				'views/fifa/rank',
				'views/fifa/confederationsNav',
				'views/fifa/rankingTable'
			], function (IndexPageLayout, RankView, ConfederationsView, RankingView) {
				var
					indexPageLayout = new IndexPageLayout(),
					rankView = new RankView(),
					confederationsView = new ConfederationsView(),
					rankingView = new RankingView();
				App.pageRegion.show(indexPageLayout);
				indexPageLayout.rank.show(rankView);
				indexPageLayout.confederations.show(confederationsView);
				indexPageLayout.ranking.show(rankingView);
			});
		},
		goto_fifaRankingOld: function () {
			/* renders fifa ranking */
			require(['views/fifa/rankingTable'], function (FifaRanknigPage) {
				var fifaRanknigPage = new FifaRanknigPage();
				console.log('fifaRanknigPage: ', fifaRanknigPage);
				App.pageRegion.show(fifaRanknigPage);
				console.log('controller: goto_fifaRanking: end');
			});
		},
		/* renders settings page */
		goto_settings: function () {
			require(['views/settings/page'], function (SettingsPage) {
				var settingsPage = new SettingsPage();
				App.pageRegion.show(settingsPage);
			});
		}
	};
});