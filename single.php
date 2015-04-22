<?php

	/**
	 * POST
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
		<div class="post-inside">
			<?php
				$images = get_field('post_slider');
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
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="info">
				<h4 class="red"><?php the_time( 'd F Y' ); ?> / <?php the_tags('', ', ', ''); ?></h4>
			</div>
			<div class="copy">
				<p><?php the_content(); ?></p>
			</div>
			<div class="sticky">
				<h4>
					<ul class="green">
						<li><a href="http://www.facebook.com/share.php?u=<?php the_permalink();?>&t=<?php the_title();?>" target="_blank">Facebook</a></li>
						<li class="space-right">.</li>
						<li><a href="http://twitter.com/home?status=<?php the_title();?> - <?php the_permalink();?>" target="_blank">Twitter</a></li>
						<li class="space-right">.</li>
						<li><a href="javascript:void((function(){var%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)})());"><img style='display:none;'/>Pinterest</a></li>
						<li class="space-right">.</li>
					</ul>
				</h4>
			</div>
		</div>
		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
		<!-- Extra -->
		<div class="interior <?php the_field('center_checkbox'); ?>">
			<?php
				$images = get_field('post_content');
				if( $images ): ?>
		            <?php foreach( $images as $image ): ?>
	                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	                    <h5><?php echo $image['caption']; ?></h5>
		            <?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
	
<?php get_footer(); ?>