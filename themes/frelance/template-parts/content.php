<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package frelance
 */

?>

<article>
	<header>
		<?php
			if ( is_single() ) {
				the_title( '<h1>', '</h1>' );
			} else {
				the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<?php
		endif; ?>
	</header>

	<div class="post-content center">
		<?php
			the_content();

			$mtb = get_post_meta($post->ID,'youtube_post_link',true);
			if (!empty($mtb)){
				$mtb = explode('=', $mtb);
				echo '<aside><iframe width="560" height="315" src="https://www.youtube.com/embed/'.$mtb[1].'" frameborder="0" allowfullscreen></iframe></aside>';	
			} 
			?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
