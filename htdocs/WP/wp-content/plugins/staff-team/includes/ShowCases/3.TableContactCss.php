<style>
<?php echo '.' . $theme . ' '; ?>
#table_contact { -moz-hyphens: none; clear: both;}

/*-- LINKS --*/
<?php echo '.' . $theme . ' #table_contact '; ?>
a { color: <?php echo isset($param_values['table_links_color']) ? $param_values['table_links_color'] : '#000000'; ?>;}

<?php echo '.' . $theme . ' #table_contact '; ?>
a:hover { color: <?php echo isset($param_values['table_links_hover_color']) ? $param_values['table_links_hover_color'] : '#000000'; ?>;}


/*-- SEARCH --*/
<?php echo '.' . $theme . ' #table_search '; ?>
.search_cont { border: 1px solid <?php echo isset($param_values['table_search_border']) ? $param_values['table_search_border'] : '#D9D9D9'; ?>; }

<?php echo '.' . $theme . ' #table_search '; ?>
.search_cont[placeholder]{ color: <?php echo isset($param_values['table_search_color']) ? $param_values['table_search_color'] : '#999999'; ?> !important;}
<?php echo '.' . $theme . ' #table_search '; ?>
.search_cont::-moz-placeholder {color: <?php echo isset($param_values['table_search_color']) ? $param_values['table_search_color'] : '#999999'; ?> !important;} 
<?php echo '.' . $theme . ' #table_search '; ?>
.search_cont:-moz-placeholder {color: <?php echo isset($param_values['table_search_color']) ? $param_values['table_search_color'] : '#999999'; ?> !important; }
<?php echo '.' . $theme . ' #table_search '; ?>
.search_cont:-ms-input-placeholder {color: <?php echo isset($param_values['table_search_color']) ? $param_values['table_search_color'] : '#999999'; ?> !important; }


<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts{ 
	border:<?php echo isset($param_values['table_border_width']) ? $param_values['table_border_width'] : '1'; ?>px <?php echo isset($param_values['table_border_style']) ? $param_values['table_border_style'] : 'solid'; ?> <?php echo isset($param_values['table_border_color']) ? $param_values['table_border_color'] : '#00A99D'; ?>;
	width:100%; border-collapse: collapse;
}

<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts .staff_contact{
	margin:0; float:none;
	position:static;
}

<?php
  if(isset($param_values["table_image_size"]) && intval($param_values["table_image_size"]) ===1){
    $background_size = "contain";
  }else{
    $background_size = "cover";
  }
?>
<?php echo '.' . $theme;?> #table_contact .table_cont_main_picture{
     background-size:<?php echo $background_size;?>;
  }

/*--------- TITLE -----------*/
<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts th{
	border:<?php echo isset($param_values['table_border_width']) ? $param_values['table_border_width'] : '1'; ?>px <?php echo isset($param_values['table_border_style']) ? $param_values['table_border_style'] : 'solid'; ?> <?php echo isset($param_values['table_border_color']) ? $param_values['table_border_color'] : '#00A99D'; ?>;
	background: <?php echo isset($param_values['table_head_bg_color']) ? $param_values['table_head_bg_color'] : '#FFFFFF'; ?>;
	color:<?php echo isset($param_values['table_head_color']) ? $param_values['table_head_color'] : '#00A99D'; ?> !important;	
	font-size: <?php echo isset($param_values['table_head_text_size'])?$param_values['table_head_text_size']:'19'; ?>px;
	text-align:center;
	padding:2% 0;
}


/*--------- CONTACTS -----------*/
<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts td{ 
	background: <?php echo isset($param_values['table_background_color']) ? $param_values['table_background_color'] : '#FAFAFA'; ?>;
	text-align:center;
	padding:1%;
}
<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts tr.staff_contact:hover td{ 
	background: <?php echo isset($param_values['table_row_hover_bg_color']) ? $param_values['table_row_hover_bg_color'] : '#00A99D'; ?>;
	box-shadow:5px 3px 3px #dadada;
}

/*--IMAGES---*/
<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts td.tab_images{ width: 15%; }

<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts th.tab_images_top,	
<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts td.tab_images {
	display: <?php echo isset($param_values['table_image_hide']) && $param_values['table_image_hide']=='1'? 'none' : 'table-cell'; ?> !important;
}

<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts td.tab_images .staff_image_border{ height:150px; }

<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts td.tab_images .staff_image_border,
<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts td.tab_images .staff_image_border .table_cont_main_picture{
	border-radius: <?php echo isset($param_values['table_image_circle']) && $param_values['table_image_circle']=='1'? '50%' : '0px'; ?> !important;
}

/*--NAMES--*/
<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts td.tab_names{ width:15%;}

<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts th.tab_names_top,
<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts td.tab_names{
	display: <?php echo isset($param_values['table_name_hide']) && $param_values['table_name_hide']=='1'? 'none' : 'table-cell'; ?> !important;
}

<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts td.tab_names .staff_cont_name{
	white-space: normal !important;
	word-wrap: break-word;
}
<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts td.tab_names a{
	color:<?php echo isset($param_values['table_title_color']) ? $param_values['table_title_color'] : '#000000'; ?> !important;	
	font-size: <?php echo isset($param_values['table_title_size'])?$param_values['table_title_size']:'17'; ?>px;
}

/*--CATEGORY / PARAMETERS--*/
<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts td.tab_categs,
<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts td.tab_params{
	color:<?php echo isset($param_values['table_text_color']) ? $param_values['table_text_color'] : '#000000'; ?> !important;	
	font-size: <?php echo isset($param_values['table_text_size'])?$param_values['table_text_size']:'16'; ?>px;
}

<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts td.tab_categs{ width:15%; }

<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts th.tab_categs_top,	
<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts td.tab_categs {
	display: <?php echo isset($param_values['table_categ_hide']) && $param_values['table_categ_hide']=='1'? 'none' : 'table-cell'; ?> !important;
}
<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts th.tab_params_top,	
<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts td.tab_params {
	display: <?php echo isset($param_values['table_param_hide']) && $param_values['table_param_hide']=='1'? 'none' : 'table-cell'; ?> !important;
}
<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts td.tab_params {text-align:left !important;}

/*--EMAIL--*/
<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts td.tab_emails{ width:25%; }

<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts th.tab_emails_top,
<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts td.tab_emails{
	display: <?php echo isset($param_values['table_email_hide']) && $param_values['table_email_hide']=='1'? 'none' : 'table-cell'; ?> !important;
}

<?php echo '.' . $theme . ' #table_contact '; ?>
.tab_contacts td.tab_emails a{
	color:<?php echo isset($param_values['table_links_color']) ? $param_values['table_links_color'] : '#000000'; ?> !important;	
	font-size: <?php echo isset($param_values['table_text_size'])?$param_values['table_text_size']:'14'; ?>px;
	font-weight:500 !important;
}
<?php echo '.' . $theme . ' #table_contact '; ?>
/*.tab_contacts td.tab_emails a:hover{*/
/*	color:*/<?php //echo isset($param_values['table_links_hover_color']) ? $param_values['table_links_hover_color'] : '#000000'; ?>/* !important;*/
/*	font-weight:600 !important;*/
/*}*/

/*--- PAGINATION ---*/
<?php echo '.' . $theme . ' #table_pgnt '; ?>
.staff_pagination{ 
	border: 0.1em solid <?php echo isset($param_values['table_pagination_border_color']) ? $param_values['table_pagination_border_color'] : '#DADADA'; ?>;
	line-height: <?php echo ((isset($param_values['table_pagination_font']) ? $param_values['table_pagination_font'] : '16')+10); ?>px;
	border-right: 0;
}	
<?php echo '.' . $theme . ' #table_pgnt '; ?>
.staff_pagination li{
	border-right: 0.1em solid <?php echo isset($param_values['table_pagination_border_color']) ? $param_values['table_pagination_border_color'] : '#DADADA'; ?>;
	background: <?php echo isset($param_values['table_pagination_bg']) ? $param_values['table_pagination_bg'] : '#FFFFFF'; ?>;
}
<?php echo '.' . $theme . ' #table_pgnt '; ?>
.staff_pagination li span,
<?php echo '.' . $theme . ' #table_pgnt '; ?>
.staff_pagination li a{
	font-size: <?php echo isset($param_values['table_pagination_font']) ? $param_values['table_pagination_font'] : '16'; ?>px !important;
	color: <?php echo isset($param_values['table_pagination_font_color']) ? $param_values['table_pagination_font_color'] : '#000000'; ?> !important;
}	
<?php echo '.' . $theme . ' #table_pgnt '; ?>
.staff_pagination li:hover,
<?php echo '.' . $theme . ' #table_pgnt '; ?>
.staff_pagination li:hover a,
<?php echo '.' . $theme . ' #table_pgnt '; ?>
.staff_pagination li:hover span,
<?php echo '.' . $theme . ' #table_pgnt '; ?>
.staff_pagination .active_pg span{ 
	background: <?php echo isset($param_values['table_active_pagination_bg']) ? $param_values['table_active_pagination_bg'] : '#00A99D'; ?>;
	color: <?php echo isset($param_values['table_pagination_bg']) ? $param_values['table_pagination_bg'] : '#FFFFFF'; ?> !important
}	


/*--------- Responsive ---------*/
<?php echo '.' . $theme . ' #table_contact '; ?>
.staff_phone .tab_contacts{border:none;}

<?php echo '.' . $theme . ' #table_contact '; ?>
.staff_phone .tab_contacts tr:first-child{display:none;}

<?php echo '.' . $theme . ' #table_contact '; ?>
.staff_phone .tab_contacts tr{
	border-bottom:5px solid <?php echo isset($param_values['table_row_hover_bg_color']) ? $param_values['table_row_hover_bg_color'] : '#00A99D'; ?>;
	margin-bottom: 10%;
	padding-bottom:5%;
	display:table;
	width:100%;
}
<?php echo '.' . $theme . ' #table_contact '; ?>
.staff_phone .tab_contacts tr th,
<?php echo '.' . $theme . ' #table_contact '; ?>
.staff_phone .tab_contacts tr td{
	display:table-header-group !important;
	width:100%; padding:1% 0;
}
</style>
