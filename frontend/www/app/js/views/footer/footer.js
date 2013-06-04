/**
 * FooterPageView
 *
 * Renders footer
 *
 * @author Antonio Ramirez <antonio@clevertech.biz>
 */
define(
	[
		'backboneMarionette',
		'text!templates/footer/footer.html'
	],
	function(Marionette, FooterTemplate) {
		console.log('Footer Template', FooterTemplate);
		return Marionette.ItemView.extend({
			template: FooterTemplate
		});
	}
);
