<?php

    /**
     * Autoload for PHP Composer
     */
    if(!defined('ABSPATH')) define('ABSPATH', dirname(__FILE__) . '/');
    if(!defined('THEME_PATH')) define('THEME_PATH', ABSPATH . 'wp-content/themes/_tk-child/');
    require ABSPATH."vendor/autoload.php";

    /**
     * Here we are importing the Styles of the parent theme and re-using them
     * for our own project, please don't edit this hook/function
     */
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
    function my_theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
    }

    /**
     * This is an example of usage for the Eloquent ORM

        $db = \WeDevs\ORM\Eloquent\Database::instance();
        
        var_dump( $db->table('users')->find(1) );
        var_dump( $db->select('SELECT * FROM wp_users WHERE id = ?', [1]) );
        var_dump( $db->table('users')->where('user_login', 'john')->first() );
    */
    
    /** 
     * Start your own functions here
     */
     
     function create_custom_post_course() {
         $labels = array(
            'name'               => _x( 'Courses', 'post type general name' ),
            'singular_name'      => _x( 'Course', 'post type singular name' ),
            'add_new'            => _x( 'Add New', 'course' ),
            'add_new_item'       => __( 'Add New course' ),
            'edit_item'          => __( 'Edit course' ),
            'new_item'           => __( 'New course' ),
            'all_items'          => __( 'All courses' ),
            'view_item'          => __( 'View course' ),
            'search_items'       => __( 'Search courses' ),
            'not_found'          => __( 'No courses found' ),
            'not_found_in_trash' => __( 'No courses found in the Trash' ),
            'parent_item_colon'  => '',
            'menu_name'          => 'courses'
          );
          
            $args = array(
                'labels'        => $labels,
                'description'   => 'Displays courses',
                'public'        => true,
                'menu_position' => 3,
                'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
                'has_archive'   => true,
            );
          register_post_type( 'Course', $args );
        }
        add_action( 'init', 'create_custom_post_course' );
     
?>
