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
						<img src="http://emi-lee.fr/wp-content/uploads/2015/11/12.jpg" alt='my html skill logo'>
						<figcaption>the_title</figcaption>
					
						</figure>
						html <span></span>
					</li>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="entry-content">
				<?php the_content(); ?>
				</div>
				<?php endwhile;?>
			</ul>
		</div>
	</div>
	<?php //var_dump($loop)?>