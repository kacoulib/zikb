<?php
  
  add_action( 'init', 'kc_cpt_skills' );
  function kc_cpt_skills() {
    register_post_type( 'skills',
      array(
        'labels' => array(
          'name' => __( 'skills' ),
          'singular_name' => __( 'skill' )
        ),
        'public' => true,
        'has_archive' => true,
      )
    );
  }