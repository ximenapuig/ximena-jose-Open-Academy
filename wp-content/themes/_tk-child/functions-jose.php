<?php
    
    // creating roles for the teacher and students
    function createRoles(){
        add_role(
        'student',
        __( 'Student' ),
        array(
            'read'         => true,  // true allows this capability
            'edit_posts'   => false,
            'delete_posts' => false, // Use false to explicitly deny
        )
        );
        
        add_role(
        'teacher',
        __( 'Teacher' ),
        array(
                        'read'         => true,  // true allows this capability
                        'edit_posts'   => true,
                        'delete_posts' => true,
                        'read_private_posts'=> true ,
                        'read_private_pages'=> true ,
                        'upload_files'=> true ,
                        'publish_posts'=> true ,
                        'publish_pages'=> true ,
                        'manage_categories' => true,
                        'edit_published_posts' => true,
                        'edit_published_pages' => true,
                        'edit_private_posts'=> true ,
                        'edit_private_pages'=> true ,
                        'edit_pages'=> true ,
                        'edit_others_posts'=> true ,
                        'edit_others_pages'=> true ,
                        'delete_published_posts' => true,
                        'delete_published_pages'=> true,
                        'delete_private_posts'=> true ,
                        'delete_private_pages' => true,
                        'delete_pages'=> true,
                        'delete_others_posts'=> true ,
                        'delete_others_pages=> true'
        )
        );
        
    }
    add_action( 'after_switch_theme', 'createRoles' );
    

    //Controller for the signUp
    
    use \WPAS\Controller\WPASController;
    if(function_exists('is_wpas_plugin_active')){


    
        $controller = new WPASController([
            //options
            "mainscript" => "/script.js"
        ]);
        
        $controller->routeAjax([ 
            'slug' => 'signup', 
            'action' => 'signup', 
            'scope' => 'public', 
            'controller' => function(){
            
                WPASController::ajaxSuccess('ciao');
        }]);
    }