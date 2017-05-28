<style>
/*-- SEARCH --*/
<?php echo '.' . $theme . ' #chess_search '; ?>
.search_cont { border: 1px solid <?php echo isset($param_values['chess_search_border']) ? $param_values['chess_search_border'] : '#D9D9D9'; ?>; }

<?php echo '.' . $theme . ' #chess_search '; ?>
.search_cont[placeholder]{ color: <?php echo isset($param_values['chess_search_color']) ? $param_values['chess_search_color'] : '#999999'; ?> !important;}
<?php echo '.' . $theme . ' #chess_search '; ?>
.search_cont::-moz-placeholder {color: <?php echo isset($param_values['chess_search_color']) ? $param_values['chess_search_color'] : '#999999'; ?> !important;} 
<?php echo '.' . $theme . ' #chess_search '; ?>
.search_cont:-moz-placeholder {color: <?php echo isset($param_values['chess_search_color']) ? $param_values['chess_search_color'] : '#999999'; ?> !important; }
<?php echo '.' . $theme . ' #chess_search '; ?>
.search_cont:-ms-input-placeholder {color: <?php echo isset($param_values['chess_search_color']) ? $param_values['chess_search_color'] : '#999999'; ?> !important; }


/*--- PAGINATION ---*/
<?php echo '.' . $theme . ' #chess_pgnt '; ?>
.staff_pagination{ 
	border: 0.1em solid <?php echo isset($param_values['chess_pagination_border_color']) ? $param_values['chess_pagination_border_color'] : '#DADADA'; ?>;
	line-height: <?php echo ((isset($param_values['chess_pagination_font']) ? $param_values['chess_pagination_font'] : '16')+10); ?>px;
	border-right: 0;
}	
<?php echo '.' . $theme . ' #chess_pgnt '; ?>
.staff_pagination li{
	border-right: 0.1em solid <?php echo isset($param_values['chess_pagination_border_color']) ? $param_values['chess_pagination_border_color'] : '#DADADA'; ?>;
	background: <?php echo isset($param_values['chess_pagination_bg']) ? $param_values['chess_pagination_bg'] : '#FFFFFF'; ?>;
}
<?php echo '.' . $theme . ' #chess_pgnt '; ?>
.staff_pagination li span,
<?php echo '.' . $theme . ' #chess_pgnt '; ?>
.staff_pagination li a{
	font-size: <?php echo isset($param_values['chess_pagination_font']) ? $param_values['chess_pagination_font'] : '16'; ?>px !important;
	color: <?php echo isset($param_values['chess_pagination_font_color']) ? $param_values['chess_pagination_font_color'] : '#999999'; ?> !important
}	
<?php echo '.' . $theme . ' #chess_pgnt '; ?>
.staff_pagination li:hover,
<?php echo '.' . $theme . ' #chess_pgnt '; ?>
.staff_pagination li:hover a,
<?php echo '.' . $theme . ' #chess_pgnt '; ?>
.staff_pagination li:hover span,
<?php echo '.' . $theme . ' #chess_pgnt '; ?>
.staff_pagination .active_pg span{ 
	background: <?php echo isset($param_values['chess_active_pagination_bg']) ? $param_values['chess_active_pagination_bg'] : '#00A99D'; ?>; 
	color: <?php echo isset($param_values['chess_pagination_bg']) ? $param_values['chess_pagination_bg'] : '#FFFFFF'; ?> !important
}

/*--- CONTACTS ---*/
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_contact{
	border: <?php echo isset($param_values['chess_border_width']) ? $param_values['chess_border_width'] : '1'; ?>px <?php echo isset($param_values['chess_border_style']) ? $param_values['chess_border_style'] : 'solid'; ?> <?php echo isset($param_values['chess_border_color']) ? $param_values['chess_border_color'] : '#d9d9d9'; ?>;	
	width: <?php echo isset($param_values['chess_contact_width']) && $param_values['chess_contact_width']=='1'? '49%' : '100%'; ?>; 
	height:<?php echo isset($param_values['chess_contact_height']) ? $param_values['chess_contact_height'] : '300'; ?>px;
	font-size: <?php echo isset($param_values['chess_text_size']) ? $param_values['chess_text_size'] : '15'; ?>px !important;
	color:<?php echo isset($param_values['chess_text_color']) ? $param_values['chess_text_color'] : '#949494'; ?> !important;
	margin:1% 1% 1% 0 !important;
}

<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_contact .staff_contact_image,
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_contact .staff_contact_info{
	width:50%;height:100%;
	float:left;
}

<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_contact .staff_contact_info{
	background-color:<?php echo isset($param_values['chess_background_color']) ? $param_values['chess_background_color'] : '#FFFFFF'; ?>;
	font-size:<?php echo isset($param_values['chess_text_size']) ? $param_values['chess_text_size'] : '15'; ?>px;
	color: <?php echo isset($param_values['chess_text_color']) ? $param_values['chess_text_color'] : '#949494'; ?>;
	position:relative;
}

<?php echo '.' . $theme . ' #chess_contact '; ?>
<?php
  if(isset($param_values["chess_info_exerpt"]) && intval($param_values["chess_info_exerpt"]) ===1){
    $overflow = "auto";
  }else{
    $overflow = "hidden";
  }
?>
.contact_content{
	font-size:<?php echo isset($param_values['chess_text_size']) ? $param_values['chess_text_size'] : '15'; ?>px;
	color: <?php echo isset($param_values['chess_text_color']) ? $param_values['chess_text_color'] : '#949494'; ?>;
	height:<?php echo ((isset($param_values['chess_contact_height']) ? $param_values['chess_contact_height'] : '300')-215); ?>px;
	line-height: 22px;
	text-align: left;
  overflow: <?php echo $overflow;?>;
	margin:0 auto;
	width: 90%;
}
<?php echo '.' . $theme . ' #chess_contact '; ?>
.contact_content a { color: <?php echo isset($param_values['chess_links_color']) ? $param_values['chess_links_color'] : '#D9D9D9'; ?> !important; }

<?php echo '.' . $theme . ' #chess_contact '; ?>
.contact_content a:hover { color: <?php echo isset($param_values['chess_links_hover_color']) ? $param_values['chess_links_hover_color'] : '#00A99D'; ?> !important; }

/*--- TITLE ---*/
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_top_info{
	padding:4% 5% 1%;
	position:static;
}
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_top_info a{width:100%; display:inline-block;}

<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_cont_name{
	border-bottom:2px solid <?php echo isset($param_values['chess_border_color']) ? $param_values['chess_border_color'] : '#b3b3b3'; ?>;		
	padding-bottom:6px;
	font-weight: 600;
}
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_cont_name,
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_cont_name:hover{
	color: <?php echo isset($param_values['chess_title_color']) ? $param_values['chess_title_color'] : '#00A99D'; ?> !important;
	font-size:<?php echo isset($param_values['chess_title_size']) ? $param_values['chess_title_size'] : '20'; ?>px;
}

/*-- CATEGORY --*/
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_category{
	color: <?php echo isset($param_values['chess_title_color']) ? $param_values['chess_title_color'] : '#00A99D'; ?> !important;        
	font-size:<?php echo isset($param_values['chess_text_size']) ? $param_values['chess_text_size'] : '15'; ?>px;
}

<?php echo '.' . $theme . ' #chess_contact '; ?>
.chess_bot_info{
	bottom:1%; width:100%;
	position:absolute;
}
/*-- MORE INFO --*/
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_more_info_btn {
	background: <?php echo isset($param_values['chess_button_bg']) ? $param_values['chess_button_bg'] : '#FFFFFF'; ?>;
	border:1px solid <?php echo isset($param_values['chess_button_color']) ? $param_values['chess_button_color'] : '#B3B3B3'; ?>;
	border-left:5px solid <?php echo isset($param_values['chess_button_hover_color']) ? $param_values['chess_button_hover_color'] : '#00A99D'; ?>;
	width:<?php echo isset($param_values['chess_contact_width']) && $param_values['chess_contact_width']=='1'? '90%' : '40%'; ?>;
	text-align: center;
	margin:0% auto 2%;
}

<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_more_info_btn:hover{
	background: <?php echo isset($param_values['chess_button_hover_bg']) ? $param_values['chess_button_hover_bg'] : '#FFFFFF'; ?>;
	border-left:5px solid <?php echo isset($param_values['chess_button_color']) ? $param_values['chess_button_color'] : '#B3B3B3'; ?>;
}

<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_more_info_btn a{
	color:<?php echo isset($param_values['chess_button_color']) ? $param_values['chess_button_color'] : '#B3B3B3'; ?> !important;
	font-size: 15px;
	display: block;
	padding: 8px;
}
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_more_info_btn:hover a{
	color:<?php echo isset($param_values['chess_button_hover_color']) ? $param_values['chess_button_hover_color'] : '#00A99D'; ?> !important;
}

/*--more_info_plus--*/
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_more_info_plus{ 
	opacity:0;z-index: 1;
	left:50%; top:50%; 
	margin-left:-30px; 
}

<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_more_info_plus:before { color:<?php echo isset($param_values['chess_links_color']) ? $param_values['chess_links_color'] : '#D9D9D9'; ?> !important; }

<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_more_info_plus:hover:before { color:<?php echo isset($param_values['chess_links_hover_color']) ? $param_values['chess_links_hover_color'] : '#00A99D'; ?> !important; }

<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_contact.staff_effect_out:hover .staff_more_info_plus{
	opacity:1 !important;
	transform: rotate(360deg);
}

/*--- SOCIAL ICONS ---*/
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_soc_icons { display:table; margin:0 auto; }

<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_soc_icons ul { margin:0;padding:0;}

<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_icon { display: inline-block;}

<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_soc_icons ul li{
	background: <?php echo isset($param_values['chess_social_bg_color']) ? $param_values['chess_social_bg_color'] : '#FFFFFF'; ?>;
	display: inline-block; 
	margin-right: 2px;
	
}
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_soc_icons ul li:hover { background: <?php echo isset($param_values['chess_social_hover_bg_color']) ? $param_values['chess_social_hover_bg_color'] : '#FFFFFF'; ?>; }
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_icon {
	border: 1px solid <?php echo isset($param_values['chess_icons_color']) ? $param_values['chess_icons_color'] : '#B5B5B5'; ?> !important;
	position: relative;
	text-align: center;
	padding: 10px 18px;
	font-size: 16px;
}
<?php echo '.' . $theme . ' #chess_contact '; ?>
.fa { color: <?php echo isset($param_values['chess_icons_color']) ? $param_values['chess_icons_color'] : '#B5B5B5'; ?>; }

<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_icon:hover .fa { color: <?php echo isset($param_values['chess_icons_hover_color']) ? $param_values['chess_icons_hover_color'] : '#00A99D'; ?>; }

/*-- CHECKED ICONS --*/
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_icon.facebook,
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_icon.instagram,
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_icon.twitter,
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_icon.gplus{
	display: none !important;
}
<?php 	
if(isset($param_values['chess_social_icons'])  && in_array(0,$param_values['chess_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #chess_contact '; ?>
	.staff_icon.facebook {display: block !important; }
<?php
} 
if(isset($param_values['chess_social_icons'])  && in_array(1,$param_values['chess_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #chess_contact '; ?>
	.staff_icon.instagram {display: block !important; }
<?php
}
if(isset($param_values['chess_social_icons'])  && in_array(2,$param_values['chess_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #chess_contact '; ?>
	.staff_icon.twitter {display: block !important; }
<?php
}
if(isset($param_values['chess_social_icons'])  && in_array(3,$param_values['chess_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #chess_contact '; ?>
	.staff_icon.gplus {display: block !important; }
<?php 
} ?>


<?php
  if(isset($param_values["chess_image_size"]) && intval($param_values["chess_image_size"]) ===1){
    $background_size = "contain";
  }else{
    $background_size = "cover";
  }
?>
<?php echo '.' . $theme;?> #chess_contact .showCase1_cont_main_picture{
     background-size:<?php echo $background_size;?>;
 }

/*-******************************************************-POPUP-********************************************************-*/
/*-Close Button-*/
<?php echo '.' . $theme . ' #chess_popup '; ?>
.close_popup_square{
	border:2px solid <?php echo isset($param_values['chess_popoup_close_color']) ? $param_values['chess_popoup_close_color'] : '#FFFFFF'; ?> !important;
}
<?php echo '.' . $theme . ' #chess_popup '; ?>
.close_popup_square span{
	color: <?php echo isset($param_values['chess_popoup_close_color']) ? $param_values['chess_popoup_close_color'] : '#FFFFFF'; ?> !important; 
}

<?php 	
if(isset($param_values['chess_popup_bg_color'])) {
	$chess_hover_bg = $param_values['chess_popup_bg_color'];
} else $chess_hover_bg = '#00A99D';
$hover_popup_bg_color='rgba('.HEXDEC(SUBSTR($chess_hover_bg, 1, 2)).','.HEXDEC(SUBSTR($chess_hover_bg, 3, 2)).','.HEXDEC(SUBSTR($chess_hover_bg, 5, 2)).',0.9'.')'; ?>

<?php echo '.' . $theme . ' #chess_popup '; ?>
.popup{	
	background:<?php echo $hover_popup_bg_color; ?> !important;
}
<?php echo '.' . $theme . ' #chess_popup '; ?>
.popup_info{ 
	width:50%; height:100%;
	top:-98%; left: 50%;
	margin-left: -25%;
	position:absolute;
	overflow: hidden;
	padding: 0 0 5%;
	opacity:0;		
}
<?php echo '.' . $theme . ' #chess_popup '; ?>
.slide_popup{top:0%; opacity:1;} 

<?php echo '.' . $theme . ' #chess_popup '; ?>
.popup::-webkit-scrollbar {  display: none; }

<?php echo '.' . $theme . ' #chess_popup '; ?>
.popup_info .stPopOut{
	position: absolute;
	overflow-y: auto;
	height: 100%;
	width: 103%;
	right: -3%;
}

<?php echo '.' . $theme . ' #chess_popup '; ?>
.triagle{
	z-index:5;
	width: 320px;
	left:50%; top:0;
	position:absolute;
	margin-left:-160px;
	border-style: solid;
	width: 0; height: 0;
	border-width: 45px 180px 0 180px;
	border-color: #FFFFFF transparent transparent transparent;
}
<?php echo '.' . $theme . ' #chess_popup '; ?>
.popup_info .staff_top_info{
	position:relative;
	text-align: center;
	background:none;
	margin-top:8%;
	padding:0;
	width:100%;
}
<?php echo '.' . $theme . ' #chess_popup '; ?>
.popup_info .staff_top_info .staff_cont_name{
	font-size:<?php echo isset($param_values['chess_popup_title_size']) ? $param_values['chess_popup_title_size'] : '20'; ?>px !important;
	color: <?php echo isset($param_values['chess_popup_title_color']) ? $param_values['chess_popup_title_color'] : '#FFFFFF'; ?> !important;
	display:block; border: none;
}
<?php echo '.' . $theme . ' #chess_popup '; ?>
.popup_info .staff_top_info .staff_category{
	font-size:<?php echo ((isset($param_values['chess_text_size']) ? $param_values['chess_text_size'] : '15')+5); ?>px !important;
	color: <?php echo isset($param_values['chess_popup_title_color']) ? $param_values['chess_popup_title_color'] : '#FFFFFF'; ?> !important;
}


<?php echo '.' . $theme . ' #chess_popup '; ?>
.popup_info .staff_image_border {margin:0 auto;}

<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_soc_icons{
	left:0; top:0;right: auto;
	opacity:1 !important;
	position:absolute;
	display:block;
	width:65px;
}
<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_soc_icons ul li{
	background: <?php echo isset($param_values['chess_popup_social_bg_color']) ? $param_values['chess_popup_social_bg_color'] : '#FFFFFF'; ?>;
	border-radius: <?php echo isset($param_values['chess_popup_icon_circle']) && $param_values['chess_popup_icon_circle']=='1'? '50%' : '0px'; ?>;
	text-align: center;
	margin-bottom:3px;
	display:block;
}
<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_icon{ font-size: 25px; border:none !important;}

<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_soc_icons ul li:hover{
	background: <?php echo isset($param_values['chess_popup_social_hover_bg_color']) ? $param_values['chess_popup_social_hover_bg_color'] : '#FFFFFF'; ?>;
}

<?php echo '.' . $theme . ' #chess_popup '; ?>
.fa{ color: <?php echo isset($param_values['chess_popup_icons_color']) ? $param_values['chess_popup_icons_color'] : '#B5B5B5'; ?>; }

<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_icon:hover .fa{ color: <?php echo isset($param_values['chess_popup_icons_hover_color']) ? $param_values['chess_popup_icons_hover_color'] : '#00A99D'; ?>;}

/*-- CHECKED ICONS --*/
<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_icon.facebook,
<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_icon.instagram,
<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_icon.twitter,
<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_icon.gplus{
	display: none !important;
}
<?php 	
if(isset($param_values['chess_popup_social_icons'])  && in_array(0,$param_values['chess_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #chess_popup '; ?>
	.staff_icon.facebook {display: block !important; }
<?php
} 
if(isset($param_values['chess_popup_social_icons'])  && in_array(1,$param_values['chess_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #chess_popup '; ?>
	.staff_icon.instagram {display: block !important; }
<?php
}
if(isset($param_values['chess_popup_social_icons'])  && in_array(2,$param_values['chess_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #chess_popup '; ?>
	.staff_icon.twitter {display: block !important; }
<?php
}
if(isset($param_values['chess_popup_social_icons'])  && in_array(3,$param_values['chess_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #chess_popup '; ?>
	.staff_icon.gplus {display: block !important; }
<?php 
} ?>

<?php echo '.' . $theme . ' #chess_popup '; ?>
.popup_info .cont_main_picture_a{
	margin:0 auto;
	display:table;
	width:75%;
}
<?php echo '.' . $theme . ' #chess_popup '; ?>
.short_cont_main_picture,
<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_image_border{
	width: 100%;
	height:330px;
}
<?php echo '.' . $theme . ' #chess_popup '; ?>
.image_soc_close{
	position: relative;
	margin-top: 3%;
	width:100%;
}
<?php echo '.' . $theme . ' #chess_popup '; ?>
.close_popup{
	border:1px solid #fff;
	position: absolute;
	padding:5px 10px;
	font-weight:bold;
	top:0; right:0;
	color:#fff;
}
<?php echo '.' . $theme . ' #chess_popup '; ?>
.popup_content{
	background-color: <?php echo isset($param_values['chess_popup_content_bg_color']) ? $param_values['chess_popup_content_bg_color'] : '#000000'; ?>;
	color: <?php echo isset($param_values['chess_popup_text_color']) ? $param_values['chess_popup_text_color'] : '#949494'; ?> !important;
	font-size: <?php echo isset($param_values['chess_popup_text_size']) ? $param_values['chess_popup_text_size'] : '15'; ?>px;
	margin:0 auto; width:75%;
	padding: 6% 6% 15%;
	position: relative;
}
<?php echo '.' . $theme . ' #chess_popup '; ?>
.popup_content:first-letter{
	font-size: <?php echo ((isset($param_values['chess_popup_text_size']) ? $param_values['chess_popup_text_size'] : '15')+40); ?>px !important;
	color:<?php echo isset($param_values['chess_popup_title_color']) ? $param_values['chess_popup_title_color'] : '#FFFFFF'; ?> !important;
	font-family:serif !important;
	line-height: 0;
}
<?php echo '.' . $theme . ' #chess_popup '; ?>
.popup_content a { color: <?php echo isset($param_values['chess_popup_links_color']) ? $param_values['chess_popup_links_color'] : '#D9D9D9'; ?> !important;}

<?php echo '.' . $theme . ' #chess_popup '; ?>
.popup_content a:hover { color: <?php echo isset($param_values['chess_popup_links_hover_color']) ? $param_values['chess_popup_links_hover_color'] : '#00A99D'; ?> !important;}

/*--- MORE INFO ---*/
<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_more_info_btn{
	background: <?php echo isset($param_values['chess_popup_button_bg']) ? $param_values['chess_popup_button_bg'] : '#00A99D'; ?>;
	border:1px solid <?php echo isset($param_values['chess_border_color']) ? $param_values['chess_border_color'] : '#D9D9D9'; ?> !important;
	left: 50%; bottom: 1%;
	text-align: center;
	position: absolute;
	margin-left:-75px;
	width: 150px;
	opacity:1;
}
<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_more_info_btn a{		
	color:<?php echo isset($param_values['chess_popup_button_color']) ? $param_values['chess_popup_button_color'] : '#FFFFFF'; ?> !important;
	font-weight: bold;
	font-size:16px;
}
<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_more_info_btn:hover{
	background: <?php echo isset($param_values['chess_popup_button_hover_bg']) ? $param_values['chess_popup_button_hover_bg'] : '#FFFFFF'; ?>;
}
<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_more_info_btn:hover a{
	color: <?php echo isset($param_values['chess_popup_button_hover_color']) ? $param_values['chess_popup_button_hover_color'] : '#00A99D'; ?> !important;
}

/*-******************************************************-RESPONSIVE_TABLET-********************************************************-*/
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_tablet .staff_contact {
	height:<?php echo ((isset($param_values['chess_contact_height']) ? $param_values['chess_contact_height'] : '300')+315); ?>px;
	width: 100%;
}

<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_tablet .staff_contact .staff_contact_image, 
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_tablet .staff_effect_in{
	width:100%; height:40%;
}
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_tablet .staff_contact .staff_contact_info{width:100%; height:55%;}

<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_tablet .staff_more_info_btn { padding: 1.5% 0; }

/*-- POPUP --*/
<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_tablet .popup_info{ 
	margin-left:-35%;
	width:70%;
}

/*-******************************************************-RESPONSIVE_PHONE-********************************************************-*/
<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_phone .staff_contact {width:100%;}

<?php echo '.' . $theme . ' #chess_contact '; ?>
.staff_phone .staff_effect_in {width:50%; height:100%;}

@media screen and (max-width: 615px){
	<?php echo '.' . $theme . ' #chess_contact '; ?>
	.staff_phone .staff_contact {width:100%; height: inherit;}		
	<?php echo '.' . $theme . ' #chess_contact '; ?>
	.staff_contact .staff_contact_image {width:100%; height:250px;}
	<?php echo '.' . $theme . ' #chess_contact '; ?>
	.staff_contact .staff_contact_info {width:100%; height:295px;}
	<?php echo '.' . $theme . ' #chess_contact '; ?>
	.staff_phone .staff_effect_in {width:100% !important; height:48% !important;}
}

/*-- POPUP --*/
<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_phone .popup_info{ 
	margin-left:-40%;
	width:80%;
}

<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_phone .popup_content{ width:100% !important;}

<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_phone  .popup_info .cont_main_picture_a{ width:100%;}

<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_phone .triagle{display:none;}
	
<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_phone .popup_mote_info {bottom:1%;}

<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_phone .image_soc_close,
<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_phone .staff_soc_icons { position:static;width:auto;}

<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_phone .staff_soc_icons {display:table;}

<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_phone .staff_icon{padding:10px 20px;}

<?php echo '.' . $theme . ' #chess_popup '; ?>
.staff_phone .staff_soc_icons ul li{display:inline-block;}

@media screen and (max-width: 500px){
	<?php echo '.' . $theme . ' #chess_popup '; ?>
	.popup_info{ 
		position:static; width:90%;
		margin:0 auto !important;
	}
	<?php echo '.' . $theme . ' #chess_popup '; ?>
	.short_cont_main_picture, 
	<?php echo '.' . $theme . ' #chess_popup '; ?>
	.staff_image_border,
	<?php echo '.' . $theme . ' #chess_popup '; ?>
	.popup_content{ width:100% !important;}
	
	<?php echo '.' . $theme . ' #chess_popup '; ?>
	.popup_content{ width:100% !important; padding:10% 6% 35%}
	
	<?php echo '.' . $theme . ' #chess_popup '; ?>
	.image_soc_close:hover .staff_soc_icons {opacity:1 !important;}
}
