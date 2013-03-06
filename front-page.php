<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" role="main">
	
	

	<!-- Basic orbit markup -->
	<ul data-orbit>
	  <li>
		<img src="http://localhost/wordpress/wp-content/uploads/2013/03/leah.jpg" />
		<div class="orbit-caption">Clinical Chemistry</div>
	  </li>
	  <li>
		<img src="http://localhost/wordpress/wp-content/uploads/2013/03/david.jpg" />
		<div class="orbit-caption">Autopsy Pathology</div>
	  </li>
	  <li>
		<a href="current"><img src="http://localhost/wordpress/wp-content/uploads/2013/03/annie.jpg" />
		<div class="orbit-caption">Current Residents </div></a>
	  </li>
	</ul>

	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php #reverie_entry_meta(); ?>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php #comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
		
<?php get_footer(); ?>
