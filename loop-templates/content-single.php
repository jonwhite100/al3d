<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="row">
		<div class="col-md-5">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<!-- <div class="entry-meta">
					<?php understrap_posted_on(); ?>
				</div> -->
			</header>

			<div class="entry-content">
				<?php the_content(); ?>
				<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				) );
				?>
			</div>
		</div>
		<div class="col-md-7">
			<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
			<?php
				// if (class_exists('MultiPostThumbnails')) {
				// 	$i = 5;
				// 	while ($i <= 5){
				// 		new MultiPostThumbnails( array('label' => 'Extra Featured Image '.$i, 'id' => 'extra-image-'.$i, 'post_type' => 'post') );
				// 		$i++;
				// 	}
				// }
			?>

			<?php if (class_exists('MultiPostThumbnails')) :
				MultiPostThumbnails::the_post_thumbnail(
			        get_post_type(),
			        'second-image'
			    );
				MultiPostThumbnails::the_post_thumbnail(
			        get_post_type(),
			        'third-image'
			    );
				MultiPostThumbnails::the_post_thumbnail(
			        get_post_type(),
			        'fourth-image'
			    );
				MultiPostThumbnails::the_post_thumbnail(
			        get_post_type(),
			        'fifth-image'
			    );
				MultiPostThumbnails::the_post_thumbnail(
			        get_post_type(),
			        'sixth-image'
			    );
			endif; ?>
		</div>
	</div>


	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
