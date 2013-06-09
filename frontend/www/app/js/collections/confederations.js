/**
 * FIFA Ranking: Confederations Collection
 * 
 * @param {object} Backbone instance of Backbone
 * @param {object} FifaConfederationModel - model for the collectoion
 * @author nik savchenko <niksavchenko@gmail.com>
 */
/*global define: false, console: false*/
define([
	'backbone',
	'models/confederation'
], function (Backbone, FifaConfederationModel) {
	'use strict';
	console.log('FIFA Ranking: Confederations Collection');
	var FifaConfederationCollection = Backbone.Collection.extend({
		model: FifaConfederationModel,
		url: '/confederation'
	});
	console.log('FifaConfederationsCollection: ', this, FifaConfederationCollection);
	return FifaConfederationCollection;
});