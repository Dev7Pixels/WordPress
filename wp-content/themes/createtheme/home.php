
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
<!-- test-->

<form method="post"> 
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dev7Pixels <span class="badge bg-success"></span></a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
      <div class="hamburger-toggle">
        <div class="hamburger">
          <span class="navbar-toggler-icon"></span>
        </div>
      </div>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
       
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">  layout pages  </a>
        <ul class="dropdown-menu">
        <li><input type="submit" name="button1"
				value="full width"/> </li>
   
    <li><input type="submit" name="button2"
				value="Boxed"/></li>
    <li><input type="submit" name="button3"
				value="RTL"/> 
	</li>
  <li><input type="submit" name="button7"
				value="LTR"/> 
	</li>
        </ul>

        </li>
        
        <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">  Features  </a>
        <ul class="dropdown-menu">
        <li><input type="submit" name="button8"
				value="headers"/></li>
        <li><input type="submit" name="button9"
				value="footers"/></li>
        <li><a class="dropdown-item" href=""> Layout options &raquo; </a>
           <ul class="submenu dropdown-menu">
            <li><input type="submit" name="button4"
				value="left sidebar"/></li>
           <li><input type="submit" name="button5"
				value="right sidebar"/></li>
           
            
            <li><input type="submit" name="button6"
				value="left right sidebar"/> </li>
            
         </ul>
        </li>
        
        </ul>
    </li>
       
      </ul>
      
    </div>
  </div>
</nav>
</form>


<!-- test-->
<!-- 
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
  layout pages
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
</form> -->
<?php get_header();

?>
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
elseif(isset($_POST['button7'])) { 
  get_template_part( 'page' );
}
elseif(isset($_POST['button8'])) { 
  get_template_part( 'page', 'headers' );
}
elseif(isset($_POST['button9'])) { 
  get_template_part( 'page', 'footers' );
}
?>




    
  </div>
</div>
  
<?php get_footer(); ?>



