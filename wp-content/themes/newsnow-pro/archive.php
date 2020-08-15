<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package newsnow_pro
 */

get_header(); ?>

	<div id="primary" class="content-area clear">

		<div class="breadcrumbs clear">
			<h3>
				<?php
					global $wp_version;

					if ( $wp_version >= 4.1 ) {
						echo get_the_archive_title('');
					} else {
						echo "Archives";
					}
				?>					
			</h3>	
		</div><!-- .breadcrumbs -->
				
		<main id="main" class="site-main clear">

			<div id="recent-content" class="content-loop">

				<?php

				if ( have_posts() ) :	
				
				$i = 1;		
					
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part('template-parts/content', 'loop');

					if ( $i == get_theme_mod('content-ad-position', '1')+1 ) {
						dynamic_sidebar( 'content-ad' );
					}

					$i++;

				endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; 

				?>

			</div><!-- #recent-content -->

		</main><!-- .site-main -->

		<?php get_template_part( 'template-parts/pagination', '' ); ?>

	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

