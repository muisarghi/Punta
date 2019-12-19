<?php get_header(); ?>

	  <div id="center">

      <div id="center-border">

          <div id="large-side">

            <div class="content">

                <div class="content-single">

                    <?php if ( have_posts() ) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                      <div class="post">



                          <div class="post-title" style="width: 100%;"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>

                          <!--<?php if (function_exists('has_post_thumbnail')) { if ( has_post_thumbnail() ) { ?>

                        <a class="single-image" href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail(array( 648, 999 )); ?>

                        </a>



                      <?php }



                      } ?>-->

                          <div class="post-content">

                            <?php the_content();?>



                          </div>

                          <div class="clear"></div>

                      </div>



                    <?php endwhile;?>



                    <?php else: ?>

                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

                    <?php endif; ?>
                    <?php comments_template( '', true ); ?> 


                </div>

            </div>          

          </div>

          <?php get_sidebar(); ?>

          <div class="clear"></div>

      </div>

    </div>

<?php get_footer(); ?>