<style>
/*-- SEARCH --*/
<?php echo '.' . $theme . ' #square_search '; ?>
.search_cont { border: 1px solid <?php echo isset($param_values['square_search_border']) ? $param_values['square_search_border'] : '#D9D9D9'; ?>; }

<?php echo '.' . $theme . ' #square_search '; ?>
.search_cont[placeholder]{ color: <?php echo isset($param_values['square_search_color']) ? $param_values['square_search_color'] : '#999999'; ?> !important;}
<?php echo '.' . $theme . ' #square_search '; ?>
.search_cont::-moz-placeholder {color: <?php echo isset($param_values['square_search_color']) ? $param_values['square_search_color'] : '#999999'; ?> !important;} 
<?php echo '.' . $theme . ' #square_search '; ?>
.search_cont:-moz-placeholder {color: <?php echo isset($param_values['square_search_color']) ? $param_values['square_search_color'] : '#999999'; ?> !important; }
<?php echo '.' . $theme . ' #square_search '; ?>
.search_cont:-ms-input-placeholder {color: <?php echo isset($param_values['square_search_color']) ? $param_values['square_search_color'] : '#999999'; ?> !important; }


/*--- PAGINATION ---*/
<?php echo '.' . $theme . ' #square_pgnt '; ?>
.staff_pagination{ 
	border: 0.1em solid <?php echo isset($param_values['square_pagination_border_color']) ? $param_values['square_pagination_border_color'] : '#DADADA'; ?>;
	line-height: <?php echo ((isset($param_values['square_pagination_font']) ? $param_values['square_pagination_font'] : '16')+10); ?>px;
	border-right: 0;
}	
<?php echo '.' . $theme . ' #square_pgnt '; ?>
.staff_pagination li{
	border-right: 0.1em solid <?php echo isset($param_values['square_pagination_border_color']) ? $param_values['square_pagination_border_color'] : '#DADADA'; ?>;
	background: <?php echo isset($param_values['square_pagination_bg']) ? $param_values['square_pagination_bg'] : '#FFFFFF'; ?>;
}
<?php echo '.' . $theme . ' #square_pgnt '; ?>
.staff_pagination li span,
<?php echo '.' . $theme . ' #square_pgnt '; ?>
.staff_pagination li a{
	font-size: <?php echo isset($param_values['square_pagination_font']) ? $param_values['square_pagination_font'] : '16'; ?>px !important;
	color: <?php echo isset($param_values['square_pagination_font_color']) ? $param_values['square_pagination_font_color'] : '#999999'; ?> !important
}	
<?php echo '.' . $theme . ' #square_pgnt '; ?>
.staff_pagination li:hover,
<?php echo '.' . $theme . ' #square_pgnt '; ?>
.staff_pagination li:hover a,
<?php echo '.' . $theme . ' #square_pgnt '; ?>
.staff_pagination li:hover span,
<?php echo '.' . $theme . ' #square_pgnt '; ?>
.staff_pagination .active_pg span{ 
	background: <?php echo isset($param_values['square_active_pagination_bg']) ? $param_values['square_active_pagination_bg'] : '#00A99D'; ?>; 
	color: <?php echo isset($param_values['square_pagination_bg']) ? $param_values['square_pagination_bg'] : '#FFFFFF'; ?> !important
}

/*--- CONTACTS ---*/
<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_contact{
	border: <?php echo isset($param_values['square_border_width']) ? $param_values['square_border_width'] : '1'; ?>px <?php echo isset($param_values['square_border_style']) ? $param_values['square_border_style'] : 'solid'; ?> <?php echo isset($param_values['square_border_color']) ? $param_values['square_border_color'] : '#00A99D'; ?>;
	color: <?php echo isset($param_values['square_text_color']) ? $param_values['square_text_color'] : '#595E81'; ?> !important;
	font-size:<?php echo isset($param_values['square_text_size']) ? $param_values['square_text_size'] : '15'; ?>px !important;
	height: <?php echo isset($param_values['square_image_height']) ? $param_values['square_image_height'] : '300'; ?>px;
	width: <?php echo isset($param_values['square_image_width']) ? $param_values['square_image_width'] : '48'; ?>%;
	position: relative;
	text-align:center;
}

/*--- IMAGE ---*/
<?php echo '.' . $theme . ' #square_contact '; ?>
.contact_image{
	width: 100%; height: 100%;
	vertical-align: middle;
	background-size:cover;
	position:relative;
}

/*-- HOVER --*/
<?php 	
if(isset($param_values['square_bg_hover_color'])) {
	$square_hover_bg = $param_values['square_bg_hover_color'];
} else $square_hover_bg = '#00A99D';
$hover_bg_color='rgba('.HEXDEC(SUBSTR($square_hover_bg, 1, 2)).','.HEXDEC(SUBSTR($square_hover_bg, 3, 2)).','.HEXDEC(SUBSTR($square_hover_bg, 5, 2)).',0.7'.')'; ?>

<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_image_border {        
	background:<?php echo $hover_bg_color; ?> !important;
	width:100%; height:100%;
	position:absolute;
}
<?php echo '.' . $theme . ' #square_contact '; ?>
.square_cont_main_picture {		
	border-bottom-left-radius:100%;		
	width:100%; height:100%;
	background-size:cover;
	position:absolute;
}
<?php echo '.' . $theme . ' #square_contact '; ?>
.contact_image:hover .staff_image_border{ display:none;}

<?php echo '.' . $theme . ' #square_contact '; ?>
.hover_back{
	background:<?php echo $hover_bg_color; ?> !important;
	width: 100%; height: 100%; 
	display:none;
}
<?php echo '.' . $theme . ' #square_contact '; ?>
.contact_image:hover .hover_back{ display:block;}

/*--- TITLE ---*/
<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_top_info{
	width:42%;
	bottom: 0;
	text-align:left;
	padding:0% 1%;
}
<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_cont_name{        
	color: <?php echo isset($param_values['square_title_color']) ? $param_values['square_title_color'] : '#FFFFFF'; ?> !important;
	font-size:<?php echo isset($param_values['square_title_size']) ? $param_values['square_title_size'] : '16'; ?>px;
	font-weight:700;
}

/*-- CATEGORY --*/
<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_category{
	color: <?php echo isset($param_values['square_title_color']) ? $param_values['square_title_color'] : '#FFFFFF'; ?> !important;        
	font-size:<?php echo ((isset($param_values['square_title_size']) ? $param_values['square_title_size'] : '16')-3); ?>px;
}

/*--more_info_plus--*/
<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_more_info_plus{ 
	border:2px solid <?php echo isset($param_values['square_link_color']) ? $param_values['square_link_color'] : '#FFFFFF'; ?> !important;
	left: -15%; opacity:0; 
}
<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_more_info_plus:hover{
	border:2px solid <?php echo isset($param_values['square_link_hover_color']) ? $param_values['square_link_hover_color'] : '#FFFFFF'; ?> !important; 
}
<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_more_info_plus:before { 
	color:<?php echo isset($param_values['square_link_color']) ? $param_values['square_link_color'] : '#FFFFFF'; ?> !important;	
}
<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_more_info_plus:hover:before { color:<?php echo isset($param_values['square_link_hover_color']) ? $param_values['square_link_hover_color'] : '#FFFFFF'; ?> !important; }

<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_contact.square_view .hover_back:hover .staff_more_info_plus{ left: 50%; opacity:1; margin-left: -30px;}

/*--- SOCIAL ICONS ---*/
<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_soc_icons {
	opacity: 0;
	position: absolute;
	bottom: -2%; width:100%;
}
<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_contact.square_view .hover_back:hover .staff_soc_icons{
	bottom: 3%;
	opacity:1;
}
<?php echo '.' . $theme . ' #square_contact '; ?>
.icons_show{ opacity: 1; border:2px solid #ffffff;}

<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_soc_icons ul{ padding:0; margin:0;}

<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_soc_icons ul li, .staff_icon{ 
	display: inline-block;
	margin-right:1px;
	margin-bottom:1px;
}
<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_icon{	  
	background: <?php echo isset($param_values['square_social_bg_color']) ? $param_values['square_social_bg_color'] : '#FFFFFF'; ?>;		
	position: relative;
	text-align: center;	
	font-size: 30px;
	padding:5px;		
}
<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_icon:hover { background: <?php echo isset($param_values['square_social_hover_bg_color']) ? $param_values['square_social_hover_bg_color'] : '#FFFFFF'; ?>;}

<?php echo '.' . $theme . ' #square_contact '; ?>
.fa {
	color:<?php echo isset($param_values['square_social_color']) ? $param_values['square_social_color'] : '#00A99D'; ?> !important;		
	padding:5.5px 10px;
}
<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_icon:hover .fa {
	color:<?php echo isset($param_values['square_social_hover_color']) ? $param_values['square_social_hover_color'] : '#00A99D'; ?> !important;
}

/*-- CHECKED ICONS --*/
<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_icon.facebook,
<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_icon.instagram,
<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_icon.twitter,
<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_icon.gplus{
	display: none !important;
}
<?php 	
if(isset($param_values['square_social_icons'])  && in_array(0,$param_values['square_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #square_contact '; ?>
	.staff_icon.facebook {display: block !important; }
<?php
} 
if(isset($param_values['square_social_icons'])  && in_array(1,$param_values['square_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #square_contact '; ?>
	.staff_icon.instagram {display: block !important; }
<?php
}
if(isset($param_values['square_social_icons'])  && in_array(2,$param_values['square_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #square_contact '; ?>
	.staff_icon.twitter {display: block !important; }
<?php
}
if(isset($param_values['square_social_icons'])  && in_array(3,$param_values['square_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #square_contact '; ?>
	.staff_icon.gplus {display: block !important; }
<?php 
} ?>

<?php
  if(isset($param_values["square_image_size"]) && intval($param_values["square_image_size"]) ===1){
    $background_size = "contain";
  }else{
    $background_size = "cover";
  }
?>
<?php echo '.' . $theme;?> #square_contact .contact_image{
    background-size:<?php echo $background_size;?>;
    background-repeat: no-repeat;
  }
<?php echo '.' . $theme;?> #square_contact .square_cont_main_picture{
    background-size:<?php echo $background_size;?>;
    background-repeat: no-repeat;
  }

/*-******************************************************-POPUP-********************************************************-*/
/*-Close Button-*/
<?php echo '.' . $theme . ' #square_popup '; ?>
.close_popup_square{
	border:2px solid <?php echo isset($param_values['square_popoup_close_color']) ? $param_values['square_popoup_close_color'] : '#FFFFFF'; ?> !important;
	right:2%; top:0;
	z-index:2;
	
}
<?php echo '.' . $theme . ' #square_popup '; ?>
.close_popup_square span{
	color: <?php echo isset($param_values['square_popoup_close_color']) ? $param_values['square_popoup_close_color'] : '#FFFFFF'; ?> !important; 
}
<?php
/*left -ic*/
if (isset($param_values['square_popup_position']) && $param_values['square_popup_position']=='0'){
	$popup_position_right = '';
	$popup_position_left = '0';
	$animation_right = '';
	$animation_left = '-100%';
}
/*middle*/
else if (isset($param_values['square_popup_position']) && $param_values['square_popup_position']=='1'){
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
} 
?>

<?php echo '.' . $theme . ' #square_popup '; ?>
.popup_info{		
	border: <?php echo isset($param_values['square_border_width']) ? $param_values['square_border_width'] : '1'; ?>px <?php echo isset($param_values['square_border_style']) ? $param_values['square_border_style'] : 'solid'; ?> <?php echo isset($param_values['square_border_color']) ? $param_values['square_border_color'] : '#00A99D'; ?>;	
	background: <?php echo isset($param_values['square_popup_bg_color']) ? $param_values['square_popup_bg_color'] : '#FFFFFF'; ?>;
	margin-left: <?php echo $margin_left; ?>;
	right:<?php echo $animation_right; ?>;
	left:<?php echo $animation_left; ?>;	
	position: absolute;
	overflow: hidden;
	height:100%;
	width: 40%;
}

<?php echo '.' . $theme . ' #square_popup '; ?>
.slide_popup { 
	right:<?php echo $popup_position_right; ?>;
	left:<?php echo $popup_position_left; ?>;
}

<?php echo '.' . $theme . ' #square_popup '; ?>
.popup_info .stPopOut{
	position: absolute;
	overflow-y: auto;
	height: 100%;
	width: 103%;
	right: -3%;
}

<?php echo '.' . $theme . ' #square_popup '; ?>
.contact_image {height:280px; }

<?php echo '.' . $theme . ' #square_popup '; ?>
.staff_cont_name{ font-size:25px;}

<?php echo '.' . $theme . ' #square_popup '; ?>
.contact_image:hover .staff_image_border{ display:block; }

<?php echo '.' . $theme . ' #square_popup '; ?>
.staff_cont_name {color: <?php echo isset($param_values['square_popup_title_color']) ? $param_values['square_popup_title_color'] : '#949494'; ?> !important;}

<?php echo '.' . $theme . ' #square_popup '; ?>
.contact_content{
	color: <?php echo isset($param_values['square_popup_text_color']) ? $param_values['square_popup_text_color'] : '#949494'; ?> !important;
	font-size: <?php echo isset($param_values['square_popup_text_size']) ? $param_values['square_popup_text_size'] : '15'; ?>px;
	text-align: justify;
	margin:7%;
}
<?php echo '.' . $theme . ' #square_popup '; ?>
.contact_content:first-letter{
	font-size: <?php echo ((isset($param_values['square_popup_text_size']) ? $param_values['square_popup_text_size'] : '15')+40); ?>px !important;
	color:<?php echo $hover_bg_color; ?> !important;
	font-family:serif !important;
	line-height: 0;
}
<?php echo '.' . $theme . ' #square_popup '; ?>
.contact_content a{ color: <?php echo isset($param_values['square_popup_link_color']) ? $param_values['square_popup_link_color'] : '#00A99D'; ?> !important;}
<?php echo '.' . $theme . ' #square_popup '; ?>
.contact_content a:hover{ color: <?php echo isset($param_values['square_popup_link_hover_color']) ? $param_values['square_popup_link_hover_color'] : '#00A99D'; ?> !important;}

/*-more-*/
<?php echo '.' . $theme . ' #square_popup '; ?>
.staff_more_info_btn {
	background: <?php echo isset($param_values['square_button_bg']) ? $param_values['square_button_bg'] : '#00A99D'; ?>;
	text-align: center;
	margin:0 7% 3% 0;
}
<?php if((isset($param_values['square_popup_social_icons'])  && in_array(0,$param_values['square_popup_social_icons'])) || (isset($param_values['square_popup_social_icons'])  && in_array(1,$param_values['square_popup_social_icons']))  || (isset($param_values['square_popup_social_icons'])  && in_array(2,$param_values['square_popup_social_icons']))  || (isset($param_values['square_popup_social_icons'])  && in_array(3,$param_values['square_popup_social_icons'])) ){ ?>
	<?php echo '.' . $theme . ' #square_popup '; ?>
	.staff_more_info_btn{float:right;}
<?php } else { ?>
	<?php echo '.' . $theme . ' #square_popup '; ?>
	.staff_more_info_btn{float:none; margin:0 auto;}
<?php } ?>

<?php echo '.' . $theme . ' #square_popup '; ?>
.staff_more_info_btn:hover { background: <?php echo isset($param_values['square_button_bg_hover_color']) ? $param_values['square_button_bg_hover_color'] : '#00A99D'; ?>; }

<?php echo '.' . $theme . ' #square_popup '; ?>
.staff_more_info_btn a {
	display: block;
	width: 154px;
	padding: 8px;color: <?php echo isset($param_values['square_button_color']) ? $param_values['square_button_color'] : '#FFFFFF'; ?> !important; }

<?php echo '.' . $theme . ' #square_popup '; ?>
.staff_more_info_btn:hover a {
	color: <?php echo isset($param_values['square_button_hover_color']) ? $param_values['square_button_hover_color'] : '#FFFFFF'; ?> !important;
}

/*-social icons-*/
<?php echo '.' . $theme . ' #square_popup '; ?>
.staff_soc_icons { 
	width: auto !important; 
	margin-left: 5%;
	position:static; 
	float: left;
	opacity:1; 
}

<?php echo '.' . $theme . ' #square_popup '; ?>
.staff_icon { background: <?php echo isset($param_values['square_popup_social_bg_color']) ? $param_values['square_popup_social_bg_color'] : '#FFFFFF'; ?>; }

<?php echo '.' . $theme . ' #square_popup '; ?>
.staff_icon:hover { background: <?php echo isset($param_values['square_popup_social_hover_bg_color']) ? $param_values['square_popup_social_hover_bg_color'] : '#FFFFFF'; ?>; }

<?php echo '.' . $theme . ' #square_popup '; ?>
.fa { 
	color:<?php echo isset($param_values['square_popup_social_color']) ? $param_values['square_popup_social_color'] : '#00A99D'; ?> !important;
	padding:5.5px 12px;
}

<?php echo '.' . $theme . ' #square_popup '; ?>
.staff_icon:hover .fa { color:<?php echo isset($param_values['square_popup_social_hover_color']) ? $param_values['square_popup_social_hover_color'] : '#00A99D'; ?> !important; }

<?php echo '.' . $theme . ' #square_popup '; ?>
.staff_soc_icons li:hover .fa{
	box-shadow:0 0 10px <?php echo isset($param_values['square_popup_social_color']) ? $param_values['square_popup_social_color'] : '#00A99D'; ?> !important;
	-webkit-transform: perspective(1000px) translate3d(0,0,100px);
		transform: perspective(1000px) translate3d(0,0,100px);
}
/*-- CHECKED ICONS --*/
<?php echo '.' . $theme . ' #square_popup '; ?>
.staff_icon.facebook,
<?php echo '.' . $theme . ' #square_popup '; ?>
.staff_icon.instagram,
<?php echo '.' . $theme . ' #square_popup '; ?>
.staff_icon.twitter,
<?php echo '.' . $theme . ' #square_popup '; ?>
.staff_icon.gplus{
	display: none !important;
}
<?php 	
if(isset($param_values['square_popup_social_icons'])  && in_array(0,$param_values['square_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #square_popup '; ?>
	.staff_icon.facebook {display: block !important; }
<?php
} 
if(isset($param_values['square_popup_social_icons'])  && in_array(1,$param_values['square_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #square_popup '; ?>
	.staff_icon.instagram {display: block !important; }
<?php
}
if(isset($param_values['square_popup_social_icons'])  && in_array(2,$param_values['square_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #square_popup '; ?>
	.staff_icon.twitter {display: block !important; }
<?php
}
if(isset($param_values['square_popup_social_icons'])  && in_array(3,$param_values['square_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #square_popup '; ?>
	.staff_icon.gplus {display: block !important; }
<?php 
} ?>

/*-******************************************************-RESPONSIVE_TABLET-********************************************************-*/
<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_tablet .staff_contact { width:48%;}

/*--popup--*/
<?php echo '.' . $theme . ' #square_popup '; ?>
.staff_tablet .popup_info.slide_popup {width:50%;}
<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_tablet .staff_icon{padding:0;}

@media screen and (max-width: 865px){
	<?php echo '.' . $theme . ' #square_popup '; ?>
	.staff_soc_icons,
	<?php echo '.' . $theme . ' #square_popup '; ?>
	.staff_more_info_btn{
		float:none;
		width: auto;
		display:table;
		margin:0 auto;
		position:static;
	}
}

/*-******************************************************-RESPONSIVE_PHONE-********************************************************-*/
<?php echo '.' . $theme . ' #square_contact '; ?>
.staff_phone .staff_contact { width:48%; }

@media screen and (max-width: 620px){
	<?php echo '.' . $theme . ' #square_contact '; ?>
	.staff_contact {width:100% !important;}
}

/*--popup--*/
<?php echo '.' . $theme . ' #square_popup '; ?>
.staff_phone .popup_info.slide_popup {right:0; left:0; margin:0 auto; width: 70%;}

<?php echo '.' . $theme . ' #square_popup '; ?>
.staff_phone .staff_top_info {
	width:100%;
	background:<?php echo $hover_bg_color; ?> !important;
}

<?php echo '.' . $theme . ' #square_popup '; ?>
.staff_phone .contact_image:hover .staff_image_border,
<?php echo '.' . $theme . ' #square_popup '; ?>
.staff_phone .staff_image_border {background:none !important;}

@media screen and (max-width: 769px){
	<?php echo '.' . $theme . ' #square_popup '; ?>
	.popup_info.slide_popup {width: 100% !important;}
	<?php echo '.' . $theme . ' #square_popup '; ?>
	.contact_image {height: 440px;}
}
@media screen and (max-width: 769px){
	<?php echo '.' . $theme . ' #square_popup '; ?>
	.contact_image {height: 320px; }
}