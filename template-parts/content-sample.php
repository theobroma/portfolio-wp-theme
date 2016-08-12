<?php
/**
 * The template part for displaying content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_excerpt(); ?>

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twentysixteen_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->




<li>
    <div class="project-list_item">
      <div class="project-list_details">
        <div class="project-list_thumbnail"><a href="http://theobromaprojects.esy.es/bislite/" target="_blank"><span class="image-bg"><span class="image-shop-scroll image-shop-scroll-1"></span></span></a></div>
      </div>
      <div class="project-list_info">
        <div class="project-list_title"><a href="http://theobromaprojects.esy.es/bislite/" target="_blank">Bislite</a></div>
        <div class="project-list_date"><span>Date released : Q4,2014</span></div>
        <div class="project-list_tags"><span>Tags : PSD2HTML,Responsive,Bootstrap,LESS</span></div>
        <div class="project-list_desc">
          <p>
            Pages "Portfolio" and "Contact us" are also available.
            Full of shortcomings. It's valuable for me as my first finished work.
          </p>
        </div>
        <div class="project-list_btn"><a href="https://github.com/theobroma/projects/tree/master/bislite" class="button">Source code</a></div>
      </div>
    </div>
</li>