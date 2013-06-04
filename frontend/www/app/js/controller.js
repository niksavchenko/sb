/**
 * Application controller
 *
 * @author antonio ramirez <antonio@clevertech.biz>
 */
define([
	'backboneMarionette',
	'http',
	'app',
	'session' // TODO: check end delete if needn't'
], function(Marionette, Http, App) {
	'use strict';
	console.log('controller.js');

	return {
		
		/* renders error page with correspondent failure number */
		goto_error: function(actions) {
			require(['views/error/page'], function(ErrorPage) {
				if (Http.isUnAuthorized(actions)) {
					App.router.navigate('index', {trigger: true});
					return false;
				}
				var description = Http.getStatusDescription(actions) || 'Unknown';
				var errorPage = new ErrorPage({model: new Backbone.Model({number: actions, description: description})});
				App.pageRegion.show(errorPage);
				return true;
			});
		},
						
		/* renders index page - login*/
		goto_index: function() {
			require(['views/index/page'], function(IndexPage) {
				var indexPage = new IndexPage();
				App.pageRegion.show(indexPage);
			});
		},
						
		/* renders settings page */
		goto_settings: function() {
			require(['views/settings/page'], function(SettingsPage) {
				var settingsPage = new SettingsPage();
				App.pageRegion.show(settingsPage);
			});
		},
						
		/* renders dashboard */
		goto_dashboard: function(username) {
			require(['views/dashboard/page'], function(DashboardPage) {
				var dashboardPage = new DashboardPage({username: username});
				App.pageRegion.show(dashboardPage);
			});
		},
						
		/* renders fifa ranking */
		goto_fifaRanking: function() {
			console.log(1);
			require(['views/fifaRanking/page'], function(FifaRanknigPage) {
				console.log(2);
				var fifaRanknigPage = new FifaRanknigPage();
				console.log(3);
				App.pageRegion.show(fifaRanknigPage);
				console.log(4);
			});
		},
						
		/* triggers not found error/404 when page is not found */
		goto_notFound: function() {
			console.log('ERROR');
			//App.router.navigate('error/404', {trigger: false});
			// TODO: check details and change maybe
			// for a while it better then change URL each time to error/404
			// if I've done small error in URL like:
			// `dashboad` instead of `dashboard` I don't whant to see error/404
			// and print `dashboard` from the begining instead of change:
			// `dashboad` to `dashborad`
			var actions = "404";
			require(['views/error/page'], function(ErrorPage) {
				if (Http.isUnAuthorized(actions)) {
					App.router.navigate('index', {trigger: true});
					return false;
				}
				var description = Http.getStatusDescription(actions) || 'Unknown';
				var errorPage = new ErrorPage({model: new Backbone.Model({number: actions, description: description})});
				App.pageRegion.show(errorPage);
				return true;
			});			
			
		}
		
	};
});