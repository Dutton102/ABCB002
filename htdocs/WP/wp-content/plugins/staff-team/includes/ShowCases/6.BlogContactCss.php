<style>
/*-- SEARCH --*/
<?php echo '.' . $theme . ' #blog_search '; ?>
.search_cont { border: 1px solid <?php echo isset($param_values['blog_search_border']) ? $param_values['blog_search_border'] : '#D9D9D9'; ?> !important; }

<?php echo '.' . $theme . ' #blog_search '; ?>
.search_cont[placeholder]{ color: <?php echo isset($param_values['blog_search_color']) ? $param_values['blog_search_color'] : '#999999'; ?> !important;}
<?php echo '.' . $theme . ' #blog_search '; ?>
.search_cont::-moz-placeholder {color: <?php echo isset($param_values['blog_search_color']) ? $param_values['blog_search_color'] : '#999999'; ?> !important;} 
<?php echo '.' . $theme . ' #blog_search '; ?>
.search_cont:-moz-placeholder {color: <?php echo isset($param_values['blog_search_color']) ? $param_values['blog_search_color'] : '#999999'; ?> !important; }
<?php echo '.' . $theme . ' #blog_search '; ?>
.search_cont:-ms-input-placeholder {color: <?php echo isset($param_values['blog_search_color']) ? $param_values['blog_search_color'] : '#999999'; ?> !important; }

/*--- PAGINATION ---*/
<?php echo '.' . $theme . ' #blog_pgnt '; ?>
.staff_pagination{ 
	border: 0.1em solid <?php echo isset($param_values['blog_pagination_border_color']) ? $param_values['blog_pagination_border_color'] : '#DADADA'; ?>;
	line-height: <?php echo ((isset($param_values['blog_pagination_font']) ? $param_values['blog_pagination_font'] : '16')+10); ?>px;
	border-right: 0;
}	
<?php echo '.' . $theme . ' #blog_pgnt '; ?>
.staff_pagination li{
	border-right: 0.1em solid <?php echo isset($param_values['blog_pagination_border_color']) ? $param_values['blog_pagination_border_color'] : '#DADADA'; ?>;
	background: <?php echo isset($param_values['blog_pagination_bg']) ? $param_values['blog_pagination_bg'] : '#FFFFFF'; ?>;
}
<?php echo '.' . $theme . ' #blog_pgnt '; ?>
.staff_pagination li span,
<?php echo '.' . $theme . ' #blog_pgnt '; ?>
.staff_pagination li a{
	font-size: <?php echo isset($param_values['blog_pagination_font']) ? $param_values['blog_pagination_font'] : '16'; ?>px !important;
	color: <?php echo isset($param_values['blog_pagination_font_color']) ? $param_values['blog_pagination_font_color'] : '#999999'; ?> !important
}	
<?php echo '.' . $theme . ' #blog_pgnt '; ?>
.staff_pagination li:hover,
<?php echo '.' . $theme . ' #blog_pgnt '; ?>
.staff_pagination li:hover a,
<?php echo '.' . $theme . ' #blog_pgnt '; ?>
.staff_pagination li:hover span,
<?php echo '.' . $theme . ' #blog_pgnt '; ?>
.staff_pagination .active_pg span{ 
	background: <?php echo isset($param_values['blog_active_pagination_bg']) ? $param_values['blog_active_pagination_bg'] : '#d9d9d9'; ?>; 
	color: <?php echo isset($param_values['blog_pagination_bg']) ? $param_values['blog_pagination_bg'] : '#FFFFFF'; ?> !important
}


/*--- CONTACTS ---*/
<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_contact{
	background-color:<?php echo isset($param_values['blog_background_color']) ? $param_values['blog_background_color'] : '#F2F2F2'; ?>;
	font-size: <?php echo isset($param_values['blog_text_size']) ? $param_values['blog_text_size'] : '17'; ?>px;
	width: 100%; height: 250px;
	overflow:hidden;
	color:#fff;
}

/*-- IMAGE --*/
<?php echo '.' . $theme . ' #blog_contact '; ?>
.contact_image_out{
	border-bottom-right-radius: 75%;
	border-top-right-radius: 75%;		
	border: 25px solid <?php echo isset($param_values['blog_border_color']) ? $param_values['blog_border_color'] : '#00A99D'; ?>;		
	background: <?php echo isset($param_values['blog_border_color']) ? $param_values['blog_border_color'] : '#00A99D'; ?>;
	border-left-color: #fff;
    border-left-width: 10px;
	position:absolute; 
	top:-25px;
}
<?php echo '.' . $theme . ' #blog_contact '; ?>
.contact_image{
	border-top-right-radius: 90%;
	border-bottom-right-radius: 90%;
	border: 40px solid;	
	border-right-width: 35px;
    display: table-cell;
	position:relative;
    background: #fff;
    border-left: 0;
}

<?php echo '.' . $theme . ' #blog_contact '; ?>
.blog_cont_main_picture {
	width: 170px; height: 170px;
	border-radius: 50%;
}

/*-- CONTENT --*/
<?php echo '.' . $theme . ' #blog_contact '; ?>
.contact_text{
    float: right; width: 55%;
	margin-right:2%;
}
<?php echo '.' . $theme . ' #blog_contact '; ?>
<?php
  if(isset($param_values["blog_info_exerpt"]) && intval($param_values["blog_info_exerpt"]) ===1){
    $overflow = "auto";
  }else{
    $overflow = "hidden";
  }
?>
.contact_content{
	font-size:<?php echo isset($param_values['blog_text_size']) ? $param_values['blog_text_size'] : '15'; ?>px;
	color: <?php echo isset($param_values['blog_text_color']) ? $param_values['blog_text_color'] : '#686666'; ?> !important;
	text-align: left;
  overflow: <?php echo $overflow;?>;
	height: 105px;
}
<?php echo '.' . $theme . ' #blog_contact '; ?>
.contact_content a{color: <?php echo isset($param_values['blog_link_color']) ? $param_values['blog_link_color'] : '#00A99D'; ?> !important;}
<?php echo '.' . $theme . ' #blog_contact '; ?>
.contact_content a:hover{
	color: <?php echo isset($param_values['blog_link_hover_color']) ? $param_values['blog_link_hover_color'] : '#F2F2F2'; ?> !important;
}

/*-- HOVER --*/
<?php 	
if(isset($param_values['blog_border_color'])) {
	$blog_hover_bg = $param_values['blog_border_color'];
} else $blog_hover_bg = '#00A99D';
$hover_bg_color = 'rgba('.HEXDEC(SUBSTR($blog_hover_bg, 1, 2)).','.HEXDEC(SUBSTR($blog_hover_bg, 3, 2)).','.HEXDEC(SUBSTR($blog_hover_bg, 5, 2)).',0.7'.')'; ?>
<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_overlay{
	border-radius:50%;	
	width:100%; height:100%;		
	background:<?php echo $hover_bg_color; ?> !important;
}
<?php echo '.' . $theme . ' #blog_contact '; ?>
.contact_image:hover .staff_overlay { opacity:1; }


/*--- TITLE ---*/
<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_top_info{ position:static; }

<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_cont_name{
	border-bottom:2px dashed <?php echo isset($param_values['blog_border_color']) ? $param_values['blog_border_color'] : '#00A99D'; ?>;
	color: <?php echo isset($param_values['blog_title_color']) ? $param_values['blog_title_color'] : '#000000'; ?> !important; 
	font-size:<?php echo isset($param_values['blog_title_size']) ? $param_values['blog_title_size'] : '20'; ?>px;
	padding-bottom:6px;
}

/*-- CATEGORY --*/
<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_category{
	color: <?php echo isset($param_values['blog_text_color']) ? $param_values['blog_text_color'] : '#686666'; ?> !important;     
	font-size:<?php echo ((isset($param_values['blog_text_size']) ? $param_values['blog_text_size'] : '17')-3); ?>px;
}


/*--more_info_plus--*/
<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_more_info_plus{  left: 50%; margin-left: -30px; }

<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_more_info_plus:before{ color: <?php echo isset($param_values['blog_link_color']) ? $param_values['blog_link_color'] : '#00A99D'; ?> !important; }

<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_more_info_plus:hover:before{ color: <?php echo isset($param_values['blog_link_hover_color']) ? $param_values['blog_link_hover_color'] : '#D9D9D9'; ?> !important; }

/*--more_info_button--*/
<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_more_info_btn{
	border:2px solid <?php echo isset($param_values['blog_button_hover_bg']) ? $param_values['blog_button_hover_bg'] : '#00A99D'; ?>;		
	background: <?php echo isset($param_values['blog_button_bg']) ? $param_values['blog_button_bg'] : '#F2F2F2'; ?>;
	text-transform:uppercase;
	position: absolute;
}
<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_web .staff_more_info_btn{ right: 13%; bottom: 5%; opacity: 0; }

<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_web .staff_contact.blog_view:hover .staff_more_info_btn{ opacity:1; right: 2%; }

<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_more_info_btn:hover{
	background: <?php echo isset($param_values['blog_button_hover_bg']) ? $param_values['blog_button_hover_bg'] : '#00A99D'; ?>;
}

<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_more_info_btn a{
	color: <?php echo isset($param_values['blog_button_color']) ? $param_values['blog_button_color'] : '#00A99D'; ?> !important;
	font-size:17px;
}
<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_more_info_btn:hover a{
	color: <?php echo isset($param_values['blog_button_hover_color']) ? $param_values['blog_button_hover_color'] : '#FFFFFF'; ?> !important;
}
<?php
  if(isset($param_values["blog_image_size"]) && intval($param_values["blog_image_size"]) ===1){
    $background_size = "contain";
  }else{
    $background_size = "cover";
  }
?>
<?php echo '.' . $theme;?> #blog_contact .blog_cont_main_picture{
    background-size:<?php echo $background_size;?>;
  }

/*-******************************************************-POPUP-********************************************************-*/
/*-Close Button-*/
<?php echo '.' . $theme . ' #blog_popup '; ?>
.close_popup_circle{
	border:2px solid <?php echo isset($param_values['blog_popoup_close_color']) ? $param_values['blog_popoup_close_color'] : '#FFFFFF'; ?> !important;
	top: 1%; right: 3%;
}
<?php echo '.' . $theme . ' #blog_popup '; ?>
.close_popup_circle span{
	color: <?php echo isset($param_values['blog_popoup_close_color']) ? $param_values['blog_popoup_close_color'] : '#FFFFFF'; ?> !important; 
}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.popup_info{
	border: 1px solid <?php echo isset($param_values['blog_border_color']) ? $param_values['blog_border_color'] : '#D9D9D9'; ?>;
	width:60%; height:100%;
	background-color: #fff;
	position:absolute;
	overflow:hidden;
	top:0%; left: 50%;
	margin-left: -30%;
}
<?php echo '.' . $theme . ' #blog_popup '; ?>
.popup_info .stPopOut{
	position: absolute;
	overflow-y: auto;
	height: 100%;
	width: 102%;
	right: -2%;
}
<?php echo '.' . $theme . ' #blog_popup '; ?>
.move_hover0{ opacity:0;}
<?php echo '.' . $theme . ' #blog_popup '; ?>
.move_hover1{ opacity:1;}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.top_part_back{
	background-color:<?php echo isset($param_values['blog_popup_header_bg_color']) ? $param_values['blog_popup_header_bg_color'] : '#00A99D'; ?>;
	position:relative;
	overflow: hidden;
	height:60px;
}
<?php echo '.' . $theme . ' #blog_popup '; ?>
.top_part_back .top_cirle{
	width:215px; height:190px;
	background-color:#fff;
	border-radius:50%;
	position:absolute;
	left:50%;top:34%;
	margin-left:-107px;
}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.popup_info .staff_top_info{
	position:relative !important;
	margin:0; width:100%;
	text-align: center;
	right:0;top:15px;
}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_cont_name{
	border-bottom:2px dashed <?php echo isset($param_values['blog_border_color']) ? $param_values['blog_border_color'] : '#00A99D'; ?>;
	color: <?php echo isset($param_values['blog_popup_title_color']) ? $param_values['blog_popup_title_color'] : '#000000'; ?> !important;
	font-size: <?php echo isset($param_values['blog_popup_title_size']) ? $param_values['blog_popup_title_size'] : '30'; ?>px;
	padding-bottom: 2%;
	margin:2% auto 1%;
	width: 50%;
}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_category{ 
	color: <?php echo isset($param_values['blog_popup_text_color']) ? $param_values['blog_popup_text_color'] : '#949494'; ?> !important;
	font-size: <?php echo isset($param_values['blog_popup_text_size']) ? $param_values['blog_popup_text_size'] : '17'; ?>px !important; 
}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.cont_main_picture_a{
	display:table;
	margin:0 auto;
}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.blog_cont_main_picture {
	z-index:20;
	margin:0 auto;
	position:relative;
}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_image_border,
<?php echo '.' . $theme . ' #blog_popup '; ?>
.blog_cont_main_picture{
	width: 200px; height: 200px; 
	border-radius: 50%;
	margin: 5% auto 0;
}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.bottom_part_content{
	position:relative;
	margin-bottom: 5%;
	margin-top: -30%;
	width:100%;
}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.bottom_part_content_move{margin-top: -2%;}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.bottom_part_content .bottom_cirle{
	width:215px; height:145px;
	background-color:#fff;
	left:50%;top:-95px;
	border-radius:50%;
	margin-left:-107px;
	position:absolute;
	z-index:0;
}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.contact_content{ 
	color: <?php echo isset($param_values['blog_popup_text_color']) ? $param_values['blog_popup_text_color'] : '#949494'; ?> !important;
	font-size: <?php echo isset($param_values['blog_popup_text_size']) ? $param_values['blog_popup_text_size'] : '17'; ?>px !important;
	background: <?php echo isset($param_values['blog_popup_bg_color']) ? $param_values['blog_popup_bg_color'] : '#F2F2F2'; ?>;
	position: static; height:100%;
	padding:60px 3% 5% 4%;
}
<?php echo '.' . $theme . ' #blog_popup '; ?>
.contact_content:first-letter{
	font-size: <?php echo ((isset($param_values['blog_popup_text_size']) ? $param_values['blog_popup_text_size'] : '17')+38); ?>px !important;
	color:<?php echo isset($param_values['blog_popup_header_bg_color']) ? $param_values['blog_popup_header_bg_color'] : '#00A99D'; ?> !important;
	font-family:serif !important;
	line-height: 0;
}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.contact_content a { color: <?php echo isset($param_values['blog_popup_link_color']) ? $param_values['blog_popup_link_color'] : '#00A99D'; ?> !important;}
<?php echo '.' . $theme . ' #blog_popup '; ?>
.contact_content a:hover { color: <?php echo isset($param_values['blog_popup_link_hover_color']) ? $param_values['blog_popup_link_hover_color'] : '#D9D9D9'; ?> !important;}
	
/*--- SOCIAL_ICON ---*/
<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_soc_icons{
	display: inline-block;
	position: static;
    margin-left: 4%;
    float: left;  
}
<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_soc_icons ul{ padding:0;}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_soc_icons ul li, 
<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_icon{ 
	border-radius: <?php echo isset($param_values['blog_popup_icon_circle']) && $param_values['blog_popup_icon_circle']=='1'? '50%' : '0px'; ?>;
	display: inline-block;
	margin-right: 1px;
}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_icon{
	background: <?php echo isset($param_values['blog_popup_soc_bg_color']) ? $param_values['blog_popup_soc_bg_color'] : '#686666'; ?>;
	position: relative;
	text-align: center;
	font-size: 16px;
}
<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_icon:hover{ background: <?php echo isset($param_values['blog_popup_soc_hover_bg_color']) ? $param_values['blog_popup_soc_hover_bg_color'] : '#00A99D'; ?>; }

<?php echo '.' . $theme . ' #blog_popup '; ?>
.fa {
	color: <?php echo isset($param_values['blog_popup_icons_color']) ? $param_values['blog_popup_icons_color'] : '#FFFFFF'; ?>;
	padding: 15px 20px;
}
<?php echo '.' . $theme . ' #blog_popup '; ?>
.fa:hover {color: <?php echo isset($param_values['blog_popup_icons_hover_color']) ? $param_values['blog_popup_icons_hover_color'] : '#FFFFFF'; ?>;}	
/*-- CHECKED ICONS --*/
<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_icon.facebook,
<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_icon.instagram,
<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_icon.twitter,
<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_icon.gplus{
	display: none !important;
}
<?php 	
if(isset($param_values['blog_popup_social_icons'])  && in_array(0,$param_values['blog_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #blog_popup '; ?>
	.staff_icon.facebook {display: block !important; }
<?php
} 
if(isset($param_values['blog_popup_social_icons'])  && in_array(1,$param_values['blog_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #blog_popup '; ?>
	.staff_icon.instagram {display: block !important; }
<?php
}
if(isset($param_values['blog_popup_social_icons'])  && in_array(2,$param_values['blog_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #blog_popup '; ?>
	.staff_icon.twitter {display: block !important; }
<?php
}
if(isset($param_values['blog_popup_social_icons'])  && in_array(3,$param_values['blog_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #blog_popup '; ?>
	.staff_icon.gplus {display: block !important; }
<?php 
} ?>

/*-more-*/
<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_more_info_btn{
	background: <?php echo isset($param_values['blog_popup_button_bg']) ? $param_values['blog_popup_button_bg'] : '#686666'; ?>;
	border:none !important;
	opacity:1 !important;
	position: static;
}
<?php if((isset($param_values['blog_popup_social_icons'])  && in_array(0,$param_values['blog_popup_social_icons'])) || (isset($param_values['blog_popup_social_icons'])  && in_array(1,$param_values['blog_popup_social_icons']))  || (isset($param_values['blog_popup_social_icons'])  && in_array(2,$param_values['blog_popup_social_icons']))  || (isset($param_values['blog_popup_social_icons'])  && in_array(3,$param_values['blog_popup_social_icons'])) ){ ?>
	<?php echo '.' . $theme . ' #blog_popup '; ?>
	.staff_more_info_btn{ float: right; margin-right: 4%;  }
<?php } else { ?>
	<?php echo '.' . $theme . ' #blog_popup '; ?>
	.staff_more_info_btn{ display:table; margin:0 auto; }
	<?php echo '.' . $theme . ' #blog_popup '; ?>
	.staff_soc_icons{display:none;}
<?php } ?>

<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_more_info_btn:hover{
	background: <?php echo isset($param_values['blog_popup_button_hover_bg']) ? $param_values['blog_popup_button_hover_bg'] : '#00A99D'; ?>;
}
<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_more_info_btn a{
	color: <?php echo isset($param_values['blog_popup_button_color']) ? $param_values['blog_popup_button_color'] : '#FFFFFF'; ?> !important;
	display: block;
	width: 154px;
	padding: 8px;
}
<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_more_info_btn:hover a{
	color: <?php echo isset($param_values['blog_popup_button_hover_color']) ? $param_values['blog_popup_button_hover_color'] : '#FFFFFF'; ?> !important;
}

/*-******************************************************-RESPONSIVE_TABLET-********************************************************-*/
<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_tablet .contact_text { width: 50%; margin-right:1%;}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_tablet .popup_info { width:86%; margin-left:-43%; }

/*-******************************************************-RESPONSIVE_PHONE-********************************************************-*/
<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_phone .staff_contact{
	height:480px;
	margin: 5% 0 0;
	background:none;
} 

<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_phone .contact_text {
	background-color:<?php echo isset($param_values['blog_background_color']) ? $param_values['blog_background_color'] : '#F2F2F2'; ?>;
	padding: 100px 4% 30%;
	position: absolute;
	height:initial;
	width: 100%;
	top: 30%;
}

<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_phone .staff_top_info { text-align:center; right:0; position:static;}

<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_phone .contact_content { position:static;}

/*-Image-*/
<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_phone .bottom_cirle {
	width: 230px; height: 230px;
	background-color: #fff;
	left: 50%; top: -0%;
	margin-left: -115px;
	position: relative;
	border-radius:50%;
	z-index: 1;
}

<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_phone .contact_image_out {
	border:none; background:none;
	border-radius: 50%;
	position:absolute;
	margin-top:-100px;
	float:none;
	z-index: 2;
	top:50%;
}

<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_phone .contact_image {
	width: 100%; height:100%;
	position:absolute;
	border-radius:50%;
	display: block;
	border: none;
}
<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_phone .contact_image_out ,
<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_phone .staff_overlay {
	width:200px; height:200px;
	margin-left:-100px;
	left:50%;
}
<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_phone .blog_cont_main_picture { width: 100%; height:100%;}

<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_tablet .staff_more_info_btn{	
	opacity:1;right: 4%; bottom:1%;
}
 
<?php echo '.' . $theme . ' #blog_contact '; ?>
.staff_phone .staff_more_info_btn { 
	opacity:1;
	right: 50%; bottom:5%;
    margin-right: -40px;
}

@media screen and (max-width: 540px){
	<?php echo '.' . $theme . ' #blog_contact '; ?>
	.staff_phone .staff_contact{
		height:535px; overflow:visible;
		margin-bottom:5%;
	}
}

/*-popup-*/
<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_phone .staff_cont_name{width:75%;}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_phone .popup_info { width:100%; margin-left:0; left:0; }

<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_phone .blog_cont_main_picture { width: 90%; height:90%;}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_phone  .bottom_cirle {
    width: 215px;height: 145px;
    background-color: #fff;
    left: 50%; top: -95px;
    border-radius: 50%;
    margin-left: -107px;
    position: absolute;
    z-index: 0;
}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_phone .bottom_part_content {margin-top: -100%;}
<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_phone .bottom_part_content_move{margin-top: -10%;}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_phone .staff_more_info_btn { 
	opacity:1;
	float:none;
	border: none;
    display: table;
    margin: 1% auto;
	position:static;
	padding: 11px 12px; 
}

<?php echo '.' . $theme . ' #blog_popup '; ?>
.staff_phone .staff_soc_icons {
	display:table;
	margin:0 auto;
	float:none;
}