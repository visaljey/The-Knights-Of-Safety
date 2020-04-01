<?php
include_once get_template_directory() . '/theme-includes/init.php';

function my_custom_mime_types( $mimes ) {

// New allowed mime types.
$mimes['svg'] = 'image/svg+xml';
$mimes['svgz'] = 'image/svg+xml';
$mimes['doc'] = 'application/msword';

// Optional. Remove a mime type.
unset( $mimes['exe'] );

return $mimes;
}
add_filter( 'upload_mimes', 'my_custom_mime_types' );

add_action('wp_enqueue_scripts', 'my_admin_ajax');
function my_admin_ajax() { 
  
  wp_enqueue_script('my-script', get_template_directory_uri() . '/js/manage.js',array('jquery'));
  wp_localize_script( 'my-script', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
}

add_action('wp_ajax_my_action', 'my_callback');

function my_callback() {
    $whatever = $_POST['whatever'];
    global $wpdb;

    if ($whatever == 0) {
        $new = $wpdb->get_results($wpdb->prepare("select * from wp_download"));          
        $nCount = count($new);
        $record_count = 1;
        if ($nCount > 0)  {
            
            $record_count = (int) $new[0]->download_count + 1;               
            $id = (int) $new[0]->download_id;
            $wpdb->query($wpdb->prepare("UPDATE wp_download SET download_count=$record_count WHERE download_id=$id"));
        }    
        else {

            $table = 'wp_download';
            $data = array('download_count' => 1);
            $format = array('%s');
            $wpdb->insert($table,$data,$format);    
        }    
        echo $record_count;
    }
    else {
        $new = $wpdb->get_results($wpdb->prepare("select * from wp_download"));          
        $nCount = count($new);
        $record_count = 1;
        if ($nCount > 0)  {
            
            $record_count = (int) $new[0]->download_count;               
            $id = (int) $new[0]->download_id;
            echo $record_count;
        }    
        else {

            echo 0;
        }        
    }    
    wp_die();
}

?>
