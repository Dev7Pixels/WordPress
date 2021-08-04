
<!-- test -->

<style>


.navigation-main {
  
  display:inline-block;
 color:red;
 }
</style>
		 
        
<!-- test -->
<div class="navigation-main">
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</div>
<form method="post"> 
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    LAYOUT 
  </button>
  
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><input type="submit" name="button1"
				value="full width"/> </li>
   
    <li><input type="submit" name="button2"
				value="Boxed"/></li>
    <li><input type="submit" name="button3"
				value="rtl"/> 
	</li>
  </ul>
</div>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><input type="submit" name="button4"
				value="left sidebar"/> </li>
   
    <li><input type="submit" name="button5"
				value="right sidebar"/></li>
    <li><input type="submit" name="button6"
				value="left right sidebar"/> 
	</li>
  </ul>
</div>
</form>
<?php
	
if(isset($_POST['button1'])) { 
  get_template_part( 'page');

} 
elseif(isset($_POST['button2'])) { 
  get_template_part( 'page', 'boxed' );
} 
elseif(isset($_POST['button3'])) { 
  get_template_part( 'page', 'rtl' );
}
elseif(isset($_POST['button4'])) { 
  get_template_part( 'page', 'leftside' );
}
elseif(isset($_POST['button5'])) { 
  get_template_part( 'page', 'rightside' );
}
elseif(isset($_POST['button6'])) { 
  get_template_part( 'page', 'leftrightside' );
}
?>
<?php get_header();

?>


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



