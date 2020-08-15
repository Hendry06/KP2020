<div class="section-heading">

<?php
	if ( ( ! empty( $instance['title'] ) ) && ( $cat_id != 0 ) ) {
		echo '<h3 class="section-title"><a href="' . esc_url( $cat_link ) . '">' . apply_filters( 'widget_title', $instance['title'], $instance, $this->id_base ) . '</a></h3>';
	} elseif ( $cat_id == 0 ) {
		echo '<h3 class="section-title"><span>' . __( 'Latest Posts', 'goodpress-pro' ) . '</span></h3>';
	} else {
		echo '<h3 class="section-title"><a href="' . esc_url( $cat_link ) . '">' . esc_attr( $category->name ) . '</a></h3>';
	}
?>

</div><!-- .section-heading -->			

<div class="posts-wrap">
<?php 
	while ( $posts->have_posts() ) : $posts->the_post(); 

?>

<div class="hentry <?php echo( $posts->current_post + 1 === $posts->post_count ) ? 'last' : ''; ?>">

	<?php if ( has_post_thumbnail() ) { ?>
		<a class="thumbnail-link" href="<?php the_permalink(); ?>">
			<div class="thumbnail-wrap">
				<?php 
					the_post_thumbnail('block_medium_thumb');  
				?>
			</div><!-- .thumbnail-wrap -->
		</a>
	<?php } ?>

	<div class="entry-header">

		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<div class="entry-meta">
			<span class="entry-date"><?php echo get_the_date(); ?></span>
			<span class="entry-comment"><?php comments_popup_link( '0 comment', '1 comment', '% comments', 'comments-link', 'comments off'); ?></span>
		</div><!-- .entry-meta -->

	</div><!-- .entry-header -->

</div><!-- .hentry -->

<?php 
	endwhile; 
?>
</div><!-- .posts-wrap -->