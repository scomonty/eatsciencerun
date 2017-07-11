<?php
/*
  Template Name: Race Page
*/
  ?>
  <?php include('inc/races.php'); ?>

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
        <div class="container">
          <div class="row">
        <div class="col-sm-12">
        <div class="grid">
        	<?php foreach ($races as $i => $race) { ?>
				<div class="element-item <?php echo $races[$i]["category"]; ?> col-md-3" data-category="marathon">
						<img class="img-fluid" src="../wp-content/uploads/2017/01/<?php echo $races[$i]["img"] ?>.png" alt="<?php echo $races[$i]["loc"]?>">
					<h4><?php echo $races[$i]["loc"] ?></h4>
					<p><?php echo $races[$i]["place"] ?></p>
          <h5><?php echo $races[$i]["time"] ?></h5>
				</div>
			<?php }; ?>
		</div>
    </div>
    </div>
  </div>
    </div><! -- end content -->
</div><!-- end jumbotron -->
<?php get_footer(); ?>



