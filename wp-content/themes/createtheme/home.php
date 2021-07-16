<?php get_header();?>

<div class="container">
  <div class="row">
    <?php
if ( have_posts() ) ?>
   <?php while ( have_posts() ): ?>
   <?php  the_post();?>
    <div class="col-sm-4">
      <h3><?php  the_title();?></h3>
      <p><?php  the_content();?></p>
      <?php  the_author();?>
      <?php  the_time();?>
    </div>
   
    <?php endwhile; ?>
    
  </div>
</div>
  
<?php get_footer(); ?>

