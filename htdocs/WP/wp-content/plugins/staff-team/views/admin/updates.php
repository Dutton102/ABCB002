<?php
/**
 * Admin page
 */
// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

?>

<div class="wrap">
    <?php settings_errors(); ?>
    <div id="twd-settings">
        <div id="twd-settings-content">
            <h2 id="add_on_title"><?php echo esc_html(get_admin_page_title()); ?></h2>


            <div class="main-plugin_desc-cont">
                You can download the latest version of your plugins from your <a href="https://web-dorado.com" target="_blank"> Web-Dorado.com</a> account.   After deactivating and deleting the current version, install the downloaded version of the plugin.				
            </div>

            <br/>
            <br/>

            <?php
            if ($twd_plugins) {
                $update = 0;
                if (isset($twd_plugins[153])) {

                    $project = $twd_plugins[153];
                    unset($twd_plugins[153]);
                    if (isset($updates[153])) {
                        $update = 1;
                    }
                    ?>
                    <div class="main-plugin">
                        <div class="twd-add-on">
                            <?php if ($project['twd_data']['image']) { ?>
                                <div class="twd-figure-img">
                                    <a href="<?php echo $project['twd_data']['url'] ?>" target="_blank">
                                        <img src="<?php echo $project['twd_data']['image'] ?>"/>
                                    </a>
                                </div>
                            <?php } ?>

                        </div>
                        <div class="main-plugin-info">
                            <h2>
                                <a href="<?php echo $project['twd_data']['url'] ?>"
                                   target="_blank"><?php echo $project['Title'] ?></a>
                            </h2>

                            <div class="main-plugin_desc-cont">
                                <div class="main-plugin-desc"><?php echo $project['twd_data']['description'] ?></div>
                                <div class="main-plugin-desc main-plugin-desc-info">
                                    <p><a href="<?php echo $project['twd_data']['url'] ?>"
                                          target="_blank">Version <?php echo $project['Version'] ?></a></p>
                                </div>

                                <?php if (isset($updates[153][0])) { ?>
                                    <span class="update-info">There is a new  <?php echo $updates[153][0]['version'] ?>
                                        version available</span>
                                    <p><span>What's new:</span></p>
                                    <div class="twd_last_update"><b><?php echo $updates[153][0]['version'] ?></b>
                                        <?php echo strip_tags(str_ireplace('Important', '', $updates[153][0]['note']), '<p>') ?></div>
                                    <?php unset($updates[153][0]); ?>
                                    <?php if (count($updates[153]) > 0) { ?>

                                        <div class="twd_more_updates">
                                            <?php foreach ($updates[153] as $update) {
                                                ?>
                                                <div class="twd_update"><b><?php echo $update['version'] ?></b>
                                                    <?php echo strip_tags(str_ireplace('Important', '', $update['note']), '<p>') ?></div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                        <a href="#" class="twd_show_more_updates">More updates</a>
                                        <?php
                                    }
                                    ?>


                                <?php } ?>

                            </div>
                        </div>
                    </div>
                <?php }
                ?>
                <div class="twd-addons_updates">
                    <?php
                    foreach ($twd_plugins as $id => $project) {
                        $last_index = 0;
                        if (isset($updates[$id]) && !empty($updates[$id])) {                            
                            $last_index = count($updates[$id]) - 1;
                        }
                        ?>
                        <div class="twd-add-on">
                            <figure class="twd-figure">
                                <div class="twd-figure-img">
                                    <a href="<?php echo $project['twd_data']['url'] ?>" target="_blank">
                                        <?php if ($project['twd_data']['image']) { ?>
                                            <img src="<?php echo $project['twd_data']['image'] ?>"/>
                                        <?php } ?>
                                    </a>
                                </div>
                                <figcaption class="twd-addon-descr twd-figcaption">
                                    <?php if (isset($updates[$id][$last_index])) { ?>
                                        <p>What's new:</p>
                                        <?php echo strip_tags($updates[$id][$last_index]['note'], '<p>') ?>
                                    <?php } else { ?><?php echo $project['Title'] ?> is up to date
                                    <?php } ?>
                                </figcaption>
                            </figure>
                            <h2><?php echo $project['Title'] ?></h2>

                            <div class="main-plugin-desc-info">
                                <p><a href="<?php echo $project['twd_data']['url'] ?>"
                                      target="_blank"><?php echo $project['Version'] ?></a> | Web-Dorado</p>
                            </div>
                            <?php if (isset($updates[$id]) && isset($updates[$id][$last_index]['version'])) { ?>
                                <div class="twd-addon-descr-update">
                                    <span
                                        class="update-info">There is a new  <?php echo $updates[$id][$last_index]['version'] ?>
                                        version available</span><br/>
                                </div>
                            <?php } ?>
                        </div>
                    <?php }
                    ?>
                </div>
                <?php
            }
            ?>

        </div>
        <!-- #twd-settings-content -->
    </div>
    <!-- #twd-settings -->
</div><!-- .wrap -->
