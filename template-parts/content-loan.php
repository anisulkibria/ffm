<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fastfundmortgage
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				fastfundmortgage_posted_on();
				fastfundmortgage_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="banner">
		<?php //the_custom_header_markup(); ?>
	</div>

	<div class="entry-content">
		<div class="row">
			<div class="col-md-8">
			<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'fastfundmortgage' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fastfundmortgage' ),
				'after'  => '</div>',
			) );
			?>
			</div>

			<div class="col-md-4">
				<?php 
					$value = get_field( "loan_sidebar" );

					if( $value ) {
						echo $value;
					} else {
						echo '';
					}
				?>
			</div>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php fastfundmortgage_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
