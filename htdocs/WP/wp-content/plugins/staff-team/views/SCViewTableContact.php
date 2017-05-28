<?php
global $contLDomain;
$conts = array();
foreach ($cont_posts as $key => $item) {
    $cont['id'] = $item->ID;
    $cont['title'] = $item->post_title;
    $cont['img'] = array();
    $cont['description'] = "";

	if (!has_post_thumbnail($item->ID)) {
        $cont['img']['thumb'] = SC_URL . '/images/noimage.jpg';
        $cont['img']['full'] = SC_URL . '/images/noimage.jpg';
    } else {
        $at_id = get_post_thumbnail_id($item->ID);
        $img_src = wp_get_attachment_image_src($at_id, 'large');
        $cont['img']['thumb'] = $img_src[0];
        $img_src = wp_get_attachment_image_src($at_id, 'full');
        $cont['img']['full'] = $img_src[0];
    }

    $cont['social_facebook']="";
    $cont['social_instagram']="";
    $cont['social_twitter']="";
    $cont['social_google'] = "";

    $cont['params'] = get_post_meta($item->ID, 'params', TRUE);
    $categories = wp_get_post_terms($item->ID, SContCPT::$taxonomy, array("fields" => "all"));
    $category = '';
    foreach ($categories as $key => $cat) {
        if ($key != 0)
            $category .= ', ';
        $category .= $cat->name;
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

$search_type = 0;
if(get_option('choose_category')==1)
    $search_type++;
if(get_option('name_search')==1)
    $search_type+=2;

$params = get_post_meta($theme_id, 'params');
$table_conts = json_encode($conts);
/*- Contact's count -*/
$viewCount = isset($params[0]['table_cont_count_in_page']) ? $params[0]['table_cont_count_in_page'] : '4';
/*- Upload 'No Image' -*/
$noImage  = isset($params[0]['table_no_image'])?$params[0]['table_no_image']:'';  ?>

<?php
$staff_uniqid = uniqid();
?>

<div class="<?php echo $theme; ?> sc_container" id="theme">

	<!--Search-->
	<div id="table_search" class="search_<?php echo $staff_uniqid;?>">
	   <?php if (get_option('name_search') != 0 || get_option('choose_category') != 0): ?>
            <div class="staff_search">
                <input type="text" class="search_cont" name="search" placeholder="<?php _e('Search', $contLDomain); ?>..."/>
            </div>
        <?php endif; ?>
	</div>

	<div id="table_contact">
		<div class="staff_sc_container staff_<?php echo $staff_uniqid;?>"></div>
	</div>

	<!--Pagination-->
    <div id="table_pgnt">
        <div class="staff_pagination pagination_<?php echo $staff_uniqid;?>"></div>
    </div>

    <script>
        var table_cont = new contactView(<?php echo $table_conts; ?>,<?php echo $viewCount; ?>, '<?php echo $theme; ?>', 'table',<?php echo $search_type;?>,<?php echo get_option('lightbox') ?>, '','<?php echo $noImage; ?>' , '<?php echo $staff_uniqid;?>' );
    </script>
</div>
