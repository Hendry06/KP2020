<?php if (get_theme_mod('home-featured-on', 'true') == true ) { ?>

<div id="featured-content" class="container clear">

<?php		

	$args = array(
	'post_type'      => 'post',
	'posts_per_page' => 5,
    'meta_query' => array(
        array(
            'key'   => 'is_featured',
            'value' => 'true'
        	)
    	)				
	);

	// The Query
	$the_query = new WP_Query( $args );

	$i = 1;

	if ( $the_query->have_posts() && (!get_query_var('paged')) ) {	

	while ( $the_query->have_posts() ) : $the_query->the_post();

	?>	

	<?php if ($i == 1) { ?>

	<div class="featured-large hentry">

			<a class="thumbnail-link" href="<?php the_permalink(); ?>">
				
				<div class="thumbnail-wrap">
					<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('featured_large_thumb');  
					} else {
						echo '<img src="' . get_template_directory_uri() . '/assets/img/featured-large-thumb.png" alt="" />';
					}
					?>
				</div><!-- .thumbnail-wrap -->
				<span class="gradient"></span>
			</a>

			<div class="entry-header">
				<div class="entry-category">
					<?php goodpress_first_category(); ?>
				</div>						
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry-meta">
					<span class="entry-date"><?php echo get_the_date(); ?></span>
				</div><!-- .entry-meta -->							
			</div><!-- .entry-header -->	
		
	</div><!-- .featured-large -->			

	<?php } else { ?>

	<div class="featured-small hentry <?php echo( $the_query->current_post + 1 === $the_query->post_count ) ? 'last' : ''; ?>">

			<a class="thumbnail-link" href="<?php the_permalink(); ?>">
				
				<div class="thumbnail-wrap">
					<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('featured_small_thumb');  
					} else {
						echo '<img src="' . get_template_directory_uri() . '/assets/img/featured-small-thumb.png" alt="" />';
					}
					?>
				</div><!-- .thumbnail-wrap -->
				<span class="gradient"></span>
			</a>

		<div class="entry-header">
			<div class="entry-category">
				<?php goodpress_first_category(); ?>
			</div>			
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>		
		</div><!-- .entry-header -->	

	</div><!-- .featured-small -->

	<?php

		}
		$i++;
		endwhile;
	?>
	<?php
		} elseif  ( !$the_query->have_posts() && (!get_query_var('paged')) ) { // else has no featured posts
	?>
		<div class="notice">
			<p><?php echo __('Please edit posts and set "Featured Posts" for this section.', 'goodpress-pro'); ?></p>
			<p><a href="<?php echo home_url(); ?>/wp-admin/edit.php"><?php echo __('Okay, I\'m doing now &raquo;', 'goodpress-pro'); ?></a> | <a href="<?php echo get_template_directory_uri(); ?>/assets/img/how-to-featured.png" target="_blank"><?php echo __('How To &raquo;', 'goodpress-pro'); ?></a></p>
		</div>

	<?php
		} //end if has featured posts
		wp_reset_postdata();				
	?>

	</div><!-- #featured-content -->
	
	<?php } ?>