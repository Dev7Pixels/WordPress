<div class="pt-5">
<div class="container shadow-lg p-3 mb-5 bg-body rounded">
<?php get_header();?>



    <?php
if ( have_posts() ) ?>
   <?php while ( have_posts() ): ?>
    <div class="container">
  <div class="row">
   <?php  the_post();?>
    <div class="col-sm-4">
      <h3><?php  the_title();?></h3>
      <p><?php  the_content();?></p>
      <?php  the_author();?>
      <?php  the_time();?>
    </div>
    </div>
</div>
    <?php endwhile; ?>
    
 
  
<?php get_footer(); ?>

</div>
</div>
