<?php
  
  add_action( 'init', 'kc_cpt_skills' );
  function kc_cpt_skills() {
    $labels = array(
          'name' => __( 'skills' ),
          'singular_name' => __( 'skill' )
    );

    $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'thumbnail', 'excerpt')
    ); 
    register_post_type('skills',$args);
  }