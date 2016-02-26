<?php
  
  add_action( 'init', 'kc_cpt_portfolio' );
  function kc_cpt_portfolio() {
    $labels = array(
      'name' => __( 'portfolios' ),
      'singular_name' => __( 'portfolio' )
    );
    
    $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'thumbnail', 'trackbacks')
    );
    register_post_type('portfolios',$args);
  }
  