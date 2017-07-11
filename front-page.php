

<?php get_header();
?>
        <div class="jumbotron">
            <div class="segmenter" style="background-image: url(wp-content/themes/MM-site/build/images/run.jpg)"></div>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
          </div>
            <div class="row">
              <div class="col-xs-12 smw">
                 <?php dynamic_sidebar( 'home_right_1' ); ?>
              </div><!-- end smw -->
            </div><!-- end row -->
        </div><!-- end jumbotron -->
<?php get_footer(); ?>

