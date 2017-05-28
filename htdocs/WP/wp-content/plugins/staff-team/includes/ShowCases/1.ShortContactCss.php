<style>
/*-- SEARCH --*/
<?php echo '.' . $theme . ' #short_search '; ?>
.search_cont { border: 1px solid <?php echo isset($param_values['short_search_border']) ? $param_values['short_search_border'] : '#D9D9D9'; ?>; }

<?php echo '.' . $theme . ' #short_search '; ?>
.search_cont[placeholder]{ color: <?php echo isset($param_values['short_search_color']) ? $param_values['short_search_color'] : '#999999'; ?> !important;}
<?php echo '.' . $theme . ' #short_search '; ?>
.search_cont::-moz-placeholder {color: <?php echo isset($param_values['short_search_color']) ? $param_values['short_search_color'] : '#999999'; ?> !important;} 
<?php echo '.' . $theme . ' #short_search '; ?>
.search_cont:-moz-placeholder {color: <?php echo isset($param_values['short_search_color']) ? $param_values['short_search_color'] : '#999999'; ?> !important; }
<?php echo '.' . $theme . ' #short_search '; ?>
.search_cont:-ms-input-placeholder {color: <?php echo isset($param_values['short_search_color']) ? $param_values['short_search_color'] : '#999999'; ?> !important; }

/*-- PAGINATION --*/
<?php echo '.' . $theme . ' #short_pgnt '; ?>
.staff_pagination{ 
	border: 0.1em solid <?php echo isset($param_values['short_pagination_border_color']) ? $param_values['short_pagination_border_color'] : '#DADADA'; ?>;
	line-height: <?php echo ((isset($param_values['short_pagination_font_size']) ? $param_values['short_pagination_font_size'] : '16')+10); ?>px;
	border-right: 0;
}	
<?php echo '.' . $theme . ' #short_pgnt '; ?>
.staff_pagination li{
	border-right: 0.1em solid <?php echo isset($param_values['short_pagination_border_color']) ? $param_values['short_pagination_border_color'] : '#DADADA'; ?>;
	background: <?php echo isset($param_values['short_pagination_bg']) ? $param_values['short_pagination_bg'] : '#FFFFFF'; ?>;
}
<?php echo '.' . $theme . ' #short_pgnt '; ?>
.staff_pagination li span,
<?php echo '.' . $theme . ' #short_pgnt '; ?>
.staff_pagination li a{
	font-size: <?php echo isset($param_values['short_pagination_font_size']) ? $param_values['short_pagination_font_size'] : '16'; ?>px !important;
	color: <?php echo isset($param_values['short_pagination_font_color']) ? $param_values['short_pagination_font_color'] : '#999999'; ?> !important
}	
<?php echo '.' . $theme . ' #short_pgnt '; ?>
.staff_pagination li:hover,
<?php echo '.' . $theme . ' #short_pgnt '; ?>
.staff_pagination li:hover a,
<?php echo '.' . $theme . ' #short_pgnt '; ?>
.staff_pagination li:hover span,
<?php echo '.' . $theme . ' #short_pgnt '; ?>
.staff_pagination .active_pg span{ 
	background: <?php echo isset($param_values['short_active_pagination_bg']) ? $param_values['short_active_pagination_bg'] : '#d9d9d9'; ?>; 
	color: <?php echo isset($param_values['short_pagination_bg']) ? $param_values['short_pagination_bg'] : '#FFFFFF'; ?> !important
}

/*-- CONTACTS --*/
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_contact {
	border: <?php echo isset($param_values['short_border_width']) ? $param_values['short_border_width'] : '1'; ?>px <?php echo isset($param_values['short_border_style']) ? $param_values['short_border_style'] : 'solid'; ?> <?php echo isset($param_values['short_border_color']) ? $param_values['short_border_color'] : '#d9d9d9'; ?>;
	height:<?php echo isset($param_values['short_picture_height']) ? $param_values['short_picture_height'] : '310'; ?>px;
	width: <?php echo isset($param_values['short_picture_width']) ? $param_values['short_picture_width'] : '48'; ?>%;
	text-align: center;
	overflow:hidden;
}

/*-- HOVER --*/	
<?php 	
if(isset($param_values['short_hover_bg_color'])) {
	$short_hover_bg = $param_values['short_hover_bg_color'];
} else $short_hover_bg = '#00A99D';
$hover_bg_color='rgba('.HEXDEC(SUBSTR($short_hover_bg, 1, 2)).','.HEXDEC(SUBSTR($short_hover_bg, 3, 2)).','.HEXDEC(SUBSTR($short_hover_bg, 5, 2)).',0.7'.')'; ?>

<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_overlay { background:<?php echo $hover_bg_color; ?> !important; }	

<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_contact:hover .staff_overlay { opacity:1; }	

/*-- TITLE --*/
<?php 	
if(isset($param_values['short_title_bg_color'])) {
	$short_title_bg = $param_values['short_title_bg_color'];
} else $short_title_bg = '#000000';
$bg_color='rgba('.HEXDEC(SUBSTR($short_title_bg, 1, 2)).','.HEXDEC(SUBSTR($short_title_bg, 3, 2)).','.HEXDEC(SUBSTR($short_title_bg, 5, 2)).',0.5'.')'; ?>

<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_top_info{
	bottom: 0px;
	padding: 3% 0%;
	line-height:20px !important;
	background: <?php echo $bg_color; ?>;
}
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_cont_name{
	color: <?php echo isset($param_values['short_title_color']) ? $param_values['short_title_color'] : '#FFFFFF'; ?> !important;
	font-size:<?php echo isset($param_values['short_title_size']) ? $param_values['short_title_size'] : '18'; ?>px !important;			
	width: 100%;		
}

<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_contact:hover .staff_top_info {
	display:block; top:7%; height:22%;
	background-color:transparent;
}

/*-- CATEGORY --*/
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_category{
	color: <?php echo isset($param_values['short_title_color']) ? $param_values['short_title_color'] : '#FFFFFF'; ?> !important;
	font-size:16px !important;        
}

/*-- MORE INFO --*/
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_more_inform{
   width:100%; height:130px;
   position:absolute;
   top:30%;
}
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_more_inform a{ text-decoration: none; color: inherit; }

/*--more_info_plus--*/
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_more_info_plus{
	border:2px solid <?php echo isset($param_values['short_link_color']) ? $param_values['short_link_color'] : '#FFFFFF'; ?> !important;;
	opacity:0; left:-50%;
}
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_more_info_plus:hover{
	border:2px solid <?php echo isset($param_values['short_link_hover_color']) ? $param_values['short_link_hover_color'] : '#D9D9D9'; ?> !important;;
}
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_more_info_plus:before { color:<?php echo isset($param_values['short_link_color']) ? $param_values['short_link_color'] : '#FFFFFF'; ?> !important; }

<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_more_info_plus:hover:before { 
	color:<?php echo isset($param_values['short_link_hover_color']) ? $param_values['short_link_hover_color'] : '#D9D9D9'; ?> !important;
}
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_contact.short_view:hover .staff_more_info_plus{
	margin-left: -30px;	
	left: 50% !important;
	opacity:1 !important;
	transform: rotate(360deg);
}
/*--more_info_text--*/
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_more_info{ 
	font-size:<?php echo ((isset($param_values['short_title_size']) ? $param_values['short_title_size'] : '18')+5); ?>px !important;
}	

<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_more_info a { display:inline-block !important;} 

<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_more_info:after{
	content: '»';
	font-size: 1em !important;
}	
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_more_info a,
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_more_info:after	{ 
	color: <?php echo isset($param_values['short_link_color']) ? $param_values['short_link_color'] : '#FFFFFF'; ?> !important;
}
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_more_info:hover a,
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_more_info:hover:after{ 
	color: <?php echo isset($param_values['short_link_hover_color']) ? $param_values['short_link_hover_color'] : '#D9D9D9'; ?> !important;
}

/*-- SOCIAL_ICON --*/
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_soc_icons{
	position: absolute;
	bottom: -25%;
	width:100%;
	opacity:0;
}
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_contact.short_view:hover .staff_soc_icons{ bottom: 2%; opacity:1; }

<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_soc_icons ul li, 
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_icon{ 
	border-radius: <?php echo isset($param_values['short_icon_circle']) && $param_values['short_icon_circle']=='1'? '50%' : '0px'; ?>;
	display: inline-block;
	margin-right:1px;
	margin-bottom:1px;
}

<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_soc_icons ul{ padding:0; margin:0; }

<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_icon{
	background: <?php echo isset($param_values['short_soc_bg_color']) ? $param_values['short_soc_bg_color'] : '#00A99D'; ?>;
	position: relative;
	text-align: center;
	font-size: 19px !important;
}
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_icon:hover { background: <?php echo isset($param_values['short_soc_hover_bg_color']) ? $param_values['short_soc_hover_bg_color'] : '#FFFFFF'; ?>; }

<?php echo '.' . $theme . ' #short_contact '; ?>
.fa {
	color: <?php echo isset($param_values['short_icons_color']) ? $param_values['short_icons_color'] : '#000000'; ?> !important;
	padding: 15px 20px;
}
<?php echo '.' . $theme . ' #short_contact '; ?>
.fa:hover {color:<?php echo isset($param_values['short_icons_hover_color']) ? $param_values['short_icons_hover_color'] : '#00A99D'; ?> !important;}
	
/*-- CHECKED ICONS --*/
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_icon.facebook,
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_icon.instagram,
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_icon.twitter,
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_icon.gplus{
	display: none !important;
}
<?php 	
if(isset($param_values['short_social_icons'])  && in_array(0,$param_values['short_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #short_contact '; ?>
	.staff_icon.facebook {display: block !important; }
<?php
} 
if(isset($param_values['short_social_icons'])  && in_array(1,$param_values['short_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #short_contact '; ?>
	.staff_icon.instagram {display: block !important; }
<?php
}
if(isset($param_values['short_social_icons'])  && in_array(2,$param_values['short_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #short_contact '; ?>
	.staff_icon.twitter {display: block !important; }
<?php
}
if(isset($param_values['short_social_icons'])  && in_array(3,$param_values['short_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #short_contact '; ?>
	.staff_icon.gplus {display: block !important; }
<?php 
} ?>
<?php
  if(isset($param_values["short_image_size"]) && intval($param_values["short_image_size"]) ===1){
    $background_size = "contain";
  }else{
    $background_size = "cover";
  }
?>
<?php echo '.' . $theme;?> #short_contact .short_cont_main_picture{
   background-size:<?php echo $background_size;?>;
}
/*-******************************************************-POPUP-********************************************************-*/
<?php
if(isset($param_values['short_popup_bg_color'])) {
	$short_popup_bg = $param_values['short_popup_bg_color'];
} else $short_popup_bg = '#00A99D';
$hover_popup_bg_color = 'rgba('.HEXDEC(SUBSTR($short_popup_bg, 1, 2)).','.HEXDEC(SUBSTR($short_popup_bg, 3, 2)).','.HEXDEC(SUBSTR($short_popup_bg, 5, 2)).',0.9'.')';

/*left -ic*/
if (isset($param_values['short_popup_position']) && $param_values['short_popup_position']=='0'){
	$popup_position_right = '';
	$popup_position_left = '0';
	$animation_right = '';
	$animation_left = '-100%';
	$margin_left = 'auto';
}
/*middle*/
else if (isset($param_values['short_popup_position']) && $param_values['short_popup_position']=='1'){
	$position = '0%';
	$margin_left = '30%';
	$animation_right='';
	$animation_left='';
	$popup_position_right = '';
	$popup_position_left = '';
}
/*right-ic*/
else {
	$popup_position_right = '0';
	$popup_position_left = '';
	$animation_right = '-100%';
	$animation_left = '';
	$margin_left = 'auto';
} 
?>

<?php echo '.' . $theme . ' #short_popup '; ?>
.popup_info{ 
	background:<?php echo $hover_popup_bg_color; ?> !important;
	margin-left: <?php echo $margin_left; ?>;
	right:<?php echo $animation_right; ?>;
	left:<?php echo $animation_left; ?>;
	position: absolute;
	overflow: hidden;
	padding: 0 1%;
	height:100%;
	width:600px;
}

<?php echo '.' . $theme . ' #short_popup '; ?>
.slide_popup {  
	right:<?php echo $popup_position_right; ?>;
	left:<?php echo $popup_position_left; ?>;
}

<?php echo '.' . $theme . ' #short_popup '; ?>
.popup_info .stPopOut{
	position: absolute;
	overflow-y: auto;
	height: 100%;
	width: 100%;
	right: -3%;
}

/*-Close Button-*/
<?php echo '.' . $theme . ' #short_popup '; ?>
.close_popup_circle{
	border:2px solid <?php echo isset($param_values['short_popoup_close_color']) ? $param_values['short_popoup_close_color'] : '#FFFFFF'; ?> !important;
}
<?php echo '.' . $theme . ' #short_popup '; ?>
.close_popup_circle span{
	color: <?php echo isset($param_values['short_popoup_close_color']) ? $param_values['short_popoup_close_color'] : '#FFFFFF'; ?> !important; 
}

/*--TITLE--*/
<?php echo '.' . $theme . ' #short_popup '; ?>
.popup_info .staff_top_info{
	position:relative;
	text-align: center;
	background:none;
}
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_cont_name,
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_category	{
	color: <?php echo isset($param_values['short_popup_title_color']) ? $param_values['short_popup_title_color'] : '#FFFFFF'; ?> !important; 
}
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_cont_name{
	font-size:<?php echo isset($param_values['short_popup_title_size']) ? $param_values['short_popup_title_size'] : '30'; ?>px !important;	
	line-height: normal;
}
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_category { 
	font-size:<?php echo isset($param_values['short_popup_text_size']) ? $param_values['short_popup_text_size'] : '16'; ?>px !important;
}

/*--ALL_CONTENT--*/
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_main_info{
	position: relative;
	margin: 4% 0 0;
	width:100%;
}

/*--SOC_ICONS--*/
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_soc_icons{
	display:block;
	left:0; top:0;
	width:auto;
	opacity:1;
	margin:0;
}
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_soc_icons ul li,
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_icon{
	border-radius: <?php echo isset($param_values['short_popup_icon_circle']) && $param_values['short_popup_icon_circle']=='1'? '50%' : '0px'; ?>;
	margin-bottom:3px;
	display:block;
}

<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_icon{ background: <?php echo isset($param_values['short_popup_soc_bg_color']) ? $param_values['short_popup_soc_bg_color'] : '#FFFFFF'; ?>; }
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_icon:hover { background: <?php echo isset($param_values['short_popup_soc_hover_bg_color']) ? $param_values['short_popup_soc_hover_bg_color'] : '#00A99D'; ?>; }
<?php echo '.' . $theme . ' #short_popup '; ?>
.fa { color: <?php echo isset($param_values['short_popup_icons_color']) ? $param_values['short_popup_icons_color'] : '#00A99D'; ?> !important; }
<?php echo '.' . $theme . ' #short_popup '; ?>
.fa:hover {color:<?php echo isset($param_values['short_popup_icons_hover_color']) ? $param_values['short_popup_icons_hover_color'] : '#FFFFFF'; ?> !important;}


/*-- CHECKED ICONS --*/
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_icon.facebook,
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_icon.instagram,
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_icon.twitter,
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_icon.gplus{
	display: none !important;
}
<?php
if(isset($param_values['short_popup_social_icons'])  && in_array(0,$param_values['short_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #short_popup '; ?>
	.staff_icon.facebook {display: block !important; }
<?php
} 
if(isset($param_values['short_popup_social_icons'])  && in_array(1,$param_values['short_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #short_popup '; ?>
	.staff_icon.instagram {display: block !important; }
<?php
}
if(isset($param_values['short_popup_social_icons'])  && in_array(2,$param_values['short_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #short_popup '; ?>
	.staff_icon.twitter {display: block !important; }
<?php
}
if(isset($param_values['short_popup_social_icons'])  && in_array(3,$param_values['short_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #short_popup '; ?>
	.staff_icon.gplus {display: block !important; }
<?php 
} ?>

/*--IMAGE_CONTENT--*/
<?php echo '.' . $theme . ' #short_popup '; ?>
.image_content{
	position: absolute;
	margin-left:-205px;
	left:50%;width:75%; 
}
<?php echo '.' . $theme . ' #short_popup '; ?>
.short_cont_main_picture,
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_image_border{ height:325px; width:100%;}

<?php echo '.' . $theme . ' #short_popup '; ?>
.popup_content{
	background-color: <?php echo isset($param_values['short_popup_content_bg_color']) ? $param_values['short_popup_content_bg_color'] : '#000000'; ?>;
	font-size: <?php echo isset($param_values['short_popup_text_size']) ? $param_values['short_popup_text_size'] : '16'; ?>px !important;
	color: <?php echo isset($param_values['short_popup_text_color']) ? $param_values['short_popup_text_color'] : '#D9D9D9'; ?> !important;
	padding: 15% 6% 25%;
	position: absolute;
	width:100%;
}
<?php echo '.' . $theme . ' #short_popup '; ?>
.popup_content:first-letter{
	font-size: <?php echo ((isset($param_values['short_popup_text_size']) ? $param_values['short_popup_text_size'] : '16')+40); ?>px !important;
	color:<?php echo isset($param_values['short_popup_bg_color']) ? $param_values['short_popup_bg_color'] : '#00A99D'; ?> !important;
	font-family:serif !important;
	line-height: 0;
}
<?php echo '.' . $theme . ' #short_popup '; ?>
.popup_content a{ color:<?php echo isset($param_values['short_popoup_link_color']) ? $param_values['short_popoup_link_color'] : '#FFFFFF'; ?> !important; }
<?php echo '.' . $theme . ' #short_popup '; ?>
.popup_content a:hover{ color:<?php echo isset($param_values['short_popoup_link_hover_color']) ? $param_values['short_popoup_link_hover_color'] : '#00A99D'; ?> !important; }

/*--- MORE INFO ---*/
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_more_info_btn{
	background: <?php echo isset($param_values['short_button_bg_color']) ? $param_values['short_button_bg_color'] : '#00A99D'; ?>;
	text-align: center;
	position: absolute;
	margin-bottom:2%;
	margin-left:-65px;
	left:50%; bottom: 1%;
}
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_more_info_btn a{		
	color:<?php echo isset($param_values['short_button_link_color']) ? $param_values['short_button_link_color'] : '#FFFFFF'; ?> !important;
	font-size:16px !important;
	font-weight: bold;
	display: block;
	width: 154px;
	padding: 10px
}
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_more_info_btn:hover{
	background: <?php echo isset($param_values['short_button_hover_bg_color']) ? $param_values['short_button_hover_bg_color'] : '#FFFFFF'; ?>;
}
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_more_info_btn:hover a{
	color: <?php echo isset($param_values['short_button_hover_link_color']) ? $param_values['short_button_hover_link_color'] : '#000000'; ?> !important;
}


/*-******************************************************-RESPONSIVE_TABLET-********************************************************-*/
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_tablet .staff_contact { width: 48%; }

/*-- POPUP --*/
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_tablet .popup_info{ width: 100%; }

<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_tablet .staff_main_info {width:75%; margin:0 auto;}

<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_tablet .popup_info.slide_popup {right:0; left:0; margin:0;}

<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_tablet .staff_soc_icons{left: 3%;}

<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_tablet .image_content { margin-left: -35%; left: 50%; width: 75%;}

/*-******************************************************-RESPONSIVE_PHONE-********************************************************-*/
<?php echo '.' . $theme . ' #short_contact '; ?>
.staff_phone .staff_contact {
	height:<?php echo ((isset($param_values['short_picture_height']) ? $param_values['short_picture_height'] : '310')+40); ?>px;
	width: 100%;
}

/*-- POPUP --*/
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_phone .popup_info{ width: 100%; }

<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_phone .staff_soc_icons{
	display:table;
	position:static;
	margin:0 auto;
}
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_phone .staff_soc_icons ul li,
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_phone .staff_icon{display:inline-block;}

<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_phone .staff_main_info { width:95%;}

<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_phone .image_content {
	width:100%;margin:0;
	position:static;
}
<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_phone .popup_info.slide_popup {right:0; left:0; margin:0;}

<?php echo '.' . $theme . ' #short_popup '; ?>
.staff_phone .popup_content{
	padding-top:85px !important;
	font-size:<?php echo ((isset($param_values['short_popup_text_size']) ? $param_values['short_popup_text_size'] : '16')-3); ?>px !important;
}