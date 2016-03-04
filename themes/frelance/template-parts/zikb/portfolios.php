<?php 
	$args = array('post_type' => 'portfolios');
	$loop = new WP_Query( $args );
	?>
	<div>
		<h2>Portfolio</h2>
		<div class="displayLeft">
	  		<p>Les ingrédients qui vous sont proposés n’ont pas été choisis par hasard. Ils se marient parfaitement avec des nouilles de riz, des crudités et la fameuse sauce aigre douce à base de nuoc mam. Votre bobun est un caméléon que vous pouvez modifer au gré de vos appétits...</p>
		</div>
		<div class='displayRight'>
			<ul class="listDisplay">
				<?php 
				while ( $loop->have_posts() ) : $loop->the_post();
			 	?>
				 	<li>
				 		<figure>
			 				<a href="<?php echo $post->pinged; ?>" target='_blank'>
								<?php the_post_thumbnail(); ?>
				 			</a>
							<figcaption><?php the_title(); ?></figcaption>
						
				 		</figure>
					</li>
				<?php endwhile;?>
			</ul>
		</div>
	</div>
