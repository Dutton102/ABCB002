<?php
class SContAdminClass {

    protected static $instance = null;
    public $shortcode_tag = 'contact';
    protected $update_path = 'http://api.web-dorado.com/v1/_id_/allversions';
    protected $updates = array();
    protected $twd_page = null;
    protected $twd_plugins = array();
    public $version = '5.0.11';
    public $prefix = "twd";

    private function __construct() {
        $this->uninstall_redirect();
        add_action('admin_menu', array($this, 'SContSubmenu'),9);
        add_action('admin_init', array($this, 'registerContOptions'));
        add_action('admin_enqueue_scripts', array($this, 'includeAdminStyle'));
        add_action('admin_enqueue_scripts', array($this, 'includeAdminScripts'));
        add_action('admin_head', array($this, 'insert_contacts'));
        add_action('admin_head', array($this, 'insert_cont_cats'));
        add_action('admin_head', array($this, 'plugin_url'));
        add_action('init', array($this, 'admin_head'));
        add_action('admin_notices', array($this, 'team_user_manual'));
        require_once 'lang/SLangClass.php';
        $plugin_folder_name = explode('/' , plugin_basename( __FILE__ ));
        new StaffDirLangClass('contact', $plugin_folder_name[0]);
        add_action('admin_menu', array($this, 'SCuninstallPlugin'),11);
        add_action('admin_menu', array($this, 'check_for_update'), 25);
        add_action('wp_ajax_staff_order_contact', array($this, 'staff_order_contact'));
        add_action('wp_ajax_delete_demo_data', array($this, 'delete_demo_data'));

    }

    public function SContSubmenu() {
        add_submenu_page('edit.php?post_type=contact', 'Team Ordering', 'Team Ordering', 'manage_options', 'ordering_staff', array($this , 'ordering_staff'));
        add_submenu_page('edit.php?post_type=contact', 'Messages', 'Messages', 'manage_options', 'edit.php?post_type=cont_mess');
        add_submenu_page('edit.php?post_type=contact', 'Styles and Colors', 'Styles and Colors', 'manage_options', 'edit.php?post_type=cont_theme');
        add_submenu_page('edit.php?post_type=contact', 'Global Options', 'Options', 'manage_options', 'cont_option', array($this, 'displayGlobalOptions'));
    }
    public function SCuninstallPlugin(){
        add_submenu_page('edit.php?post_type=contact', 'Uninstall', 'Uninstall', 'manage_options', 'uninstall_plugin', array($this,'uninstallPlugin'));
    }
    public function includeAdminStyle() {
        wp_register_style('contAdminStyle', plugins_url('css/admin.css', __FILE__), 1, $this->version);
        wp_register_style('jQueryDialog', plugins_url('css/jquery-ui-dialog.css', __FILE__), 1, 'all');
        wp_enqueue_style('contAdminStyle');
        wp_enqueue_style('jQueryDialog');
        wp_register_style('cont-evol-colorpicker-min', plugins_url('css/evol.colorpicker.css', __FILE__), 1, 'all');
        wp_enqueue_style('cont-evol-colorpicker-min');
        wp_enqueue_style( 'cont-admin-datetimepicker-css', plugins_url( 'css/jquery.datetimepicker.css', __FILE__ ), array(), 1, 'all' );
        /*Upload*/
		wp_enqueue_style('thickbox');
    }

    public function ordering_staff(){
        include_once('views/admin/SCViewOrderingStuff.php' );
        global $wpdb;
        $contactList = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."posts WHERE post_type='contact' AND post_status='publish'");
        drawOrderingTable($contactList);

    }
	
    public function staff_order_contact(){
        $staff_order_contact = get_option('staff_order_contact');
        update_option('staff_order_contact' , $_POST['data']);
    }
	
    public function team_user_manual(){
        global $pagenow, $post;
        if ($this->staff_page()) { ?>
			<div class="twd_user_manual">
				<a target="_blank" href="https://web-dorado.com/wordpress-team-wd/installing.html">User Manual<span></span></a>
			</div>
        <?php
        }
    }
	
    private function staff_page(){
        $screen = get_current_screen();
        if ($screen->id == 'contact_page_styles_colors' || $screen->id == 'edit-contact' || $screen->id == 'contact' || $screen->id == 'edit-cont_category' || $screen->id == 'contact_page_ordering_staff' || $screen->id=='edit-cont_mess' || $screen->id == 'contact_page_styles_colors' || $screen->id == 'contact_page_cont_option' || $screen->id == 'contact_page_cont_featured_plugins' || $screen->id == 'contact_page_cont_featured_themes' || $screen->id == 'contact_page_contact_lang_option' || $screen->id == 'contact_page_uninstall_plugin') {
            return true;
        } else {
            return false;
        }
    }
	
    public function includeAdminScripts() {
        wp_register_script('SCAdminScript', plugins_url('js/admin/admin.js', __FILE__), array('jquery',
            'jquery-ui-widget', 'jquery-ui-tabs','jquery-ui-dialog','media-upload','thickbox'), $this->version, true);
        wp_localize_script('SCAdminScript', 'ajaxurl',admin_url('admin-ajax.php'));
        wp_register_script('colorPicker-min', plugins_url('js/admin/evol.colorpicker.js', __FILE__), array('jquery',
            'jquery-ui-widget'), 1, true);
        wp_enqueue_script('colorPicker-min');
        wp_register_script('datetimepicker', plugins_url('js/admin/jquery.datetimepicker.js', __FILE__), array('jquery',
            'jquery-ui-widget'), 1, true);
        wp_enqueue_script('datetimepicker');
        wp_enqueue_script('SCAdminScript');
        wp_enqueue_media();
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
		//wp_register_script('my-upload', plugins_url('js/admin/admin.js', __FILE__), array('jquery',));
		wp_enqueue_script('my-upload');

        wp_register_script('contact_order', plugins_url('js/admin/contact_order.js', __FILE__), array('jquery',
            'jquery-ui-widget', 'jquery-ui-tabs','jquery-ui-dialog'), 1, true);
        wp_enqueue_script('contact_order');


    }

    public function plugin_url() { ?>
        <script>
            var sc_plugin_url = '<?php echo SC_URL; ?>';
        </script>
    <?php
    }

    public function admin_head() {
        if (!current_user_can('edit_posts') && !current_user_can('edit_pages')) {
            return;
        }
        if ('true' == get_user_option('rich_editing')) {
            add_filter('mce_external_plugins', array($this, 'mce_external_plugins'));
            add_filter('mce_buttons', array($this, 'mce_buttons'));
        }
    }

    public function mce_external_plugins($plugin_array) {
        $screen = get_current_screen();
        if ($screen->post_type != 'contact') {
            $plugin_array[$this->shortcode_tag] = plugins_url('js/mce-cont-button.js', __FILE__);
        }
        return $plugin_array;
    }

    public function mce_buttons($buttons) {
        array_push($buttons, $this->shortcode_tag);
        return $buttons;
    }

    public function insert_contacts() {
        $contacts = get_posts(array('post_type' => 'contact', 'numberposts' => -1,));  ?>
        <script>
            var contacts = [];
            contacts[0] =
			{
				text: "<?php echo 'Select a Contact'; ?>",
				value: 0
			};
        </script>
        <?php
        $i = 0;
        foreach ($contacts as $cont) {
            ?>
            <script>
                contacts[<?php echo ++$i; ?>] =
				{
					text: "<?php echo $cont->post_title; ?>",
					value: '<?php echo $cont->ID; ?>'
				};
            </script>
        <?php
        }
    }

    public function insert_cont_cats() {
        $args = array(
            'orderby' => 'id',
            'order' => 'ASC',
            'hide_empty' => TRUE,
            'exclude' => array(),
            'exclude_tree' => array(),
            'include' => array(),
            'number' => '',
            'fields' => 'all',
            'slug' => '',
            'parent' => '',
            'hierarchical' => true,
            'child_of' => 0,
            'get' => '',
            'name__like' => '',
            'pad_counts' => false,
            'offset' => '',
            'search' => '',
            'cache_domain' => 'core'
        );

        $cats = get_terms('cont_category', $args);  ?>
        <script>
            var contCats = [];
        </script>
        <?php
        $i = 0;
        foreach ($cats as $cat) { ?>
            <script>
                contCats[<?php echo $i++; ?>] =
				{
					text: '<?php echo esc_js($cat->name); ?>',
					value: '<?php echo $cat->term_id; ?>'
				};
            </script>
        <?php
        }
    }

    public function registerContOptions() {
        register_setting('cont_option', 'choose_category');
        register_setting('cont_option', 'name_search');
        register_setting('cont_option', 'lightbox');
        register_setting('cont_option', 'team_slug');
        register_setting('cont_glob_option', 'cont_plugin_registered');
        register_setting('cont_glob_option', 'cont_active_theme');
        register_setting('mess_option', 'enable_message');
        register_setting('mess_option', 'show_name');
        register_setting('mess_option', 'show_email');
        register_setting('mess_option', 'show_phone');
        register_setting('mess_option', 'show_cont_pref');

        register_setting('custom_css', 'twd_custom_css');
    }

    public function displayGlobalOptions() {
        if(isset($_GET['tab']) && $_GET['tab']=='mess_option'){
            include('views/admin/SCViewMessageOptions.php');
        }elseif (isset($_GET['tab']) && $_GET['tab']=='custom_css'){
            include('views/admin/SCViewCustomCss.php');
        }
        else{
            include('views/admin/SCViewGlobalOptions.php');
        }
    }
	

	
    public function uninstall_redirect (){
        if(isset($_GET['deactivate_plugin'])){
            require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
            deactivate_plugins(plugin_basename(SC_FILE));
            header('Location:'.home_url().'/wp-admin/plugins.php');
        }
    }
	
    public function uninstallPlugin(){
        $temesFolder = scandir(SC_DIR.'/css/themesCSS');
        foreach($temesFolder as $style_file){
            if($style_file!='.' && $style_file!='..'){
                if(is_writable(SC_DIR . '/css/themesCSS/' . $style_file)) {
                    unlink(SC_DIR . '/css/themesCSS/' . $style_file);
                }
            }
        }
        include_once('views/admin/SCViewUninstall_sc.php');
        global  $twd_options;
        if(!class_exists("DoradoWebConfig")){
            include_once (SC_DIR . "/wd/config.php");
        }
        if(!class_exists("DoradoWebDeactivate")) {
            include_once (SC_DIR . "/wd/includes/deactivate.php");
        }
        $config = new DoradoWebConfig();

        $config->set_options( $twd_options );

        $deactivate_reasons = new DoradoWebDeactivate($config);
        //$deactivate_reasons->add_deactivation_feedback_dialog_box();
        $deactivate_reasons->submit_and_deactivate();
        if(isset($_POST["sc_uninstall"])){
            include_once('includes/SCUninistall.php');
            sc_uninstall_plugin();
            sc_uninstall_success();
        }else{
            sc_uninstall();
        }


    }

    
    public static function contActivate() {
        update_option('name_search',1);
        update_option('lightbox',1);
        update_option('enable_message',1);
        update_option('show_name',1);
        update_option('show_email',1);
        update_option('show_phone',1);
        update_option('show_cont_pref',1);
        $team_slug = get_option("team_slug");
        if(!$team_slug){
            update_option('team_slug','person');
        }
        $activation_post = array();
       $op =  get_option('cont_plugin_registered');
       $active_theme = get_option('cont_active_theme');
        $theme_url = SC_DIR . '/css/themesCSS/';
        $files = glob($theme_url . '*.css');
        $args = array( 'post_type' => 'cont_theme' );
        $cont_theme = get_posts( $args );
        if(count($files)===0 && empty($cont_theme)){
            update_option('cont_plugin_registered','2');
            $params = array();
			/*- Short !-*/
			$params['short_soc_bg_color']='';
			$params['short_icons_hover_color']='';
			$params['short_active_pagination_bg']='';
			$params['short_hover_bg_color']='';
				$params['short_popup_bg_color']='';
				$params['short_popoup_link_hover_color']='';
				$params['short_button_bg_color']='';
				$params['short_popup_soc_hover_bg_color']='';
				$params['short_popup_icons_color']='';

			/*- Full !-*/
			$params['full_link_hover_color']='';
			$params['full_button_hover_bg_color']='';
			$params['full_social_hover_bg_color']='';
			$params['full_active_pagination_bg']='';
			$params['full_image_hover_bg_color']='';


				$params['full_popup_title_bg_color']='';
				$params['full_popup_link_hover_color']='';
				$params['full_popup_button_hover_bg']='';
				$params['full_popup_social_hover_bg_color']='';


			/*- Table !-*/
			$params['table_border_color']='';
			$params['table_head_color']='';
			$params['table_active_pagination_bg']='';
			$params['table_row_hover_bg_color']='';
			
			/*- Chess !-*/
			$params['chess_title_color']='';
			$params['chess_links_hover_color']='';
			$params['chess_button_hover_color']='';
			$params['chess_icons_hover_color']='';
			$params['chess_active_pagination_bg']='';
			$params['chess_hover_bg_color']='';
				$params['chess_popup_bg_color']='';
				$params['chess_popup_links_hover_color']='';
				$params['chess_popup_button_bg']='';
				$params['chess_popup_button_hover_color']='';
				$params['chess_popup_icons_hover_color']='';
			
			/*- Portfolio !-*/
			$params['port_active_pagination_bg']='';
			$params['port_hover_bg_color']='';
				$params['port_popup_bg_color']='';
				$params['port_popup_button_hover_color']='';
				$params['port_popup_icons_hover_color']='';

			/*- Blog !-*/
			$params['blog_link_color']='';
			$params['blog_button_hover_bg']='';
			$params['blog_button_color']='';
			$params['blog_active_pagination_bg']='';
			$params['blog_border_color']='';
				$params['blog_popup_header_bg_color']='';
				$params['blog_popup_link_color']='';
				$params['blog_popup_button_hover_bg']='';
				$params['blog_popup_soc_hover_bg_color']='';
			
			/*- Circle !-*/
			$params['circle_border_color']='';
			$params['circle_link_color']='';
			$params['circle_button_bg_color']='';
			$params['circle_pagination_active_bg']='';
				$params['circle_popup_header_bg_color']='';
				$params['circle_popup_link_color']='';
				$params['circle_popup_button_hover_bg']='';
				$params['circle_popup_soc_hover_bg_color']='';
			
			/*- Square !-*/
			$params['square_border_color']='';
			$params['square_social_color']='';
			$params['square_social_hover_color']='';
			$params['square_active_pagination_bg']='';
			$params['square_bg_hover_color']='';
				$params['square_popup_link_color']='';
				$params['square_popup_link_hover_color']='';
				$params['square_button_bg']='';
				$params['square_button_bg_hover_color']='';
				$params['square_popup_social_color']='';
				$params['square_popup_social_hover_color']='';
			
			/*- Single !-*/
			$params['single_title_color']='';
			$params['single_link_color']='';
			$params['single_cont_param_title_color']='';
			$params['single_mess_param_title_color']='';
			$params['single_button_bg_color']='';





            $thems = array(
				'Default' =>'#00A99D',
				'Dark'	  =>'#5A5A5A',
				'Blue'	  =>'#3EB3E5',
				'Green'	  =>'#00A59B',
				'Violet'  =>'#616685'
            );

            foreach ($thems as $key => $value) {
                foreach ($params as $key2=>$item) {
                    $params[$key2] = $value ; 
                }
                $post = array(
                    'menu_order' => 0,
                    'post_auther' => 1,
                    'post_status' => 'publish',
                    'post_title' => $key,
                    'post_type' => 'cont_theme'
                );
                $ID = wp_insert_post($post);
                array_push($activation_post , $ID);
                $params['short_image_circle']='1';
                /*social checkbox*/


                $params['short_social_icons']=array('0' , '1' , '2', '3');
                $params['short_popup_social_icons']=array('0' , '1' , '2', '3');

                $params['full_social_icons']=array('0' , '1' , '2', '3');
                $params['full_popup_social_icons']=array('0' , '1' , '2', '3');

                $params['chess_social_icons']=array('0' , '1' , '2', '3');
                $params['chess_popup_social_icons']=array('0' , '1' , '2', '3');

                $params['port_popup_social_icons']=array('0' , '1' , '2', '3');

                $params['blog_popup_social_icons']=array('0' , '1' , '2', '3');

                $params['circle_popup_social_icons']=array('0' , '1' , '2', '3');

                $params['square_social_icons']=array('0' , '1' , '2', '3');
                $params['square_popup_social_icons']=array('0' , '1' , '2', '3');

                /*end social checkbox*/
                update_post_meta($ID, 'params', $params);

                $theme = 'sc_theme_' . $ID ;
                $theme_url = SC_DIR . '/css/themesCSS/' . $theme . '.css';
                if (!file_exists($theme_url)) {
                    $cc = SContClass::getInstance();
                    $cc->cpt->createThemeCSS($ID, $theme, $theme_url);                    
                }
                if($key=='Default'){
                    update_option('cont_active_theme', $ID);
                }
            }
        } else{
            $postslist = get_posts(array(
				'post_type' => 'cont_theme',
				'showposts' => -1,
				'orderby' => 'ID',
				'order' => 'ASC'
            ));
            $has_active = FALSE;
            foreach ($postslist as $value) {
                if($value->ID==$active_theme)
                    $has_active = TRUE;
                $theme = 'sc_theme_' . $value->ID ;
                $theme_url = SC_DIR . '/css/themesCSS/' . $theme . '.css';
                if (!file_exists($theme_url)) {
                    $cc = SContClass::getInstance();
                    $cc->cpt->createThemeCSS($value->ID, $theme, $theme_url);
                    
                }
            }
            if(!$has_active && isset($postslist[0]->ID)){
                update_option('cont_active_theme', $postslist[0]->ID);
            }
        }
        add_option('sc_uninstall_plugin' , $activation_post);
        self::plugin_updated();
    }
    public function delete_demo_data(){
        if(isset($_POST["delete"]) && $_POST["delete"]=='true'){
            $delete_demo_data = get_option('delete_demo_data');
            foreach($delete_demo_data as $demo_data){
                $_thumbnail_id = get_post_meta($demo_data , '_thumbnail_id');
                wp_delete_post($_thumbnail_id[0] , true);
                delete_post_meta($demo_data , 'email');
                delete_post_meta($demo_data , 'want_email');
                wp_delete_post($demo_data , true);
            }
            $delete_demo_category = get_option('delete_demo_category');
            wp_delete_term($delete_demo_category["term_id"], 'cont_category');

            delete_option('delete_demo_data');
            delete_option('delete_demo_category');
        }
    }
    public function display_updates_page() {
        $twd_plugins = $this->twd_plugins;
        $updates = $this->updates;

        include_once( SC_DIR . '/views/admin/updates.php' );
    }
    public function get_remote_version($id) {
        $userhash = 'nohash';
        if (file_exists(SC_DIR . '/.keep') && is_readable(SC_DIR . '/.keep')) {
            $f = fopen(SC_DIR . '/.keep', 'r');
            $userhash = fgets($f);
            fclose($f);
        }
        $this->update_path .= '/' . $userhash;

        $request = wp_remote_get(( str_replace('_id_', $id, $this->update_path)));

        if (!is_wp_error($request) || wp_remote_retrieve_response_code($request) === 200) {
            return json_decode($request['body'], true);
        }

        return false;
    }
    private function get_plugin_data($name) {
        $twd_plugins = array(
            'staff-team/contacts.php' => array(
                'id' => 153,
                'url' => 'https://web-dorado.com/products/wordpress-team-wd.html',
                'description' => 'Custom Fields Add-On will enable you to have more fields for more detailed and structured content: you can use this add-on and create additional fields for each event, venue and organizer.',
                'icon' => '',
                'image' => plugins_url('images/logo.png', __FILE__)
            ),
        );
        if (isset($twd_plugins[$name])) {
            return $twd_plugins[$name];
        }

        return false;
    }

    public function check_for_update() {
        global $menu;
        $update_bubble = '';
        $twd_plugins = array();
        $request_ids = array();
        if (!function_exists('get_plugins')) {
            require_once ABSPATH . 'wp-admin/includes/plugin.php';
        }
        $all_plugins = get_plugins();
        foreach ($all_plugins as $name => $plugin) {
            if (strpos($name, "staff") !== false || strpos($name, 'staff-directory-wd') !== false) {
                $data = $this->get_plugin_data($name);
                if ($data['id'] > 0) {
                    $request_ids[] = $data['id'] . ':' . $plugin['Version'];
                    $twd_plugins[$data['id']] = $plugin;
                    $twd_plugins[$data['id']]['twd_data'] = $data;
                }
            }
        }
        $this->twd_plugins = $twd_plugins;
        if (false === $updates_available = get_transient('twd_update_check')) {
            $updates_available = array();
            if (count($request_ids) > 0) {
                $remote_version = $this->get_remote_version(implode('_', $request_ids));
                if (isset($remote_version['body'])) {

                    foreach ($remote_version['body'] as $id => $updated_plugins) {
                        if (count($updated_plugins) == 0) {
                            continue;
                        }
                        $updates = array();
                        foreach ($updated_plugins as $updated_plugin) {
                            if (version_compare($twd_plugins[$id]['Version'], $updated_plugin['version'], '<')) {
                                if (strpos(strtolower($updated_plugin['note']), 'important') !== false) {
                                    $updates = $updated_plugins;
                                    break;
                                }
                            }
                        }
                        if (!empty($updates)) {
                            $updates_available [$id] = $updates;
                        }
                    }
                }
            }

            set_transient('twd_update_check', $updates_available, 12 * 60 * 60);
        }
        $this->updates = $updates_available;
        $updates_count = is_array($updates_available) ? count($updates_available) : 0;
        $this->twd_page[] = add_submenu_page('edit.php?post_type=contact', __('Updates', 'twd'), __('Updates', 'twd') . ' ' . '<span class="update-plugins count-' . $updates_count . '" title="title"><span class="update-count">' . $updates_count . '</span></span>', 'manage_options', $this->prefix . '_updates', array($this,'display_updates_page' ));
        if ($updates_count > 0) {
            foreach ($menu as $key => $value) {
                if ($menu[$key][2] == 'edit.php?post_type=contact' || $menu[$key][2] == 'post_type=twd_calendar&page=twd_updates') {
                    $menu[$key][0] .= ' ' . '<span class="update-plugins count-' . $updates_count . '" title="title"><span class="update-count">' . $updates_count . '</span></span>';
                    return;
                }
            }
        }
    }

    /**
     * Call if any twd plugin updated.
    */
    public static function plugin_updated() {
        delete_transient('twd_update_check');
    }
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new self;
        }
        return self::$instance;
    }

}
