/**
 * UserModel object
 * 
 * Resources taken from Sherago <not yet used in kmodeling>
 * 
 */
define([
	'jquery', 
	'underscore', 
	'backbone',
	], function($, _, Backbone) {

		var RakningModel = Backbone.Model.extend({
			urlRoot: '/ranking'
		});

		return RakningModel;
	});
