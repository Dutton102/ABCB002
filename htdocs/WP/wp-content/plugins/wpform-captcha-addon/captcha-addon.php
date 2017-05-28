<?php
/**
Plugin Name: Captcha extension for WP Forms.
Author: Muneeb
Description: Integrate captcha with WordPress Forms Plugin.
**/

add_action( 'plugins_loaded', 'loadSmuzFormCaptchaAddon' );

function loadSmuzFormCaptchaAddon() {

	require plugin_dir_path( __FILE__ ) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'class-smuzform-core-addon-captcha.php';

	$CaptchaAddon = new SmuzForm_Core_Addon_Captcha();

	$CaptchaAddon->init();

}