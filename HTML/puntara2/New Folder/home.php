<?php get_header(); ?>
	  <div id="center">
      <div id="center-border">
          <div id="large-side">
            <!--Featured Start-->
            <?php query_posts('category_name=Featured&&posts_per_page=5&&orderby=menu_order');
            if ( have_posts() ) : ?>
            <div class="content" id="featured">
                <div class="content-title">Featured //</div>
                <div id="slides">
                    <div class="slides_container">

                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="post">
                        <div class="post-image">
                        <?php
                        if (function_exists('has_post_thumbnail')) {
                           if ( has_post_thumbnail() ) { ?>
                            <?php the_post_thumbnail('featured-thumbnail');
                           }
                           else{ ?>
                             <img alt="slide 1" src="<?php bloginfo('template_directory')?>/images/default-slider.jpg" />
                        <?php   }
                        } ?>
                        </div>
                        <div class="caption">
                            <div class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
                            <div class="post-content">
                                <?php the_excerpt();?>

                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>

                    <!--<div class="post">
                        <div class="post-image"><img alt="slide 1" src="<?php bloginfo('template_directory')?>/images/temp-slider_01.jpg" /></div>
                        <div class="caption">
                            <div class="post-title"><a href="#">Lorem Ipsum Dolor Sit Amet 1</a></div>
                            <div class="post-content">
                                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                 <a href="#" class="readmore">More Detail &gt;&gt;</a>
                                </p>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>-->
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <?php else: ?>
            <?php endif;
             wp_reset_query(); ?>
             <!--Featured End-->

            <!--Personnel Start-->
            <?php query_posts('category_name=Personnel&&posts_per_page=3&&orderby=menu_order');
            if ( have_posts() ) : ?>
            <div class="content" id="personel">
                <div class="content-post">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="post">
                            <?php
                            if (function_exists('has_post_thumbnail')) {
                               if ( has_post_thumbnail() ) { ?>
                            <a class="post-image" href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('personel-thumbnails');?> </a>
                            <?php   }
                            } ?>
                            <div class="post-title">
                              <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                              <span>
                              <?php
                                $posttags = get_the_tags();
                                if ($posttags) {
                                  foreach($posttags as $tag) {
                                    echo $tag->name . ' ';
                                  }
                                }
                              ?>
                              </span>
                            </div>
                            <div class="post-content">
                            <?php the_excerpt();?>
                            </div>
                        </div>
                    <?php endwhile;?>
                        <!-- This is just example
                        <div class="post">
                            <a href="#" class="post-image"><img alt="adit" src="<?php bloginfo('template_directory')?>/images/personel-pict_02.jpg" /></a>
                            <div class="post-title"><a href="#">Adhit</a><span>Bassist</span></div>
                            <div class="post-content"><p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standar dummy text ever since the 1500s,</p></div>
                        </div>-->
                        <div class="clear"></div>
                </div>
            </div>
            <?php else: ?>
            <?php endif;
             wp_reset_query(); ?>
             <!--Personnel End-->

             <!--Support Start-->
             <?php query_posts('category_name=Support&&posts_per_page=6&&orderby=menu_order');
             if ( have_posts() ) : ?>
            <div class="content" id="support">
                <div class="content-title">Supported By  //</div>
                <div class="content-post">

                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="post">
                        <?php
                        if (function_exists('has_post_thumbnail')) {
                           if ( has_post_thumbnail() ) { ?>
                        <a class="post-image" href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( 'support-thumbnails');?></a>
                        <?php   }
                        } ?>


                    </div>
                    <?php endwhile;?>

                    <!-- This is just example
                    <div class="post">
                        <a href="#" class="post-image"></a>
                    </div>-->
                    <div class="clear"></div>
                </div>
            </div>
            <?php else: ?>

            <?php endif;
             wp_reset_query(); ?>
             <!--Support End-->

            <!--Merchandise Start-->
            <?php query_posts('category_name=Merchandise&&posts_per_page=6&&orderby=menu_order');
             if ( have_posts() ) : ?>
            <div class="content" id="merchandise">
                <div class="content-title">Featured Merchandise  //</div>
                <div class="content-post">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="post">
                        <?php
                        if (function_exists('has_post_thumbnail')) {
                           if ( has_post_thumbnail() ) { ?>
                        <a class="post-image" href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('merchandise-thumbnails');?></a>
                        <?php   }
                        } ?>
                    </div>
                    <!-- This is just example
                    <div class="post">
                        <a href="#" class="post-image"><img alt="merchandise 1" src="<?php bloginfo('template_directory')?>/images/merchandise1.jpg" /></a>
                    </div>-->

                <?php endwhile;?>
                    <div class="clear"></div>
                </div>
            </div>
             <?php else: ?>

            <?php endif;
             wp_reset_query(); ?>
             <!--Merchandise End-->
             <div class="clear"></div>
          </div>
          <?php get_sidebar(); ?>
          <div class="clear"></div>
      </div>
    </div>
<?php get_footer(); ?>