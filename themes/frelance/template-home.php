<?php
	/*
	Template Name: home
	*/
get_header(); ?>

<section id='home'>
	<div class='center'>
		<h1>web developer</h1>
	</div>
</section>
<section id='about' class='center'>
	<div>
		<h2>About</h2>
		<figure class="displayLeft">
	  		<img src="http://emi-lee.fr/wp-content/uploads/2015/11/aporpos2.jpg" alt="zikb picture" />
		</figure>
		<div class='displayRight'>
			<p>
				Installé au cœur du 10e arrondissement de Paris, à deux pas du métro Poissonnière et de ses artères commerçantes, le restaurant vous ouvre ses portes chaque jour de 11H30 à 15h du lundi au vendredi sur place et à emporter.
			</p>
			<p>
				EMI-LEE se veut à la croisée des cultures : tabourets et tables en bois, murs décorés de photographies venues du Vietnam datant des années 50, et une ambiance  musicale soul, jazz et autre style, pour accompagner votre pause déjeuner. Le restaurant vous accueille dans une ambiance authentique où les plats peuvent aussi être commandés puis dégustés à emporter. 
			</p>
		</div>
	</div>
	<p>
			IBLER LES BONS PROFILS
		Enrichir son fichier de prospection, c'est bien. Avec des cibles pertinentes, c'est encore mieux. Natexo dispose d'une large palette de solutions pour atteindre les publics les plus en cohérence avec vos objectifs d'acquisition.
	<p>
		DES ACTIONS SUR-MESURE
		Nos leviers de collecte s'adaptent à l'envergure ainsi qu'au planning de votre projet.
	</p>
	<p>
		DISPOSITIFS ASSOCIÉS : Coregistration, sondage en ligne, jeux concours, opérations dédiées, clic/lead.
	</p>
	<p>
		UNE FORCE DE FRAPPE INÉGALÉE
		Natexo déploie des campagnes d'e-mailing efficaces ciblant une grande variété de profils, pour des opérations ponctuelles ou dans le cadre d'un programme global d'acquisition.
	</p>
	<p>
		UN STUDIO DESIGN INTÉGRÉ
		Natexo se propose aussi d'accompagner les marques dans la conception graphique de leurs campagnes. Nos équipes créatives veillent a
	</p>
</section>
<!-- <section id='skills' class='center'>
	<div>
		<h2>Skills</h2>
		<div class="displayLeft">
	  		<p>Les ingrédients qui vous sont proposés n’ont pas été choisis par hasard. Ils se marient parfaitement avec des nouilles de riz, des crudités et la fameuse sauce aigre douce à base de nuoc mam. Votre bobun est un caméléon que vous pouvez modifer au gré de vos appétits...</p>
		</div>
		<div class='displayRight'>
			<ul class="listDisplay">
				<li>
					<figure>
						<img src="http://emi-lee.fr/wp-content/uploads/2015/11/12.jpg" alt='my html skill logo'>
						<figcaption>logo</figcaption>
						
					</figure>
					html <span></span>
				</li>
				<li>
					<figure>
						<img src="http://emi-lee.fr/wp-content/uploads/2015/11/12.jpg" alt='my css skill logo'>
						<figcaption>logo</figcaption>
						
					</figure>
					css <span></span>
				</li>
				<li>
					<figure>
						<img src="http://emi-lee.fr/wp-content/uploads/2015/11/12.jpg" alt='my javascript skill logo'>
						<figcaption>logo</figcaption>
						
					</figure>
					javascript <span></span>
				</li>
				<li>
					<figure>
						<img src="http://emi-lee.fr/wp-content/uploads/2015/11/12.jpg" alt='my jquery skill logo'>
						<figcaption>logo</figcaption>
						
					</figure>
					jquery <span></span>
				</li>
				<li>
					<figure>
						<img src="http://emi-lee.fr/wp-content/uploads/2015/11/12.jpg" alt='my nodeJs skill logo'>
						<figcaption>logo</figcaption>
						
					</figure>
					nodeJs <span></span>
				</li>
				<li>
					<figure>
						<img src="http://emi-lee.fr/wp-content/uploads/2015/11/12.jpg" alt='my skill logo'>
						<figcaption>logo</figcaption>
						
					</figure>
					nodeJs <span></span>
				</li>
				<li>
					<figure>
						<img src="http://emi-lee.fr/wp-content/uploads/2015/11/12.jpg" alt='my jquery skill logo'>
						<figcaption>logo</figcaption>
						
					</figure>
					jquery <span></span>
				</li>
				<li>
					<figure>
						<img src="http://emi-lee.fr/wp-content/uploads/2015/11/12.jpg" alt='my nodeJs skill logo'>
						<figcaption>logo</figcaption>
						
					</figure>
					nodeJs <span></span>
				</li>
				<li>
					<figure>
						<img src="http://emi-lee.fr/wp-content/uploads/2015/11/12.jpg" alt='my skill logo'>
						<figcaption>logo</figcaption>
						
					</figure>
					nodeJs <span></span>
				</li>
			</ul>
		</div>
	</div>
</section> -->
<section id='skills' class='center'>
	<?php get_template_part('/template-parts/zikb/skills');?>
</section>
<section id='portfolio' class='center'>
	<?php get_template_part('/template-parts/zikb/portfolios');?>
</section>
<section id='tutorials' class='center'>
	<div>
		<h2>Tutorials</h2>
		<div class="displayLeft">
	  		<p>Les ingrédients qui vous sont proposés n’ont pas été choisis par hasard. Ils se marient parfaitement avec des nouilles de riz, des crudités et la fameuse sauce aigre douce à base de nuoc mam. Votre bobun est un caméléon que vous pouvez modifer au gré de vos appétits...</p>
		</div>
		<div class='displayRight'>
			<ul class="listDisplay">
				<?php
				    $recentPosts = new WP_Query();
				    $recentPosts->query('showposts=6');
				?>
				<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
				    <li>
				    	<a href="<?php the_permalink() ?>" rel="bookmark">
				    	<figure>
							<img src="http://emi-lee.fr/wp-content/uploads/2015/11/12.jpg" alt='my jquery skill logo'>
							<figcaption><?php the_title(); ?></figcaption>
							
						</figure>
						<span>category :</span> <?php the_category(); ?>
					    </a>
				    </li>
				<?php endwhile; ?>
				</ul>
	</div>
</section>
<?php get_footer(); ?>
