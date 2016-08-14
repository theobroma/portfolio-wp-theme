<?php get_header(); ?>
      <div class="main">
      <h2>Hello from Tag.php</h2>
        <div class="container">

          <div class="main">
                <?php if ( have_posts() ) : ?>

                <div class="term_description">
                    <span>Browsing Tag</span>
                    <h2><?php single_tag_title(); ?></h2>
                </div>



                <div class="project-list">

                <?php
                // Start the loop.
                while ( have_posts() ) : the_post();

                  /*
                   * Include the Post-Format-specific template for the content.
                   * If you want to override this in a child theme, then include a file
                   * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                   */
                  get_template_part( 'template-parts/content', get_post_format() );

                // End the loop.
                endwhile;

                // Previous/next page navigation.
                the_posts_pagination( array(
                  'prev_text'          => __( 'Previous page', 'twentysixteen' ),
                  'next_text'          => __( 'Next page', 'twentysixteen' ),
                  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
                ) );

              // If no content, include the "No posts found" template.
              else :
                get_template_part( 'template-parts/content', 'none' );

              endif;
              ?>
              </div>
          </div><!--/projectList -->
        </div><!--/container  -->
      </div><!--/main  -->
<?php get_footer(); ?>