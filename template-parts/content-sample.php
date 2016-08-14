<?php
/**
 * The template part for displaying content
 */
?>

    <header class="entry-header">
        <?php the_title(); ?>

        <?php $image = get_field('image');
            if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo the_title(); ?>" />
        <?php endif; ?>
    </header><!-- .entry-header -->
    <div class="entry-content">
        <?php the_content( sprintf(
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),get_the_title() ) );
        ?>
    </div><!-- .entry-content -->



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