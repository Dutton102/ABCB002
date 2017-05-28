<style>
<?php include $this->viewPath( 'admin/style.php' ); ?>
</style>

<div class='wrap'>
	
	<form method="post" action="">

		<h1><?php _e( 'Smart Captcha Settings' ) ?></h1>

		<span>
            To Get Premium Support 24/7 E-mail us: <a href="mailto:umar2bajwa@gmail.com">umar2bajwa@gmail.com</a>
        </span>

        <br /><br />

        <h2 class="nav-tab-wrapper">

        	<a class="nav-tab" href="?page=smuzform-core-addon-captcha33&tab=general"><?php _e( 'General' ) ?></a>
        </h2>


        <div id="accordion-1" class="accordion active tab-general-settings">
           <div id="hed3"><h3><?php _e('General Settings')?></h3></div>
           
           <table class="form-table">
           	
           	<tr valign="top">

           		<th scope="row"><?php _e( 'Enable Captcha Extension' ) ?></th>

           		<td>

           			<div class="onoffswitch">
                     <input type="checkbox" name="enabled" class="onoffswitch-checkbox"  id="myonoffswitch" value='true' <?php checked( true, $settings['enabled'] ); ?> />
                     <label class="onoffswitch-label" for="myonoffswitch">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                </div>
                <small><?php _e( 'You must also enable captcha from the form settings page.' ) ?></small>

           		</td>
           	
           	</tr>

           	<tr valign="top">

           		<th scope="row"><?php _e( 'Captcha Field Label' ) ?></th>

           		<td>

           			<input type="text" value="<?php echo esc_attr( $settings['captchaFieldLabel'] ) ?>" name="fieldLabel" size="50" />

           		</td>
           	
           	</tr>

           	<tr valign="top">

           		<th scope="row"><?php _e( 'Captcha Error Message' ) ?></th>

           		<td>

           			<input type="text" value="<?php echo esc_attr( $settings['invalidCaptchaMsg'] ) ?>" name="errorMsg" size="50" />

           		</td>
           	
           	</tr>

           	<tr valign="top">

           		<th scope="row"><?php _e( 'Google ReCaptcha Site Key' ) ?></th>

           		<td>

           			<input type="text" value="<?php echo esc_attr( $settings['google']['siteKey'] ) ?>" name="googleSiteKey" size="50" />

           			<br />
           			<small>
           				<a href="https://www.google.com/recaptcha/admin">Register your website.</a> With that done you'll be given a <strong>site key</strong> and its partner <strong>secret key</strong>.
           			</small>

           		</td>
           	
           	</tr>

           	<tr valign="top">

           		<th scope="row"><?php _e( 'Google ReCaptcha Secret Key' ) ?></th>

           		<td>

           			<input type="text" value="<?php echo esc_attr( $settings['google']['secretKey'] ) ?>" name="googleSecretKey" size="50" />

           		</td>
           	
           	</tr>

            <tr valign="top">

              <th scope="row"><?php _e( 'Use Dark Theme' ) ?></th>

              <td>

                <div class="onoffswitch">
                     <input type="checkbox" name="gtheme" class="onoffswitch-checkbox"  id="myonoffswitch2" value='dark' <?php checked( 'dark', $settings['google']['theme'] ); ?> />
                     <label class="onoffswitch-label" for="myonoffswitch2">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                </div>
                <small><?php _e( 'Set color scheme of the google recaptcha.' ) ?></small>

              </td>
            
            </tr>
           
           </table>

        </div>

        <p class="submit">
      		<input type="submit" class="button-primary" value="<?php _e( 'Save Changes' ); ?>" name="submit" />
      	</p>

        <input type="hidden" value="<?php echo $nonce ?>" name="nonce" />
	</form>

</div>