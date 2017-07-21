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
            'delete_posts' => false, // Use false to explicitly deny
        )
        );
        
    }
    add_action( 'init', 'createRoles' );



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