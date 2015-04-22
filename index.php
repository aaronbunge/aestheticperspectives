<?php

	/**
	 * HOME
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
<div class="container">
	<div class="one column page-item">
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="post">
			<?php
				$images = get_field('homepage_slider');
				if( $images ): ?>
				<div class="slider">
				    <div class="flexslider">
				        <ul class="slides">
				            <?php foreach( $images as $image ): ?>
				                <li>
				                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				                    <div class="flex-caption">
					                    <h5><?php echo $image['caption']; ?></h5>
					                </div>
				                </li>
				            <?php endforeach; ?>
				        </ul>
				    </div>
			    </div>
			<?php endif; ?>
			<div class="title">
				<h2><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			</div>
			<div class="info">
				<h4 class="red"><?php the_time( 'd F Y' ); ?> / <?php the_tags('', ', ', ''); ?></h4>
			</div>
			<div class="copy">
				<p><?php the_content(); ?></p>
			</div>
			<div class="social">
				<h4>
					<ul class="green">
						<li><a href="http://www.facebook.com/share.php?u=<?php the_permalink();?>&t=<?php the_title();?>" target="_blank">Facebook</a></li>
						<li class="space-right">.</li>
						<li><a href="http://twitter.com/home?status=<?php the_title();?> - <?php the_permalink();?>" target="_blank">Twitter</a></li>
						<li class="space-right">.</li>
					</ul>
				</h4>
			</div>
		</div>
		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
	</div>
<!-- Pagination -->
	<div class="pagination one column">
		<h1 class="gray">
			<?php pagination(); ?>
		</h1>
	</div>
	
<?php get_footer(); ?>