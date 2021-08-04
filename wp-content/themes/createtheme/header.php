<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hello, world!</title>
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
   <script src="https://kit.fontawesome.com/b97cbdc674.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/custom.css">
    
    


<style type="text/css">

  @media (max-width: 992px) {
  #navbarNavAltMarkup .nav-style
   {
  padding-left: 45px!important;
 }

 }

 /* ============ desktop view ============ */
@media all and (min-width: 992px) {

  .dropdown-menu li{
    position: relative;
  }
  .dropdown-menu .submenu{ 
    display: none;
    position: absolute;
    left:100%; top:-7px;
  }
  .dropdown-menu .submenu-left{ 
    right:100%; left:auto;
  }

  .dropdown-menu > li:hover{ background-color: #f1f1f1 }
  .dropdown-menu > li:hover > .submenu{
    display: block;
  }
} 
/* ============ desktop view .end// ============ */


</style>


<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function(){
        

      /////// Prevent closing from click inside dropdown
    document.querySelectorAll('.dropdown-menu').forEach(function(element){
      element.addEventListener('click', function (e) {
        e.stopPropagation();
      });
    })



    // make it as accordion for smaller screens
    if (window.innerWidth < 992) {

      // close all inner dropdowns when parent is closed
      document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
        everydropdown.addEventListener('hidden.bs.dropdown', function () {
          // after dropdown is hidden, then find all submenus
            this.querySelectorAll('.submenu').forEach(function(everysubmenu){
              // hide every submenu as well
              everysubmenu.style.display = 'none';
            });
        })
      });
      
      document.querySelectorAll('.dropdown-menu a').forEach(function(element){
        element.addEventListener('click', function (e) {
    
            let nextEl = this.nextElementSibling;
            if(nextEl && nextEl.classList.contains('submenu')) {  
              // prevent opening link if link needs to open dropdown
              e.preventDefault();
              console.log(nextEl);
              if(nextEl.style.display == 'block'){
                nextEl.style.display = 'none';
              } else {
                nextEl.style.display = 'block';
              }

            }
        });
      })
    }
    // end if innerWidth

  }); 

</script>


  <?php
wp_head();



?>
</head>

<body>
 
<header>

<!-- 
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
       
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        
        <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">  Features  </a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="<?php bloginfo('template_url'); ?>test/wp-content/themes/headers/"> Headers </a></li>
        <li><a class="dropdown-item" href="<?php bloginfo('template_url'); ?>test/wp-content/themes/footers/">Footers</a></li>
        <li><a class="dropdown-item" href=""> Layouts &raquo; </a>
           <ul class="submenu dropdown-menu">
            <li><a class="dropdown-item" href="<?php bloginfo('template_url'); ?>test/wp-content/themes/left-side/">Left Sidebar</a></li>
           <li><a class="dropdown-item" href="<?php bloginfo('template_url'); ?>test/wp-content/themes/right-side/">Right Sidebar</a></li>
           <li><a class="dropdown-item" href="<?php bloginfo('template_url'); ?>test/wp-content/themes/full-width/">Full Width</a></li>
            
            <li><a class="dropdown-item" href="<?php bloginfo('template_url'); ?>test/wp-content/themes/left-right-side/">Right & Left Sidebar</a></li>
            
         </ul>
        </li>
        
        </ul>
    </li>
       
      </ul>
      
    </div>
  </div>
</nav> -->



</header> 
<div class="jumbotron text-center mt-5">
  <h1><?php bloginfo('name') ?></h1>
  <p><?php bloginfo('description') ?></p> 
</div>

<div class="jumbotron text-center">
  <h5> Logo in middle</h5>
  
 </div>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <!-- One of the primary actions on mobile is to call a business - This displays a phone button on mobile only -->
  <div class="navbar-toggler-right">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
  </div>




  <div class="collapse navbar-collapse flex-column " id="navbar2">
    <a class="navbar-brand  " href="#">Logo</a>
    
   
    <ul class="navbar-nav justify-content-center w-100 bg-dark px-3">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Dropdown Link</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Dropdown Link</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Dropdown Link</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
    </ul>


  </div>

</nav>
