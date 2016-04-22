<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package secretlyShameless
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	
		<?php 
		if (has_post_thumbnail()){ ?>
			<figure class="feature-image">
				<a href="<?php echo esc_url( get_permalink() ); ?>" rel ="bookmark">
					<?php the_post_thumbnail(); ?>
				</a>
			</figure>
		<?php }
		?>


		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( sprintf( '<h2 class="entry-title index-excerpt"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			}
			?>

		<?php
		if (has_excerpt($post->ID)){
			echo '<div class="deck">';
			echo '<p>' . get_the_excerpt() . '</p>';
			echo '</div>';
		}
		?>


		<?php if ( 'post' === get_post_type() ) : ?>

		<div class="index-entry-meta">
			<?php secretlyshameless_index_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content index-excerpt">
		<?php
		the_excerpt();
		?>
	</div><!-- .entry-content -->

	<div class="continue-reading">
		<a href="<?php echo esc_url( get_permalink() ); ?>" rel ="bookmark">
			<?php 
				printf(
					wp_kses( __( 'Continue reading %s', 'secretlyshameless' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				);

			?>
		</a>
	</div>

</article><!-- #post-## -->
