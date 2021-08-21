<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
<html lang="ar" dir="rtl" >
    
<?php get_header();

if(is_page('page-rtl')){
  echo "yess";
}?>




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
</html>
