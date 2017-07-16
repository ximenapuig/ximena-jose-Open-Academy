<?php
    
    //Adding Roles
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