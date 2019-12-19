<?php get_header(); ?>
	  <div id="center">
      <div id="center-border">
          <div id="large-side">
            <div class="content">
                <div class="content-index">
                    <?php
      					$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
      					if ( $images ) :
      						$total_images = count( $images );
      						$image = array_shift( $images );
      						$image_img_tag = wp_get_attachment_image( $image->ID, array( 198, 148 ) );
      				?>


      				    <?php endif; ?>
                    <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                      <div class="post">

                      <?php if (function_exists('has_post_thumbnail')) { if ( has_post_thumbnail() ) { ?>
                        <a class="post-image" href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( array( 198, 148 )); ?>
                        </a>
                        <div class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
                      <?php }
                      elseif ( $images != '' ) {?>
                        <!-- .gallery-thumb -->
      				    <a class="post-image" href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>
                        <div class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
                      <?php	}
                      else {?>
                      	<div class="post-title" style="width: 100%;"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
                      <?php	}
                      } ?>
                          
                          <div class="post-content">
                          <?php if ( $images != '' ) {?>
                            <p><em><?php echo "This gallery contains". $total_images ." images" ?></em></p>
                          <?php } ?>
                            <?php the_excerpt();?>
                            
                          </div>
                          <div class="clear"></div>
                      </div>

                    <?php endwhile;?>
                    <div class="navigation">
        			<span class="previous-entries"><?php next_posts_link('&laquo; Older Entries') ?></span>
        			<span class="next-entries"><?php previous_posts_link('Newer Entries &raquo;') ?></span>
                    <div class="clear"></div>
        			</div>
                    <?php else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>

                </div>
            </div>          
          </div>
          <?php get_sidebar(); ?>
          <div class="clear"></div>
      </div>
    </div>
<?php get_footer(); ?>