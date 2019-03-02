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
				<div class="form">
					<h4 class='text-center'><b>Quick Quote</b></h4>
					<form>
						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="inputState">Type Of Loan:</label>
							<select id="inputState" class="form-control">
								<option selected>Select One</option>
								<option>Purchage Loan</option>
								<option>Refinance Loan</option>
							</select>
							</div>
							<div class="form-group col-md-6">
							<label for="inputState">Property Value:</label>
							<select id="inputState" class="form-control">
								<option selected>Select One</option>
								<option>Purchage Loan</option>
								<option>Refinance Loan</option>
							</select>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="inputState">Credit History:</label>
							<select id="inputState" class="form-control">
								<option selected>Select One</option>
								<option>Purchage Loan</option>
								<option>Refinance Loan</option>
							</select>
							</div>
							<div class="form-group col-md-6">
							<label for="inputState">Loan Amount:</label>
							<select id="inputState" class="form-control">
								<option selected>Select One</option>
								<option>Purchage Loan</option>
								<option>Refinance Loan</option>
							</select>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="inputCity">First Name</label>
							<input type="text" class="form-control" id="inputCity">
							</div>
							<div class="form-group col-md-6">
							<label for="inputCity">Last Name</label>
							<input type="text" class="form-control" id="inputCity">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
							<label for="inputCity">Phone</label>
							<input type="text" class="form-control" id="inputCity">
							</div>
							<div class="form-group col-md-6">
							<label for="inputCity">Email</label>
							<input type="text" class="form-control" id="inputCity">
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php fastfundmortgage_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
