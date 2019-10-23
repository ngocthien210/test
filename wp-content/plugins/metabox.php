<?php 

/*
Plugin Name: Metabox
Author: Goc Lam Web
Description: Demo metabox plugin
*/

// Khởi tạo metabox
function test_meta_box(){
    add_meta_box('metabox-demo', 'Demo Metabox', 'test_demo_output', 'post');
}
add_action( 'add_meta_boxes', 'test_meta_box');
// Form metabox trong admin
function test_demo_output($post){
    $link_download = get_post_meta( $post->ID, '_link_download',true )?get_post_meta( $post->ID, '_link_download',true ):'';
    // Bảo mật thông qua NONCE
    wp_nonce_field( 'save_link_nonce', 'link_nonce_info' );
    // tao fiels link dowload
    echo '<label for="link-download">Link download: </label>';
    // printf( '<input type="type" id="link-download" name="link-download" value="%1$s"/>',$link_download);
    echo '<input type="type" id="link-download" name="link-download" value="'.$link_download.'"/>';
}
// Lưu dữ liệu metabox
function test_save_meta_box($post_id){
    // Bảo mật thông qua NONCE
    $nonce_info = $_POST['link_nonce_info'];
    if(!isset($nonce_info)){
        return;
    }
    if(!wp_verify_nonce( $nonce_info, 'save_link_nonce' )){
        return;
    }
    $link_download = sanitize_text_field( $_POST['link-download'] ) ;
    update_post_meta( $post_id, '_link_download', $link_download);
}
add_action( 'save_post','test_save_meta_box' );