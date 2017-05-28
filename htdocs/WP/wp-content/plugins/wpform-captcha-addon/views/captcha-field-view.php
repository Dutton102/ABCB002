<div class="smform-fieldcont smform-fieldcontcaptcha" id="smform-fieldcont<?php echo rand() ?>" 
		data-key="" 
		data-rule="disabled" 
		data-ruleoperator=""
		data-ruleaction=""
		data-rulecmpvalue=""
		data-rulefield="" >

<div id="g-recaptcha<?php echo intval( $form->getId() ) ?>" class="g-recaptcha" data-sitekey="<?php echo esc_attr( $settings['google']['siteKey'] ) ?>" data-theme="<?php echo esc_attr( $settings['google']['theme'] ) ?>"></div>

</div>

<script>
(function($) {

	$( document ).on( 'smuzFormSubmitError', function( event, form, response ) {
		grecaptcha.reset();
	});

})(jQuery);
</script>