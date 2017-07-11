<?php get_header(); ?>
         <?php if(have_posts()): while (have_posts()): the_post(); ?>
       <article>
       <h2><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h2>
       <p> By <?php the_author(); ?> on <?php echo the_time('l, F, jS, Y'); ?> in <?php the_category(', '); ?>
        <a href='<?php comments_link(); ?>'><?php comments_number(); ?></a>
       </p>
       <?php the_excerpt(); ?>
     </article>
       <?php the_content(); ?>

       <?php endwhile; else: ?>
       <div class='page-header'>
        <h1>Oh no!</h1>
      </div>
      <p>No content currently available for this page.</p>
     <?php endif; ?>
        </div>
      </div>

     <?php get_footer(); ?>