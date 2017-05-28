<?php

class SmuzForm_Core_Addon_Captcha {
	
	function __construct() {  }

	function init() {
		
		$this->setupOptions();

		add_action( 'admin_menu', array( $this, 'createAdminMenu' ) );

		$this->ifEnabled();

	}

	function createAdminMenu() {

		$parent_slug = 'smuz-forms-main';

		$page_title = 'Captcha Extension';

		$menu_title = 'Captcha Extension';

		$capability = 'manage_options';

		$menu_slug = 'smuzform-core-addon-captcha33';

		add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, array( $this, 'renderAdmin' ) );

	}

	function renderAdmin() {

		$nonce = wp_create_nonce( 'smuzform_core_addon_33_captcha_nonce' );

		if ( isset( $_POST['submit'] ) )
			$this->saveSettingsOnFormAction();

		$settings = $this->getSettings();

		include $this->viewPath( 'admin/settings-page.php' );

	}

	function setupOptions() {

		if (  ! is_admin() )
			return;

		$default_options = $this->getDefaultSettings();

		add_option( 'smuzform_core_addon_33_captcha', $default_options );

	}

	function ifEnabled() {

		$settings = $this->getSettings();

		if ( ! $settings['enabled'] )
			return null;

		add_action( 'smuzform_display_before_submit_btn', array( $this, 'renderCaptchaField' ), 9999, 2 );

		add_action( 'smuzform_display_at_end_of_page', array( $this, 'renderCaptchaFieldForMultiPageForm' ), 9999, 3 );

		add_action( 'smuzform_field_errors', array( $this, 'verifyCaptchaValue' ), 9999, 3 );

		add_action( 'init', array( $this, 'addGoogleReCaptchaScript' ) );

	}

	function renderCaptchaField( $form_id, $formObj ) {

		if ( ! $formObj->isCaptcha() ) return null;

		$form = $formObj;

		$settings = $this->getSettings();

		include $this->viewPath( 'captcha-field-view.php' );

	}

	function renderCaptchaFieldForMultiPageForm( $form_id, $formObj, $page_id ) {

		$noOfPages = count( $formObj->getMultiPageFields() );

		if ( $noOfPages === ( $page_id + 1 ) )
			$this->renderCaptchaField( $form_id, $formObj );

	}

	function verifyCaptchaValue( $errors, $form_id, $formObj ) {

		if ( ! $formObj->isCaptcha() )
			return $errors;

		if ( ! class_exists( 'ReCaptcha' ) )
			$this->loadClass('recaptchalib.php');

		$settings = $this->getSettings();

		$secretKey = $settings['google']['secretKey'];

		/**
		Core Addons Error Codes Start with 33 number.
		Captcha Addon Codes start with 11 number.
		**/

		$adt = array( 'fieldLabel' => esc_attr( $settings['captchaFieldLabel'] ) );

		if ( empty( $secretKey ) ) {

			$errors[] = array( 
				'signal' => false, 
				'code' => 33111, 
				'message' => 'To use reCAPTCHA you must get an API key from https://www.google.com/recaptcha/admin',
				'additionalData' => $adt
			);

		} else if ( ! isset( $_POST['g-recaptcha-response'] ) ) {

			$errors[] = array( 
				'signal' => false, 
				'code' => 33111, 
				'message' => 'Captcha Field Missing.',
				'additionalData' => $adt
			);

		} else {

			$reCaptcha = new ReCaptcha( $secretKey );

			$value = $_POST['g-recaptcha-response'];

			$response = $reCaptcha->verifyResponse( $_SERVER['REMOTE_ADDR'], $value );

			$errorMsg = esc_attr( $settings['invalidCaptchaMsg'] );

			if ( $response != null && ! $response->success ) {

				$errors[] = array( 
					'signal' => false, 
					'code' => '33' . $response->errorCodes, 
					'message' => $errorMsg,
					'additionalData' => $adt
				);

			}
			

		}



		return $errors;

	}

	function addGoogleReCaptchaScript() {

		if ( is_admin() ) return null;

		wp_enqueue_script( 'google-recaptcha', 'https://www.google.com/recaptcha/api.js', array(), null, true );

	}

	function loadClass( $class_name ) {

		require plugin_dir_path( dirname( __FILE__ ) ) . 'class' . DIRECTORY_SEPARATOR . $class_name;

	}

	public function viewPath( $view_name ) {

		$viewDir = plugin_dir_path( dirname( __FILE__ ) ) . 'views' . DIRECTORY_SEPARATOR;

		return $viewDir . $view_name;

	}

	public function assetUrl( $asset_name ) {

		$url = plugins_url( '', dirname( __FILE__ ) ) . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR;

		return $url . $asset_name;

	}

	function saveSettingsOnFormAction() {
		
		if ( ! wp_verify_nonce( $_POST['nonce'], 'smuzform_core_addon_33_captcha_nonce' ) )
			wp_die( 'Invalid Nonce' );

		$settings = $this->getSettings();

		$enabled = false;

		if ( ! isset( $_POST['enabled'] ) )
			$_POST['enabled'] = false;

		if ( ! isset( $_POST['gtheme'] ) )
			$_POST['gtheme'] = 'light';

		if ( $_POST['enabled'] === 'true' )
			$enabled = true;

		if ( $_POST['gtheme'] === 'dark' )
			$settings['google']['theme'] = 'dark';
		else
			$settings['google']['theme'] = 'light';

		$settings['enabled'] = $enabled;

		$settings['captchaFieldLabel'] = sanitize_text_field( $_POST['fieldLabel'] );

		$settings['invalidCaptchaMsg'] = sanitize_text_field( $_POST['errorMsg'] );

		$settings['google']['siteKey'] = sanitize_text_field( $_POST['googleSiteKey'] );

		$settings['google']['secretKey'] = sanitize_text_field( $_POST['googleSecretKey'] );

		update_option( 'smuzform_core_addon_33_captcha', $settings );

		$_POST['settings_saved'] = true;

	}

	public function getSettings() {


		$opt = get_option( 'smuzform_core_addon_33_captcha' );

		$default_options = $this->getDefaultSettings();

		if ( ! $opt )
			return $default_options;

		return $opt;

	}

	function getDefaultSettings() {

		return array(
				'enabled' => false,
				'captchaFieldLabel' => 'Captcha',
				'invalidCaptchaMsg' => 'Please verify that you are not a robot.',
				'useCaptcha' => 'google',
				'google' => array(
						'siteKey' => null,
						'secretKey' => null,
						'theme' => 'light'
					)
			);

	}
}