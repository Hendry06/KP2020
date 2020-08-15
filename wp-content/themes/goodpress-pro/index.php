<?php get_header(); ?>

	<div id="primary" class="content-area clear">

		<main id="main" class="site-main clear">

			<div id="recent-content">

			<?php if ( is_active_sidebar( 'homepage' ) ) { ?>

				<?php dynamic_sidebar( 'homepage' ); ?>

			<?php } else { ?>

				<div class="notice">
					<p><?php echo __('Put the "Home One/Two/Three Columns" and "Advertisement" widgets to the <strong>Homepage Content</strong> widget area.', 'goodpress-pro'); ?></p>
					<p><a href="<?php echo home_url(); ?>/wp-admin/widgets.php"><?php echo __('Okay, I\'m doing now &raquo;', 'goodpress-pro'); ?></a>  | <a href="<?php echo get_template_directory_uri(); ?>/assets/img/how-to-home-widgets.png" target="_blank"><?php echo __('How To &raquo;', 'goodpress-pro'); ?></a></p>
				</div>

			<?php } ?>							
			
			</div><!-- #recent-content -->		

		</main><!-- .site-main -->

	</div><!-- #primary -->

<?php get_template_part('sidebar', 'home'); ?>
<?php get_footer(); ?>
