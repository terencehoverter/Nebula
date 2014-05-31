<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>

<div class="container">
	<div class="row">
		
		<div class="ten columns">
			<? the_breadcrumb(); ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
												
						<?php if ( current_user_can('manage_options') ) : ?>
							<div class="container entry-manage">
								<div class="row">
									<div class="six columns entry-edit">
										<a href="<?php echo get_admin_url(); ?>" target="_blank">Admin</a> | <?php edit_post_link('Edit'); ?>
									</div><!--/columns-->
									<div class="ten columns">
										<span class="entry-modified">Last Modified: <strong><?php the_modified_date(); ?></strong> by <strong><?php the_modified_author(); ?></strong></span>
									</div><!--/columns-->
								</div>
							</div>
						<?php endif; ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->
				<?php //comments_template( '', true ); ?>
			<?php endwhile; ?>
		</div><!--/columns-->
		
		<div class="five columns push_one">
			<?php get_sidebar(); ?>
		</div><!--/columns-->
		
	</div><!--/row-->
</div><!--/container-->

<?php get_footer(); ?>
