/**
 * FIFA Ranking: Confederation Model 
 * 
 * @param {object} Backbone instance of Backbone
 * @author nik savchenko <niksavchenko@gmail.com>
 */
/*global define: false, console: false*/
define([
	'backbone'
], function (Backbone) {
	"use strict";
	var FifaConfederationModel = Backbone.Model.extend({
		//urlRoot: '/ranking'
		defaults: {
			id: '',
			fifa_id: '',
			abbreviation: '',
			name: '',
			site: 'http://fifa.com/',
			members: 0,
			description: ''
		}
		// TODO: add validation
	});
	console.log('FIFA Ranking: Confederation Model', FifaConfederationModel);
	return FifaConfederationModel;
});