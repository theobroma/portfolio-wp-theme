<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <div class="project-list_item">
      <!-- Get all custom fields -->
      <?php $host_link = get_field('host_link');?>
      <?php $code_link = get_field('code_link');?>
      <?php $image = get_field('image'); ?>
      <div class="project-list_details">
         <div class="project-list_thumbnail">
            <a href=<?php echo $host_link ?> target="_blank">
                <span class="image-bg">
                    <?php if( !empty($image) ): ?>
                    <span class="image-shop-scroll"  style="background-image:url(<?php echo $image['url']; ?>)" alt="<?php echo the_title(); ?>"></span>
                    <?php endif; ?>
                </span>
            </a>
        </div>
      </div>
      <div class="project-list_info">
            <?php if( !empty($host_link) ): ?>
                <div class="project-list_title">
                    <a href=<?php echo $host_link ?> target="_blank"> <?php the_title(); ?></a>
                </div>
            <?php endif; ?>
        <div class="project-list_tags">
            <span><?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?></span>
        </div>
        <div class="project-list_desc">
            <?php the_content( sprintf(
                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),get_the_title() ) );
            ?>
        </div>

        <?php if( !empty($code_link) ): ?>
            <div class="project-list_btn">
                <a href=<?php echo $code_link ?> class="button">Source code</a>
            </div>
        <?php endif; ?>
      </div>
      <div class="divider">
        <hr>
      </div>
    </div>
</article><!-- #post-## -->