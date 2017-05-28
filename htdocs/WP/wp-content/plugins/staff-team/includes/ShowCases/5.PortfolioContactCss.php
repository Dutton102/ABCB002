<style>
/*-- SEARCH --*/
<?php echo '.' . $theme . ' #Portfolio_search '; ?>
.search_cont { border: 1px solid <?php echo isset($param_values['port_search_border']) ? $param_values['port_search_border'] : '#D9D9D9'; ?>; }

<?php echo '.' . $theme . ' #Portfolio_search '; ?>
.search_cont[placeholder]{ color: <?php echo isset($param_values['port_search_color']) ? $param_values['port_search_color'] : '#999999'; ?> !important;}
<?php echo '.' . $theme . ' #Portfolio_search '; ?>
.search_cont::-moz-placeholder {color: <?php echo isset($param_values['port_search_color']) ? $param_values['port_search_color'] : '#999999'; ?> !important;} 
<?php echo '.' . $theme . ' #Portfolio_search '; ?>
.search_cont:-moz-placeholder {color: <?php echo isset($param_values['port_search_color']) ? $param_values['port_search_color'] : '#999999'; ?> !important; }
<?php echo '.' . $theme . ' #Portfolio_search '; ?>
.search_cont:-ms-input-placeholder {color: <?php echo isset($param_values['port_search_color']) ? $param_values['port_search_color'] : '#999999'; ?> !important; }

/*--- PAGINATION ---*/
<?php echo '.' . $theme . ' #Portfolio_pgnt '; ?>
.staff_pagination{ 
	border: 0.1em solid <?php echo isset($param_values['port_pagination_border_color']) ? $param_values['port_pagination_border_color'] : '#DADADA'; ?>;
	line-height: <?php echo ((isset($param_values['port_pagination_font']) ? $param_values['port_pagination_font'] : '16')+10); ?>px;
	border-right: 0;
	margin: 5% auto;
	display:table;
}	
<?php echo '.' . $theme . ' #Portfolio_pgnt '; ?>
.staff_pagination li{
	border-right: 0.1em solid <?php echo isset($param_values['port_pagination_border_color']) ? $param_values['port_pagination_border_color'] : '#DADADA'; ?>;
	background: <?php echo isset($param_values['port_pagination_bg']) ? $param_values['port_pagination_bg'] : '#FFFFFF'; ?>;
}
<?php echo '.' . $theme . ' #Portfolio_pgnt '; ?>
.staff_pagination li span,
<?php echo '.' . $theme . ' #Portfolio_pgnt '; ?>
.staff_pagination li a{
	font-size: <?php echo isset($param_values['port_pagination_font']) ? $param_values['port_pagination_font'] : '16'; ?>px !important;
	color: <?php echo isset($param_values['port_pagination_font_color']) ? $param_values['port_pagination_font_color'] : '#999999'; ?> !important
}	
<?php echo '.' . $theme . ' #Portfolio_pgnt '; ?>
.staff_pagination li:hover,
<?php echo '.' . $theme . ' #Portfolio_pgnt '; ?>
.staff_pagination li:hover a,
<?php echo '.' . $theme . ' #Portfolio_pgnt '; ?>
.staff_pagination li:hover span,
<?php echo '.' . $theme . ' #Portfolio_pgnt '; ?>
.staff_pagination .active_pg span{ 
	background: <?php echo isset($param_values['port_active_pagination_bg']) ? $param_values['port_active_pagination_bg'] : '#00A99D'; ?>; 
	color: <?php echo isset($param_values['port_pagination_bg']) ? $param_values['port_pagination_bg'] : '#FFFFFF'; ?> !important
}

/*--- CONTACTS ---*/
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.main_contact{
	padding:0; margin:3% 0;
	list-style:none;
}
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_contact{
	border: <?php echo isset($param_values['port_border_width']) ? $param_values['port_border_width'] : '1'; ?>px <?php echo isset($param_values['port_border_style']) ? $param_values['port_border_style'] : 'solid'; ?> <?php echo isset($param_values['port_border_color']) ? $param_values['port_border_color'] : '#FFFFFF'; ?>;				
	width: <?php echo isset($param_values['port_contact_width']) ? $param_values['port_contact_width'] : '47'; ?>%;
	height: <?php echo isset($param_values['port_contact_height']) ? $param_values['port_contact_height'] : '310' ?>px;
	color:<?php echo isset($param_values['port_text_color']) ? $param_values['port_text_color'] : '#F2F2F2'; ?>  !important;		
}
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_contact:nth-child(2n+1){z-index:2;}
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_contact:nth-child(2n){z-index:1;}

/*-- HOVER --*/
<?php 	
if(isset($param_values['port_hover_bg_color'])) {
	$port_hover_bg = $param_values['port_hover_bg_color'];
} else $port_hover_bg = '#00A99D';
$hover_bg_color='rgba('.HEXDEC(SUBSTR($port_hover_bg, 1, 2)).','.HEXDEC(SUBSTR($port_hover_bg, 3, 2)).','.HEXDEC(SUBSTR($port_hover_bg, 5, 2)).',0.7'.')';
?>
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_overlay{
	padding: 20% 1%;
	text-align:center;		
	background:<?php echo $hover_bg_color; ?> !important;		
}

<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_contact.port_view:hover .staff_overlay { opacity:1; }

/*--- TITLE ---*/
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_top_info{
	top: 10%; left:-15%;
	margin-left: -40%;
	opacity: 0;
	width: 80%;
}
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_contact.port_view:hover .staff_top_info{
	left: 50% !important; 
	opacity:1 !important;
}
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_cont_name{
	color: <?php echo isset($param_values['port_title_color']) ? $param_values['port_title_color'] : '#FFFFFF'; ?> !important; 
	font-size:<?php echo isset($param_values['port_title_size']) ? $param_values['port_title_size'] : '20'; ?>px;
	margin:10px 0px 5px;
	font-weight:700;
	width: 100%;
}

/*-- CATEGORY --*/
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_category{
	color: <?php echo isset($param_values['port_text_color']) ? $param_values['port_text_color'] : '#FFFFFF'; ?> !important;        
	font-size:<?php echo ((isset($param_values['port_title_size']) ? $param_values['port_title_size'] : '20')-5); ?>px;
}

/*-- MORE INFO --*/
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_more_inform a{
	text-decoration: none;
	color: inherit;
}
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_more_info_plus{ 
	border:2px solid <?php echo isset($param_values['port_link_color']) ? $param_values['port_link_color'] : '#FFFFFF'; ?> !important; 
	margin-left: -30px; left:50%; top:50%;
}
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_more_info_plus:before{ color:<?php echo isset($param_values['port_link_color']) ? $param_values['port_link_color'] : '#FFFFFF'; ?> !important; }

<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_more_info_plus:hover{ 
	border:2px solid <?php echo isset($param_values['port_link_hover_color']) ? $param_values['port_link_hover_color'] : '#FFFFFF'; ?> !important;
	transform: rotate(360deg);
}
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_more_info_plus:hover:before { 
	color:<?php echo isset($param_values['port_link_hover_color']) ? $param_values['port_link_hover_color'] : '#FFFFFF'; ?> !important; 
}

/*--more_info_text--*/
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_more_info{
	font-size:<?php echo ((isset($param_values['port_title_size']) ? $param_values['port_title_size'] : '20')-5); ?>px;
	text-transform: uppercase;
	bottom: 4%; right: 24%;
	position:absolute;
	min-width: 30%;
	opacity:0;
}
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_contact.port_view:hover .staff_more_info{ right: 4%; opacity:1; }

<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_more_info:after{
	content: '»';
	padding: 2%;
	font-size: 1.4em;
}
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_more_info a { display:inline-block !important;}

<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_more_info a,
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_more_info:after{
	color: <?php echo isset($param_values['port_link_color']) ? $param_values['port_link_color'] : '#FFFFFF'; ?>  !important; 
}
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_more_info:hover a,
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_more_info:hover:after{ 
	color: <?php echo isset($param_values['port_link_hover_color']) ? $param_values['port_link_hover_color'] : '#FFFFFF'; ?> !important;
}
<?php
  if(isset($param_values["portfolio_image_size"]) && intval($param_values["portfolio_image_size"]) ===1){
    $background_size = "contain";
  }else{
    $background_size = "cover";
  }
?>
<?php echo '.' . $theme;?> #Portfolio_contact .port_cont_main_picture{
     background-size:<?php echo $background_size;?>;
   }

/*-******************************************************-POPUP-********************************************************-*/
<?php 	
if(isset($param_values['port_popup_bg_color'])) {
	$port_popup_bg = $param_values['port_popup_bg_color'];
} else $port_popup_bg = '#00A99D';
$hover_popup_bg_color='rgba('.HEXDEC(SUBSTR($port_popup_bg, 1, 2)).','.HEXDEC(SUBSTR($port_popup_bg, 3, 2)).','.HEXDEC(SUBSTR($port_popup_bg, 5, 2)).',0.9'.')';

/*left-ic*/
if (isset($param_values['port_popup_position']) && $param_values['port_popup_position']=='0'){
	$popup_position_right = '';
	$popup_position_left = '0';
	$animation_right = '';
	$animation_left = '-100%';
	$margin_left = 'auto';
}
/*middle*/
else if (isset($param_values['port_popup_position']) && $param_values['port_popup_position']=='1'){
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

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
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

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.slide_popup { 
	right:<?php echo $popup_position_right; ?>;
	left:<?php echo $popup_position_left; ?>;
}

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.popup_info .stPopOut{
	position: absolute;
	overflow-y: auto;
	height: 100%;
	width: 103%;
	right: -3%;
}

/*-Close Button-*/
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.close_popup_square{
	border:2px solid <?php echo isset($param_values['port_popoup_close_color']) ? $param_values['port_popoup_close_color'] : '#FFFFFF'; ?> !important;
	top:0;
}
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_phone .close_popup_square{width: 30px;height: 35px;}

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.close_popup_square span{
	color: <?php echo isset($param_values['port_popoup_close_color']) ? $param_values['port_popoup_close_color'] : '#FFFFFF'; ?> !important; 
}

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.popup_info .staff_top_info{
	border-bottom: 1px solid <?php echo isset($param_values['port_popup_title_color']) ? $param_values['port_popup_title_color'] : '#FFFFFF'; ?> !important;
	position:relative;
	background:none;
	margin:0 0 10%;
	opacity:1;
	left:0; 
}
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.popup_info .staff_top_info .staff_cont_name,
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.popup_info .staff_top_info .staff_category {
	color: <?php echo isset($param_values['port_popup_title_color']) ? $param_values['port_popup_title_color'] : '#FFFFFF'; ?>  !important; 
	line-height:inherit; margin:0;
}

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.popup_info .staff_top_info .staff_cont_name{ font-size:<?php echo isset($param_values['port_popup_title_size']) ? $param_values['port_popup_title_size'] : '30'; ?>px; }

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.popup_info .staff_top_info .staff_category{ font-size:<?php echo (isset($param_values['port_text_size']) ? $param_values['port_text_size'] : '16'); ?>px; }

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.popup_info .staff_image_border {margin:0 auto;}

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.short_cont_main_picture,
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_image_border{ height: <?php echo isset($param_values['port_popup_img_height']) ? $param_values['port_popup_img_height'] : '310'; ?>px; width:400px; }

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.image_soc_close{
	position: relative;
	margin: 4% 0 0;
	width:100%;
}

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.cont_main_picture_a{
	display:table;
	margin:0 auto;
}

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.popup_content{
	background-color: <?php echo isset($param_values['port_popup_content_bg_color']) ? $param_values['port_popup_content_bg_color'] : '#000000'; ?>;
	font-size: <?php echo isset($param_values['short_text_size']) ? $param_values['port_text_size'] : '16'; ?>px;		
	display:block;
	padding: 6%;
}
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.content_text {
	color: <?php echo isset($param_values['port_popup_text_color']) ? $param_values['port_popup_text_color'] : '#FFFFFF'; ?>  !important;
	font-size: <?php echo isset($param_values['port_popup_text_size']) ? $param_values['port_popup_text_size'] : '16'; ?>px !important;
}
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.content_text:first-letter{
	font-size: <?php echo ((isset($param_values['port_popup_text_size']) ? $param_values['port_popup_text_size'] : '16')+40); ?>px !important;
	color:<?php echo isset($param_values['port_popup_title_color']) ? $param_values['port_popup_title_color'] : '#FFFFFF'; ?> !important;
	font-family:serif !important;
	line-height: 0;
}
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.content_text a{color:<?php echo isset($param_values['port_popup_link_color']) ? $param_values['port_popup_link_color'] : '#FFFFFF'; ?> !important;}
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.content_text a:hover{color:<?php echo isset($param_values['port_popup_link_hover_color']) ? $param_values['port_popup_link_hover_color'] : '#FFFFFF'; ?> !important;}

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.popup_content,
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.bottom_info{ width: 400px; margin:0 auto; }

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.bottom_info{ position:relative; margin-bottom: 5%; min-height: 50px;}

/*--- SOCIAL_ICON ---*/
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.short_inform:hover .staff_soc_icons{display:block;}

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
staff_soc_icons {
	position:absolute;
	left:0; top:0;
}
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_soc_icons ul li, 
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_icon{ 
	border-radius: <?php echo isset($param_values['port_popup_icon_circle']) && $param_values['port_popup_icon_circle']=='1'? '50%' : '0px'; ?>;
	display: inline-block;
}

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_soc_icons ul{ padding:0; margin:0; }

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_icon{
	background: <?php echo isset($param_values['port_popup_soc_bg_color']) ? $param_values['port_popup_soc_bg_color'] : '#000000'; ?>;
	position: relative;
	text-align: center;
	font-size: 16px;		
}
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_icon:hover { background: <?php echo isset($param_values['port_popup_soc_hover_bg_color']) ? $param_values['port_popup_soc_hover_bg_color'] : '#000000'; ?>; }

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.fa {
	color: <?php echo isset($param_values['port_popup_icons_color']) ? $param_values['port_popup_icons_color'] : '#FFFFFF'; ?> !important;
	padding: 15px 20px;
}
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.fa:hover {color:<?php echo isset($param_values['port_popup_icons_hover_color']) ? $param_values['port_popup_icons_hover_color'] : '#00A99D'; ?> !important;}

/*-- CHECKED ICONS --*/
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_icon.facebook,
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_icon.instagram,
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_icon.twitter,
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_icon.gplus{
	display: none !important;
}
<?php 	
if(isset($param_values['port_popup_social_icons'])  && in_array(0,$param_values['port_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #portfolio_popup '; ?>
	.staff_icon.facebook {display: block !important; }
<?php
} 
if(isset($param_values['port_popup_social_icons'])  && in_array(1,$param_values['port_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #portfolio_popup '; ?>
	.staff_icon.instagram {display: block !important; }
<?php
}
if(isset($param_values['port_popup_social_icons'])  && in_array(2,$param_values['port_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #portfolio_popup '; ?>
	.staff_icon.twitter {display: block !important; }
<?php
}
if(isset($param_values['port_popup_social_icons'])  && in_array(3,$param_values['port_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #portfolio_popup '; ?>
	.staff_icon.gplus {display: block !important; }
<?php 
} ?>

/*--- MORE INFO ---*/
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_more_info_btn{
	background: <?php echo isset($param_values['port_popup_button_bg']) ? $param_values['port_popup_button_bg'] : '#000000'; ?>;
	text-align: center;
	position: absolute;
}

<?php if((isset($param_values['port_popup_social_icons'])  && in_array(0,$param_values['port_popup_social_icons'])) || (isset($param_values['port_popup_social_icons'])  && in_array(1,$param_values['port_popup_social_icons']))  || (isset($param_values['port_popup_social_icons'])  && in_array(2,$param_values['port_popup_social_icons']))  || (isset($param_values['port_popup_social_icons'])  && in_array(3,$param_values['port_popup_social_icons'])) ){ ?>
	<?php echo '.' . $theme . ' #portfolio_popup '; ?>
	.staff_more_info_btn{right: 0; top:0;}
<?php } else { ?>
	<?php echo '.' . $theme . ' #portfolio_popup '; ?>
	.staff_more_info_btn{
		position:static;
		display:table;
		margin:0 auto;
	}
	<?php echo '.' . $theme . ' #portfolio_popup '; ?>
	.staff_soc_icons{display:none !important}
<?php } ?>

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_more_info_btn a{		
	color:<?php echo isset($param_values['port_popup_button_color']) ? $param_values['port_popup_button_color'] : '#FFFFFF'; ?> !important;
	text-decoration: none;
	font-weight: bold;
	font-size:16px;
	display: block;
	width: 154px;
	padding: 8px;
}
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_more_info_btn:hover{
	background: <?php echo isset($param_values['port_popup_button_hover_bg']) ? $param_values['port_popup_button_hover_bg'] : '#000000'; ?>;
}
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_more_info_btn:hover a {
	color: <?php echo isset($param_values['port_popup_button_hover_color']) ? $param_values['port_popup_button_hover_color'] : '#00A99D'; ?> !important;
}


/*-******************************************************-RESPONSIVE_TABLET-********************************************************-*/
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_tablet .staff_contact {
	height: <?php echo ((isset($param_values['port_contact_height']) ? $param_values['port_contact_height'] : '310')-60) ?>px;
}

/*-- POPUP --*/
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_tablet .popup_info.slide_popup {width:100%; margin:0 auto;}


/*-******************************************************-RESPONSIVE_PHONE-********************************************************-*/
<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
.staff_phone .staff_contact{
	height: <?php echo ((isset($param_values['port_contact_height']) ? $param_values['port_contact_height'] : '310')-60) ?>px;
	width:45%;
}

/*-- POPUP --*/
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_phone .popup_info {
	position:relative;
	width:100%;
}
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_phone .image_soc_close{margin-top:15% !important;}
	
<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_phone .popup_info.slide_popup {right:0; left:0;}

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_phone .content_text {
	font-size: <?php echo ((isset($param_values['port_popup_text_size']) ? $param_values['port_popup_text_size'] : '16')-3); ?>px !important;
}

<?php echo '.' . $theme . ' #portfolio_popup '; ?>
.staff_phone .cont_main_picture_a{ width:100%;}
	
@media screen and (max-width: 500px){
	<?php echo '.' . $theme . ' #Portfolio_contact '; ?>
	.staff_contact{
		height: <?php echo isset($param_values['port_contact_height']) ? $param_values['port_contact_height'] : '310'?>px  !important;
		width:100% !important;
	}
	<?php echo '.' . $theme . ' #portfolio_popup '; ?>
	.staff_image_border,
	<?php echo '.' . $theme . ' #portfolio_popup '; ?>
	.popup_content,
	<?php echo '.' . $theme . ' #portfolio_popup '; ?>		
	.bottom_info{ width:90%;}
	
	<?php echo '.' . $theme . ' #portfolio_popup '; ?>
	.staff_more_info_btn {
		position:inherit !important;
		margin:2% auto; 
		display:table;
	}
	<?php echo '.' . $theme . ' #portfolio_popup '; ?>
	.staff_soc_icons{
		display: table;
		margin: 0 auto;
	}
}