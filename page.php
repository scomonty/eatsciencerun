<?php get_header(); ?>
<div class="jumbotron">
    <?php if(have_posts()): while (have_posts()): the_post(); ?>
    <h1 class="ESR"><?php the_title(); ?></h1>
    <div class="content">
        <div class="row">
          <?php the_content(); ?>
          <?php endwhile; else: ?>
        </div><! -- end row -->
        <div class='page-header'>
          <h1>Oh no!</h1>
        </div> <!-- end page header -->
        <p>No content currently available for this page.</p>
        <?php endif; ?>
    </div><! -- end content -->
</div><!-- end jumbotron -->
<?php get_footer(); ?>