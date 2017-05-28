<style>
div.del{
    background: url('<?php echo SC_URL."/images/param_del.png";?>');
    background-size: contain;
}
div.param_plus{
    background: url('<?php echo SC_URL."/images/param_plus.png";?>');
    background-size: contain;
}
.contTable .parameter{
    width:80% !important;
}
</style>
<table class="contTable">
    <tr>
        <td width="100" align="right" class="key"> <?php echo 'Email';?>: </td>
        <td> <input  class="text_area" type="email" name="email" id="email" size="50" maxlength="250" value="<?php echo isset($email)?$email:''; ?>" /> </td>
    </tr>
    <tr>
        <td width="100" align="right" class="key"> <?php echo 'Send Email when Message Sent';?>: </td>
        <td>
            <?php
            $check0 = "";
            $check1 = "";
            if ($want_email == 0)
                $check0 = ' checked="checked" ';
            if ($want_email == 1)
                $check1 = ' checked="checked" ';
            ?>
            <input type="radio" name="want_email" id="want_email0" value="0"  <?php echo isset($check0)?$check0:''; ?> />
				<label for="want_email0"><?php echo 'No';?></label>
            <input type="radio" name="want_email" id="want_email1" value="1" <?php echo isset($check1)?$check1:''; ?>   />
				<label for="want_email1"><?php echo 'Yes';?></label>
        </td>
    </tr>
    <?php if(is_array($params))foreach ($params as $key => $value):?>
	<tr>
	   <td width="100" align="right"><?php echo $key?>:</td>
	   <td class="td_params">
			<?php foreach ($value as $item):?>
			<input type="text" class="parameter" name="param[<?php echo $key?>][]" value="<?php echo $item?>"/>
			<div class="del"></div>
			<?php endforeach;?>
	   </td>
	</tr>
	<tr>
		<td> </td>
		<td class="td_param_plus">
			<div class="param_plus"></div>
		</td>
	</tr>
   <?php endforeach; ?>

	<tr>
		<td width="100" align="right" class="key"> <?php echo 'Facebook url';?>: </td>
		<td> <input  class="text_area" type="url" placeholder="https://www.facebook.com/" name="social_facebook" id="social_facebook" size="50" maxlength="250" value="<?php echo $social_facebook; ?>" /> </td>
	</tr>
	<tr>
		<td width="100" align="right" class="key"> <?php echo 'Instagram url';?>: </td>
		<td> <input  class="text_area" type="url" placeholder="https://www.instagram.com/" name="social_instagram" id="social_instagram" size="50" maxlength="250" value="<?php echo $social_instagram; ?>" /> </td>
	</tr>
	<tr>
		<td width="100" align="right" class="key"> <?php echo 'Twitter url';?>: </td>
		<td> <input  class="text_area" type="url" placeholder="https://twitter.com" name="social_twitter" id="social_twitter" size="50" maxlength="250" value="<?php echo $social_twitter; ?>" /> </td>
	</tr>
	<tr>
		<td width="100" align="right" class="key"> <?php echo 'Google url';?>: </td>
		<td> <input  class="text_area" type="url" placeholder="https://plus.google.com/" name="social_google" id="social_google" size="50" maxlength="250" value="<?php echo $social_google; ?>" /> </td>
	</tr>




	<tr>
		<td width="100" align="right" class="key"> <?php echo 'Custom url';?>: </td>
		<td>
			<?php
			$check0 = "";
			$check1 = "";
			if ($want_url == 0)
				$check0 = ' checked="checked" ';
			if ($want_url == 1)
				$check1 = ' checked="checked" ';
			?>
			<input type="radio" name="want_url" id="custom_url" value="0"  <?php echo isset($check0)?$check0:''; ?> />
			<label for="custom_url"><?php echo 'No';?></label>
			<input type="radio" name="want_url" id="default_url" value="1" <?php echo isset($check1)?$check1:''; ?>   />
			<label for="default_url"><?php echo 'Yes';?></label>
		</td>
	</tr>
	<tr id="team_url_tr">
		<td width="100" align="right" class="key"> <?php echo 'Url';?>: </td>
		<td> <input  class="text_area" type="url" name="team_url" id="team_url" size="50" maxlength="250" value="<?php echo isset($team_url)?$team_url:''; ?>" /> </td>
	</tr>

</table>
