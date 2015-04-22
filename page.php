<?php

	/**
	 * PAGE
	 *
	 * Aesthetic Perspectives
	 *
	 * @link http://codex.wordpress.org/Template_Hierarchy
	 * @package WordPress
	 * @subpackage Aesthetic_Perspectives
	 * @since Aesthetic Perspectives 1.0
	 */

get_header(); ?>

<!-- Page Content -->
<div class="container">
	<div class="one column page-item about">
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="post-inside">
			<div class="copy italic">
				<?php the_content(); ?>
			</div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
	
<?php get_footer(); ?>