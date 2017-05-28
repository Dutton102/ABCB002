<?php
global $contLDomain;
$conts = array();
$params = get_post_meta($theme_id, 'params');

foreach ($cont_posts as $key => $item) {
    $cont['id'] = $item->ID;
    $cont['title'] = $item->post_title;
	if(isset($item->post_content) && $item->post_content!=NULL){
		$cont['description'] = $item->post_content;
        $cont['description_popup'] = mb_substr(apply_filters('the_content',$item->post_content), 0, 5000);
	}else{ 
		$cont['description'] = "";
		$cont['description_popup'] = "";
	}
    $cont['img'] = array();
    if (!has_post_thumbnail($item->ID)){
        $cont['img']['thumb'] = SC_URL . '/images/noimage.jpg';
        $cont['img']['full'] = SC_URL . '/images/noimage.jpg';
    }else{
        $at_id = get_post_thumbnail_id($item->ID);
        $img_src = wp_get_attachment_image_src($at_id, 'large');
        $cont['img']['thumb'] = $img_src[0];
        $img_src = wp_get_attachment_image_src($at_id, 'full');
        $cont['img']['full'] = $img_src[0];
    }    
    $cont['email']= get_post_meta($item->ID, 'email', TRUE);


  /*content*/
  if(isset($params[0]['chess_social_icons'])  && in_array(0,$params[0]['chess_social_icons'])) {
    $cont['social_facebook']= get_post_meta($item->ID, 'social_facebook', TRUE);
  }else{
    $cont['social_facebook']="";
  }
  if(isset($params[0]['chess_social_icons'])  && in_array(1,$params[0]['chess_social_icons'])) {
    $cont['social_instagram']= get_post_meta($item->ID, 'social_instagram', TRUE);
  }else{
    $cont['social_instagram']="";
  }
  if(isset($params[0]['chess_social_icons'])  && in_array(2,$params[0]['chess_social_icons'])) {
    $cont['social_twitter']= get_post_meta($item->ID, 'social_twitter', TRUE);
  }else{
    $cont['social_twitter']="";
  }
  if(isset($params[0]['chess_social_icons'])  && in_array(3,$params[0]['chess_social_icons'])) {
    $cont['social_google']= get_post_meta($item->ID, 'social_google', TRUE);
  }else{
    $cont['social_google'] = "";
  }

  /*content*/
  if(isset($params[0]['chess_social_icons'])  && in_array(0,$params[0]['chess_social_icons'])) {
    $cont['social_facebook']= get_post_meta($item->ID, 'social_facebook', TRUE);
  }else{
    $cont['social_facebook']="";
  }
  if(isset($params[0]['chess_social_icons'])  && in_array(1,$params[0]['chess_social_icons'])) {
    $cont['social_instagram']= get_post_meta($item->ID, 'social_instagram', TRUE);
  }else{
    $cont['social_instagram']="";
  }
  if(isset($params[0]['chess_social_icons'])  && in_array(2,$params[0]['chess_social_icons'])) {
    $cont['social_twitter']= get_post_meta($item->ID, 'social_twitter', TRUE);
  }else{
    $cont['social_twitter']="";
  }
  if(isset($params[0]['chess_social_icons'])  && in_array(3,$params[0]['chess_social_icons'])) {
    $cont['social_google']= get_post_meta($item->ID, 'social_google', TRUE);
  }else{
    $cont['social_google'] = "";
  }

  /*popup*/
  if(isset($params[0]['chess_popup_social_icons'])  && in_array(0,$params[0]['chess_popup_social_icons'])) {
    $cont['popup_social_facebook']= get_post_meta($item->ID, 'social_facebook', TRUE);
  }else{
    $cont['popup_social_facebook']="";
  }
  if(isset($params[0]['chess_popup_social_icons'])  && in_array(1,$params[0]['chess_popup_social_icons'])) {
    $cont['popup_social_instagram']= get_post_meta($item->ID, 'social_instagram', TRUE);
  }else{
    $cont['popup_social_instagram']="";
  }
  if(isset($params[0]['chess_popup_social_icons'])  && in_array(2,$params[0]['chess_popup_social_icons'])) {
    $cont['popup_social_twitter']= get_post_meta($item->ID, 'social_twitter', TRUE);
  }else{
    $cont['popup_social_twitter']="";
  }
  if(isset($params[0]['chess_popup_social_icons'])  && in_array(3,$params[0]['chess_popup_social_icons'])) {
    $cont['popup_social_google']= get_post_meta($item->ID, 'social_google', TRUE);
  }else{
    $cont['popup_social_google'] = "";
  }

	$cont['params'] = get_post_meta($item->ID, 'params', TRUE);
	$categories = wp_get_post_terms($item->ID,SContCPT::$taxonomy,array("fields" => "all"));
    $category = '';
    foreach ($categories as $key => $cat) {
		if($key!=0)
			$category .= ', ';
		$category .=  $cat->name;
    }
	$cont['category'] = $category;
  $team_url = get_post_meta($item->ID, 'team_url', TRUE);
  $want_url = get_post_meta($item->ID, 'want_url', TRUE);
  if(isset($want_url) && intval($want_url)===1){
    $cont['link'] = $team_url;
  }else{
    $cont['link'] = get_permalink( $item->ID );
  }
	$conts[] = $cont;
}
$Chess_conts = json_encode($conts);
/*- Contact's count -*/
$viewCount  = isset($params[0]['chess_cont_count_in_page'])?$params[0]['chess_cont_count_in_page']:'6';
/*- Upload 'No Image' -*/
$noImage  = isset($params[0]['chess_no_image'])?$params[0]['chess_no_image']:''; 



$search_type = 0;
if(get_option('choose_category')==1)
    $search_type++;
if(get_option('name_search')==1)
    $search_type+=2;
?>

<?php
$staff_uniqid = uniqid();
?>

<div class="<?php echo $theme; ?> sc_container" id="theme">
    <!-- Search -->
	<div id="chess_search" class="search_<?php echo $staff_uniqid;?>">
		<?php if(get_option('name_search')!=0):?>
        <div class="staff_search">
            <input type="text" class="search_cont" name="search" placeholder="<?php _e('Search',$contLDomain);?>..."/>
        </div>
        <?php endif;?>
	</div>
	
	<!-- Contacts -->
	<div id="chess_contact" class="parentDiv">
        <div class="staff_sc_container staff_<?php echo $staff_uniqid;?>"></div>
		<!-- Popup -->
		<div id="chess_popup">
			<div id="popup" class="popup"></div>			
		</div>	
    </div> 
	
	<!-- Pagination -->
    <div id="chess_pgnt">
        <div class="staff_pagination pagination_<?php echo $staff_uniqid;?>"></div>
    </div>
	
    <script type="text/javascript">
      var showCase2_cont = new contactView(<?php echo $Chess_conts;?>,<?php echo $viewCount;?>,'<?php echo $theme;?>','chess',<?php echo $search_type;?>,<?php echo get_option('lightbox')?>, '<?php echo get_option('enable_message'); ?>', '<?php echo $noImage; ?>' , '<?php echo $staff_uniqid;?>');
    </script>
</div>
