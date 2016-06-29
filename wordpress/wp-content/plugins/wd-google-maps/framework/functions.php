<?php
// get option function
function gmwd_get_option($option_name){
    global $wpdb;
    $query = "SELECT * FROM ". $wpdb->prefix . "gmwd_options ";
    $rows = $wpdb->get_results($query);	

    $options = new stdClass();
    foreach ($rows as $row) {
        $name = $row->name;
        $value = $row->value !== "" ? $row->value : $row->default_value;
        $options->$name = $value;
    }
    
    return $options->$option_name;
}


function upgrade_pro($text = false){
?>
    <div class="gmwd_upgrade wd-clear" >
        <div class="wd-right">
            <a href="https://web-dorado.com/products/wordpress-google-maps-plugin.html" target="_blank">
                <div class="wd-table">
                    <div class="wd-cell wd-cell-valign-middle">
                        <?php _e("Upgrade to paid version", "gmwd"); ?>
                    </div>
                     
                    <div class="wd-cell wd-cell-valign-middle">
                        <img src="<?php echo GMWD_URL; ?>/images/web-dorado.png" >
                    </div>
                </div>     
            </a>                  
        </div>
    </div>
    <?php if($text){
    ?>
        <div class="wd-text-right wd-row" style="color: #15699F; font-size: 20px; margin-top:10px; padding:0px 15px;">
            <?php echo sprintf(__("This is FREE version, Customizing %s is available only in the PAID version.","gmwd"), $text);?>
        </div>
    <?php
    }

}


?>