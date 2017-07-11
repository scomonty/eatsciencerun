<?php get_header(); ?>
<div class="container-fluid">
        <?php if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); 
                } // end while
              } // end if
        ?>
    <div class="row">
      <div class="col-xs-6 col-xs-offset-3">
        <h1><?php the_title(); ?> </h1>
        <p><?php the_content(); ?></p>
      </div>
    </div>
</div>

<?php get_footer(); ?>

     