<?php

/*
Plugin Name: WP Shortcode Demo
Author: Goc Lam Web
Description: Demo Shortcode plugin
*/

add_shortcode( 'test_shortcode', 'create_shortcode');
function create_shortcode(){
    return "Hello Shortcode";
}
// cách 1
add_shortcode( 'test_shortcode_thamso', 'create_shortcode_thamso');
function create_shortcode_thamso($thamso){
    extract(shortcode_atts( 
        array(
            'gia_tri_1' => 'Mặc định giá trị 1', 
            'tham_so_2' => 'Mặc định tham số 2'
        ),
        $thamso
    ));
    return "Shortcode có giá trị 1 là: {$thamso['gia_tri_1']}, tham số 2 là: {$thamso['tham_so_2']}";
}
// cách 2
add_shortcode( 'test_shortcode_thamso_default', 'create_shortcode_thamso_default');
function create_shortcode_thamso_default($thamso){
    extract(shortcode_atts( 
        array(
            'gia_tri_1' => 'Mặc định giá trị 1', 
            'tham_so_2' => 'Mặc định tham số 2'
        ),
        $thamso
    ));
    $tong = "Shortcode có giá trị 1 là: {$gia_tri_1}, tham số 2 là: {$tham_so_2}";
    return $tong;
}
// Shortcode đặc biệt có nội dung
add_shortcode( 'test_shortcode_content', 'create_shortcode_content' );
function create_shortcode_content($thamso, $content){
    return $content;
}