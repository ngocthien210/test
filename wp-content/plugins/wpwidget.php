<?php
/* 
Plugin Name: Test Widget
Author: Goc Lam Web
*/
// Khởi tạo Widget
function create_test_widget(){
    register_widget('Test_Widget');
}
add_action( 'widgets_init', 'create_test_widget');
// Tạo Widget
class Test_Widget extends WP_Widget {
    function __construct(){
        parent::__construct(
            'test_widget', // id đại diện
            'Test widget', // Tên hiển thị
            array('description' => 'Ví dụ về WP Widget' )
        );
        // parent::__construct(
        //     'test_widget', 
        //     'Test widget', 
        //     array('description' => 'Ví dụ về WP Widget' )
        // );
    }
    // Thiết lập trường nhập liệu
    public function form($instance){
        $default = array('title'=>'Widget Tilte' , 'content'=>'Hãy nhập nội dung');
        $instance = wp_parse_args($instance , $default);
        // echo '<pre>';
        // var_dump($instance);
        // echo '</pre>';
        echo '<p><label for="test-widget-title-input">Title: </label>';
        printf(
            '<input type="text" class="widefat" name="%1$s" value="%2$s"/></p>',
            $this->get_field_name('title'),
            esc_attr( $instance['title'] )
        );
        echo '<p><label for="test-widget-title-input">Content: </label>';
        printf(
            '<textarea  class="widefat" name="%1$s">%2$s</textarea></p>',
            $this->get_field_name('content'),
            esc_attr( $instance['content'] )
        );
    }
    // Lưu trường dữ liệu
    public function update($new_instance, $old_instance){
        $instance = $old_instance;
        $instance['title'] = apply_filters( 'widget_title',$new_instance['title'] );
        $instance['content'] = apply_filters( 'widget_title',$new_instance['content']);
        return $instance;
    }
    public function widget($args, $instance){
        // echo '<pre>';
        // var_dump($args);
        // echo '</pre>';
        // extract($args);
        // echo $before_widget;
        // echo $before_title.$instance['title'].$after_title;
        // echo $after_widget;
        echo $args['before_widget'];
        echo $args['before_title'].$instance['title'].$args['after_title'];
        echo $args['after_widget'];
        printf('<div class="test-widget-content">%1$s</div>',$instance['content']);
    }
}