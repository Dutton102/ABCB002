<style>
/*-- SEARCH --*/
<?php echo '.' . $theme . ' #circle_search '; ?>
.search_cont { border: 1px solid <?php echo isset($param_values['circle_search_border']) ? $param_values['circle_search_border'] : '#D9D9D9'; ?>; }

<?php echo '.' . $theme . ' #circle_search '; ?>
.search_cont[placeholder]{ color: <?php echo isset($param_values['circle_search_color']) ? $param_values['circle_search_color'] : '#999999'; ?> !important;}
<?php echo '.' . $theme . ' #circle_search '; ?>
.search_cont::-moz-placeholder {color: <?php echo isset($param_values['circle_search_color']) ? $param_values['circle_search_color'] : '#999999'; ?> !important;} 
<?php echo '.' . $theme . ' #circle_search '; ?>
.search_cont:-moz-placeholder {color: <?php echo isset($param_values['circle_search_color']) ? $param_values['circle_search_color'] : '#999999'; ?> !important; }
<?php echo '.' . $theme . ' #circle_search '; ?>
.search_cont:-ms-input-placeholder {color: <?php echo isset($param_values['circle_search_color']) ? $param_values['circle_search_color'] : '#999999'; ?> !important; }


/*--- PAGINATION ---*/
<?php echo '.' . $theme . ' #circle_pgnt '; ?>
.staff_pagination{ 
	border: 0.1em solid <?php echo isset($param_values['circle_pagination_border_color']) ? $param_values['circle_pagination_border_color'] : '#DADADA'; ?>;
	line-height: <?php echo ((isset($param_values['circle_pagination_font']) ? $param_values['circle_pagination_font'] : '16')+10); ?>px;
	border-right: 0;
}	
<?php echo '.' . $theme . ' #circle_pgnt '; ?>
.staff_pagination li{
	border-right: 0.1em solid <?php echo isset($param_values['short_staff_pagination_border_color']) ? $param_values['short_staff_pagination_border_color'] : '#DADADA'; ?>;
	background: <?php echo isset($param_values['circle_pagination_bg']) ? $param_values['circle_pagination_bg'] : '#FFFFFF'; ?>;
}
<?php echo '.' . $theme . ' #circle_pgnt '; ?>
.staff_pagination li span,
<?php echo '.' . $theme . ' #circle_pgnt '; ?>
.staff_pagination li a{
	font-size: <?php echo isset($param_values['circle_pagination_font']) ? $param_values['circle_pagination_font'] : '16'; ?>px !important;
	color: <?php echo isset($param_values['circle_pagination_font_color']) ? $param_values['circle_pagination_font_color'] : '#999999'; ?> !important
}	
<?php echo '.' . $theme . ' #circle_pgnt '; ?>
.staff_pagination li:hover,
<?php echo '.' . $theme . ' #circle_pgnt '; ?>
.staff_pagination li:hover a,
<?php echo '.' . $theme . ' #circle_pgnt '; ?>
.staff_pagination li:hover span,
<?php echo '.' . $theme . ' #circle_pgnt '; ?>
.staff_pagination .active_pg span{ 
	background: <?php echo isset($param_values['circle_pagination_active_bg']) ? $param_values['circle_pagination_active_bg'] : '#00A99D'; ?>; 
	color: <?php echo isset($param_values['circle_pagination_bg']) ? $param_values['circle_pagination_bg'] : '#FFFFFF'; ?> !important;
}

/*--- CONTACTS ---*/
<?php echo '.' . $theme . ' #circle_contact '; ?>
.staff_contact{
	font-size:<?php echo isset($param_values['circle_title_size']) ? $param_values['circle_title_size'] : '20'; ?>px !important;
	color: <?php echo isset($param_values['circle_text_color']) ? $param_values['circle_text_color'] : '#808080'; ?> !important;
	text-align:center;
	padding:0 1%;
	width:280px;
}

/*--- IMAGE ---*/	
<?php echo '.' . $theme . ' #circle_contact '; ?>
.contact_image{
	border: <?php echo isset($param_values['circle_border_width']) ? $param_values['circle_border_width'] : '2'; ?>px <?php echo isset($param_values['circle_border_style']) ? $param_values['circle_border_style'] : 'solid'; ?> <?php echo isset($param_values['circle_border_color']) ? $param_values['circle_border_color'] : '#00A99D'; ?>;
	width: 200px; height: 200px;		
	vertical-align: middle;
	position: relative;
	text-align: center;
	border-radius: 50%;
	display: table;
	margin:0 auto;
}

<?php echo '.' . $theme . ' #circle_contact '; ?>
.triangle-topright {
	border-left: 45px solid transparent;
	border-top: 35px solid <?php echo isset($param_values['circle_border_color']) ? $param_values['circle_border_color'] : '#00A99D'; ?>;
	transform: rotate(3deg);
	width: 0;height: 0;		
	position:absolute;
	display:none;
	left:44px;
}
<?php echo '.' . $theme . ' #circle_contact '; ?>
.contact_image:hover{
	background-color:<?php echo isset($param_values['circle_border_color']) ? $param_values['circle_border_color'] : '#00A99D'; ?>;
	border: <?php echo isset($param_values['circle_border_width']) ? $param_values['circle_border_width'] : '1'; ?>px <?php echo isset($param_values['circle_border_style']) ? $param_values['circle_border_style'] : 'solid'; ?> <?php echo isset($param_values['circle_border_color']) ? $param_values['circle_border_color'] : '#00A99D'; ?>;
}
<?php echo '.' . $theme . ' #circle_contact '; ?>
.contact_image:hover .triangle-topright{display:block;}

<?php echo '.' . $theme . ' #circle_contact '; ?>
.contact_image_in{
	width: 170px; height: 170px;
	position:absolute;
	border-radius:50%;
	left:50%; top:50%;
	margin-left:-85px;
	margin-top:-85px;
}

<?php echo '.' . $theme . ' #circle_contact '; ?>
.staff_image_border,
<?php echo '.' . $theme . ' #circle_contact '; ?>
.circle_cont_main_picture{
	border-radius: 50%;
	height: 171px;

}

/*-- CONTENT --*/
<?php echo '.' . $theme . ' #circle_contact '; ?>
<?php
  if(isset($param_values["circle_info_exerpt"]) && intval($param_values["circle_info_exerpt"]) ===1){
    $overflow = "auto";
  }else{
    $overflow = "hidden";
  }
?>
.contact_content{
	color: <?php echo isset($param_values['circle_text_color']) ? $param_values['circle_text_color'] : '#808080'; ?> !important;
	font-size: 15px !important;
	margin-bottom:5%;
  overflow: <?php echo $overflow;?>;
	height:100px;
}
<?php echo '.' . $theme . ' #circle_contact '; ?>
.contact_content a{color: <?php echo isset($param_values['circle_link_color']) ? $param_values['circle_link_color'] : '#00A99D'; ?> !important;}
<?php echo '.' . $theme . ' #circle_contact '; ?>
.contact_content a:hover{ color: <?php echo isset($param_values['circle_link_hover_color']) ? $param_values['circle_link_hover_color'] : '#DADADA'; ?> !important; }

/*--- TITLE ---*/
<?php echo '.' . $theme . ' #circle_contact '; ?>
.staff_top_info{ 
	margin:5% auto 1%;
	position: initial !important;
}
<?php echo '.' . $theme . ' #circle_contact '; ?>
.staff_cont_name{
	border-bottom:2px solid <?php echo isset($param_values['circle_text_color']) ? $param_values['circle_text_color'] : '#808080'; ?>;
	color: <?php echo isset($param_values['circle_title_color']) ? $param_values['circle_title_color'] : '#000000'; ?> !important;
	font-size:<?php echo isset($param_values['circle_title_size']) ? $param_values['circle_title_size'] : '20'; ?>px;
	padding-bottom:6px;
	font-weight:700;
	min-width: 80%;
}

/*-- CATEGORY --*/
<?php echo '.' . $theme . ' #circle_contact '; ?>
.staff_category{
	color: <?php echo isset($param_values['circle_text_color']) ? $param_values['circle_text_color'] : '#808080'; ?> !important;        
	font-size:<?php echo isset($param_values['circle_text_size']) ? $param_values['circle_text_size'] : '15'; ?>px;
}

/*-- MORE INFO --*/
<?php echo '.' . $theme . ' #circle_contact '; ?>
.staff_more_main{
	position:relative;
	display: block;
	margin:0 auto;
	height: 60px;
}
<?php echo '.' . $theme . ' #circle_contact '; ?>
.staff_more_info_btn{		
	border-bottom:5px solid <?php echo isset($param_values['circle_button_bg_hover_color']) ? $param_values['circle_button_bg_hover_color'] : '#808080'; ?>;
	background-color:<?php echo isset($param_values['circle_button_bg_color']) ? $param_values['circle_button_bg_color'] : '#00A99D'; ?>;
	color:<?php echo isset($param_values['circle_button_color']) ? $param_values['circle_button_color'] : '#FFFFFF'; ?> !important;
	text-transform:uppercase;
	position:absolute;
	font-size: 18px;
}
<?php echo '.' . $theme . ' #circle_contact '; ?>
.staff_more_info_btn a{
	padding:11px;
}

.on_rightt{
	padding: 4% 8%;
}
<?php echo '.' . $theme . ' #circle_contact '; ?>
.staff_more_info_btn.on_leftt{left:0; }
<?php echo '.' . $theme . ' #circle_contact '; ?>
.staff_more_info_btn.on_rightt{right:0; }

<?php echo '.' . $theme . ' #circle_contact '; ?>
.staff_more_info_btn a { 
	color:<?php echo isset($param_values['circle_button_color']) ? $param_values['circle_button_color'] : '#FFFFFF'; ?> !important; 
	text-decoration:none !important;
	font-size: 18px;
}

<?php echo '.' . $theme . ' #circle_contact '; ?>
.staff_more_info_btn:hover {
	background-color:<?php echo isset($param_values['circle_button_bg_hover_color']) ? $param_values['circle_button_bg_hover_color'] : '#808080'; ?>;
	border-bottom:5px solid <?php echo isset($param_values['circle_button_bg_color']) ? $param_values['circle_button_bg_color'] : '#00A99D'; ?>;
	color:<?php echo isset($param_values['circle_button_hover_color']) ? $param_values['circle_button_hover_color'] : '#FFFFFF'; ?> !important;
}
<?php echo '.' . $theme . ' #circle_contact '; ?>
.staff_more_info_btn:hover a{ 
	color:<?php echo isset($param_values['circle_button_hover_color']) ? $param_values['circle_button_hover_color'] : '#FFFFFF'; ?> !important; 
}
<?php
  if(isset($param_values["circle_image_size"]) && intval($param_values["circle_image_size"]) ===1){
    $background_size = "contain";
  }else{
    $background_size = "cover";
  }
?>
<?php echo '.' . $theme;?> #circle_contact .circle_cont_main_picture{
    background-size:<?php echo $background_size;?>;
  }

/*-******************************************************-POPUP-********************************************************-*/
/*-Close Button-*/
<?php echo '.' . $theme . ' #circle_popup '; ?>
.close_popup_circle{
	border:2px solid <?php echo isset($param_values['circle_popoup_close_color']) ? $param_values['circle_popoup_close_color'] : '#FFFFFF'; ?> !important;
	top:1%; right: 3%;
}
<?php echo '.' . $theme . ' #circle_popup '; ?>
.close_popup_circle span{
	color: <?php echo isset($param_values['circle_popoup_close_color']) ? $param_values['circle_popoup_close_color'] : '#FFFFFF'; ?> !important; 
}

<?php echo '.' . $theme . ' #circle_popup '; ?>
.popup_info{
	border: 1px solid <?php echo isset($param_values['circle_border_color']) ? $param_values['circle_border_color'] : '#00A99D'; ?>;
	width:60%; height:100%;
	background-color: #fff;
	position:absolute;
	overflow: hidden;
	top:0%; left: 50%;
	margin-left: -30%;
}
<?php echo '.' . $theme . ' #circle_popup '; ?>
.popup_info .stPopOut{
	position: absolute;
	overflow-y: auto;
	height: 100%;
	width: 102%;
	right: -2%;
}

<?php echo '.' . $theme . ' #circle_popup '; ?>
.move_hover0{ opacity:0;}
<?php echo '.' . $theme . ' #circle_popup '; ?>
.move_hover1{ opacity:1;}

<?php echo '.' . $theme . ' #circle_popup '; ?>
.top_part_back{
	background-color:<?php echo isset($param_values['circle_popup_header_bg_color']) ? $param_values['circle_popup_header_bg_color'] : '#00A99D'; ?>;
	position:relative;
	overflow: hidden;
	height:60px;
}
<?php echo '.' . $theme . ' #circle_popup '; ?>
.top_part_back .top_cirle{
	width:215px; height:145px;
	background-color:#fff;
	border-radius:50%;
	position:absolute;
	left:50%;top:34%;
	margin-left:-107px;
}
<?php echo '.' . $theme . ' #circle_popup '; ?>
.popup_info .staff_top_info{
	position:relative !important;
	margin:0; width:100%;
	text-align: center;
	right:0;top:15px;
}
<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_cont_name{
	border-bottom:2px dashed <?php echo isset($param_values['circle_border_color']) ? $param_values['circle_border_color'] : '#00A99D'; ?>;
	color: <?php echo isset($param_values['circle_popup_title_color']) ? $param_values['circle_popup_title_color'] : '#000000'; ?> !important;
	font-size: <?php echo isset($param_values['circle_popup_title_size']) ? $param_values['circle_popup_title_size'] : '30'; ?>px;
	padding-bottom: 2%;
	margin:2% auto 1%;
	width: 50%;
}

<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_category{ 
	color: <?php echo isset($param_values['circle_popup_text_color']) ? $param_values['circle_popup_text_color'] : '#949494'; ?> !important;
	font-size: <?php echo ((isset($param_values['circle_text_size']) ? $param_values['circle_text_size'] : '17')+3); ?>px !important; 
}

<?php echo '.' . $theme . ' #circle_popup '; ?>
.circle_cont_main_picture {
	z-index:20;
	margin:0 auto;
	position:relative;
}

<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_more_info_btn a { padding:0 11px !important; }

<?php echo '.' . $theme . ' #circle_popup '; ?>
.cont_main_picture_a{ display:table; margin:0 auto; }

<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_image_border,
<?php echo '.' . $theme . ' #circle_popup '; ?>
.circle_cont_main_picture{
	width: 200px; height: 200px; 
	border-radius: 50%;
	margin: 5% auto 0;
}

<?php echo '.' . $theme . ' #circle_popup '; ?>
.bottom_part_content{
	position:relative;
	margin-bottom: 5%;
	margin-top: -30%;
	width:100%;
}

<?php echo '.' . $theme . ' #circle_popup '; ?>
.bottom_part_content_move{margin-top: -2%;}

<?php echo '.' . $theme . ' #circle_popup '; ?>
.bottom_part_content .bottom_cirle{
	width:215px; height:145px;
	background-color:#fff;
	left:50%;top:-95px;
	border-radius:50%;
	margin-left:-107px;
	position:absolute;
	z-index:0;
}

<?php echo '.' . $theme . ' #circle_popup '; ?>
.contact_content{ 
	color: <?php echo isset($param_values['circle_popup_text_color']) ? $param_values['circle_popup_text_color'] : '#949494'; ?> !important;
	background: <?php echo isset($param_values['circle_popup_bg_color']) ? $param_values['circle_popup_bg_color'] : '#F2F2F2'; ?>;
	font-size:<?php echo isset($param_values['circle_popup_text_size']) ? $param_values['circle_popup_text_size'] : '17'; ?>px !important;
	padding:50px 3% 5% 4%; margin:0;
	position: static;
	height:100%;
}
<?php echo '.' . $theme . ' #circle_popup '; ?>
.contact_content:first-letter{
	font-size: <?php echo ((isset($param_values['circle_popup_text_size']) ? $param_values['circle_popup_text_size'] : '17')+40); ?>px !important;
	color:<?php echo isset($param_values['circle_popup_header_bg_color']) ? $param_values['circle_popup_header_bg_color'] : '#00A99D'; ?> !important;
	font-family:serif !important;
	line-height: 0;
}
<?php echo '.' . $theme . ' #circle_popup '; ?>
.contact_content a{ color: <?php echo isset($param_values['circle_popup_link_color']) ? $param_values['circle_popup_link_color'] : '#00A99D'; ?> !important;}

<?php echo '.' . $theme . ' #circle_popup '; ?>
.contact_content a:hover{ color: <?php echo isset($param_values['circle_popup_link_hover_color']) ? $param_values['circle_popup_link_hover_color'] : '#DADADA'; ?> !important;}

	
/*--- SOCIAL_ICON ---*/
<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_soc_icons{
	display: inline-block;
	position: static;
	margin-left: 4%;
	float:left;
}
<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_soc_icons ul{padding:0;}

<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_soc_icons ul li, 
<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_icon{ 
	border-radius: <?php echo isset($param_values['circle_popup_icon_circle']) && $param_values['circle_popup_icon_circle']=='1'? '50%' : '0px'; ?>;
	display: inline-block;
	margin-right: 1px;
}

<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_icon{
	background: <?php echo isset($param_values['circle_popup_soc_bg_color']) ? $param_values['circle_popup_soc_bg_color'] : '#686666'; ?>;
	position: relative;
	text-align: center;
	font-size: 16px;
}
<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_icon:hover{ background: <?php echo isset($param_values['circle_popup_soc_hover_bg_color']) ? $param_values['circle_popup_soc_hover_bg_color'] : '#00A99D'; ?>; }

<?php echo '.' . $theme . ' #circle_popup '; ?>
.fa {
	color: <?php echo isset($param_values['circle_popup_icons_color']) ? $param_values['circle_popup_icons_color'] : '#FFFFFF'; ?>;
	padding: 15px 20px;
}
<?php echo '.' . $theme . ' #circle_popup '; ?>
.fa:hover {color: <?php echo isset($param_values['circle_popup_icons_hover_color']) ? $param_values['circle_popup_icons_hover_color'] : '#FFFFFF'; ?>;}	

/*-- CHECKED ICONS --*/
<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_icon.facebook,
<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_icon.instagram,
<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_icon.twitter,
<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_icon.gplus{
	display: none !important;
}
<?php 	
if(isset($param_values['circle_popup_social_icons'])  && in_array(0,$param_values['circle_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #circle_popup '; ?>
	.staff_icon.facebook {display: block !important; }
<?php
} 
if(isset($param_values['circle_popup_social_icons'])  && in_array(1,$param_values['circle_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #circle_popup '; ?>
	.staff_icon.instagram {display: block !important; }
<?php
}
if(isset($param_values['circle_popup_social_icons'])  && in_array(2,$param_values['circle_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #circle_popup '; ?>
	.staff_icon.twitter {display: block !important; }
<?php
}
if(isset($param_values['circle_popup_social_icons'])  && in_array(3,$param_values['circle_popup_social_icons'])) { ?>
	<?php echo '.' . $theme . ' #circle_popup '; ?>
	.staff_icon.gplus {display: block !important; }
<?php 
} ?>


/*-more-*/
<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_more_info_btn{
	background: <?php echo isset($param_values['circle_popup_button_bg']) ? $param_values['circle_popup_button_bg'] : '#F2F2F2'; ?>;
	padding:8px 4%;
	margin-right: 4%;
	position:static;
	border:none;
	opacity:1;		
}

<?php if((isset($param_values['circle_popup_social_icons'])  && in_array(0,$param_values['circle_popup_social_icons'])) || (isset($param_values['circle_popup_social_icons'])  && in_array(1,$param_values['circle_popup_social_icons']))  || (isset($param_values['circle_popup_social_icons'])  && in_array(2,$param_values['circle_popup_social_icons']))  || (isset($param_values['circle_popup_social_icons'])  && in_array(3,$param_values['circle_popup_social_icons'])) ){ ?>
	<?php echo '.' . $theme . ' #circle_popup '; ?>
	.staff_more_info_btn{float:right;}
<?php } else { ?>
	<?php echo '.' . $theme . ' #circle_popup '; ?>
	.staff_more_info_btn{float:none; margin:0 auto;}
<?php } ?>

<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_more_info_btn:hover{
	background: <?php echo isset($param_values['circle_popup_button_hover_bg']) ? $param_values['circle_popup_button_hover_bg'] : '#00A99D'; ?>;
	border:none;
}
<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_more_info_btn a { color: <?php echo isset($param_values['circle_popup_button_color']) ? $param_values['circle_popup_button_color'] : '#FFFFFF'; ?> !important; }

<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_more_info_btn:hover a { color: <?php echo isset($param_values['circle_popup_button_hover_color']) ? $param_values['circle_popup_button_hover_color'] : '#FFFFFF'; ?> !important; }

/*-******************************************************-RESPONSIVE_TABLET-********************************************************-*/
<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_tablet .popup_info { width:86%; margin-left:-43%; }

@media screen and (max-width: 769px){
	<?php echo '.' . $theme . ' #circle_popup '; ?>
	.staff_tablet .bottom_part_content .bottom_cirle{top:-110px;}
	<?php echo '.' . $theme . ' #circle_popup '; ?>
	.staff_tablet .staff_image_border,
	<?php echo '.' . $theme . ' #circle_popup '; ?>
	.staff_tablet .circle_cont_main_picture {margin: 7% auto 0;}
}

/*-******************************************************-RESPONSIVE_PHONE-********************************************************-*/
<?php echo '.' . $theme . ' #circle_contact '; ?>
.staff_phone .staff_more_info_btn{ padding:4% 6%;}

<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_phone .popup_info { width:100%; margin-left:0; left:0; }

<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_phone .staff_soc_icons,
<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_phone .staff_more_info_btn{
	margin-bottom:2%;
	display:table;
	margin:0 auto;
	float:none;
}

<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_phone .bottom_part_content {margin-top: -100%;}
<?php echo '.' . $theme . ' #circle_popup '; ?>
.staff_phone .bottom_part_content_move{margin-top: -10%;}

@media screen and (max-width: 615px){
	<?php echo '.' . $theme . ' #circle_contact '; ?>
	.staff_phone .staff_contact { float:none; margin:0 auto 5%; width:90%;}
	<?php echo '.' . $theme . ' #circle_popup '; ?>
	.staff_phone .contact_content{
		font-size:<?php echo ((isset($param_values['circle_popup_text_size']) ? $param_values['circle_popup_text_size'] : '17')-3); ?>px !important;
	}
}
