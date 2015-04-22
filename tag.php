<?php

	/**
	 * TAG
	 *
	 * Aesthetic Perspectives
	 *
	 * @link http://codex.wordpress.org/Template_Hierarchy
	 * @package WordPress
	 * @subpackage Aesthetic_Perspectives
	 * @since Aesthetic Perspectives 1.0
	 */

get_header(); ?>

<!-- Blog Home Content -->
<div class="fixed masthead">	
	<div class="container">
		<div class="one column">
			<h1><span class="green">— tag:</span> <?php single_tag_title(); ?> <span class="green">—</span></h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="archive-view">
		<?php if (have_posts()) : ?>
		<?php $post = $posts[0]; $c=0;?>
		<?php while (have_posts()) : the_post(); ?>
		<?php $c++;
		if( $c == 1) :?>
		<div class="post one column">
			<div class="featured">
				<a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
			</div>
			<div class="title">
				<h2><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			</div>
			<div class="info">
				<h4 class="red"><?php the_time( 'd F Y' ); ?> / <?php the_tags('', ', ', ''); ?></h4>
			</div>
		</div>
		<?php else :?>
		<div class="post two columns">
			<div class="featured">
				<a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
			</div>
			<div class="title">
				<h2><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			</div>
			<div class="info">
				<h4 class="red"><?php the_time( 'd F Y' ); ?> / <?php the_tags('', ', ', ''); ?></h4>
			</div>
		</div>
		<?php endif;?>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
<!-- Pagination -->
	<div class="archive-pagination one column">
		<h1 class="gray">
			<?php pagination(); ?>
		</h1>
	</div>
	
<?php get_footer(); ?>