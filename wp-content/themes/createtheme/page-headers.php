
<?php get_header();?>


  <!-- example 2 - using auto margins -->
<!-- <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav me-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Left</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="//codeply.com">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
        </div>
        <div class="mx-auto order-0">
            <a class="navbar-brand mx-auto" href="#">Logo </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Right</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->
<!-- 
example 3 - Navbar with brand left, links on center and right that collapse into the vert mobile menu
-->
<!--  -->
<!-- example 5 left and center only with empty space right -->

<!-- example 6 - center on mobile -->

<div class="text-center">
    <span class="badge badge-dark badge-pill"> this is viewport center </span>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="myModalLabel">Modal header</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <p>One fine body…</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-bs-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
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

  
  <div class="jumbotron text-center">
  <h5> Logo in left</h5>
  
 </div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      
      <!-- container for responsiveness -->
      <div class="container-fluid">

        <!-- first item: brand name -->
        <a class="navbar-brand" href="#">Logo</a>

        <!-- this is the button when it collapses due to small screen size (data-bs-target must match the ID of the div below)-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- this div holds everything who is going to collapse inside the button (be careful with the ID. It must match with the button target) -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- this list contains the "menu options (items)" such as download, contact, pricing, etc. -->
          
    <ul id="my-ul" class="ms-auto navbar-nav">
            
            <!-- this is an item -->
            <li class="nav-item">
              <a class="nav-link" href="#">Download</a>
            </li>
            <!-- this is another item -->
            <li class="nav-item">
              <a class="nav-link" href="#">Link1</a>
            </li> 
            <!-- this is another item -->
            <li class="nav-item">
              <a class="nav-link" href="#">Link2</a>
            </li>  
            <!-- this is another item -->
            <li class="nav-item">
              <a class="nav-link" href="#">Link3</a>
            </li>           
          
          </ul>
        
        </div>
      
      </div>

    </nav>

<div class="jumbotron text-center">
  <h5> Logo in middle</h5>
  
 </div>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid ">
    <div id="navbar6" class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
      <ul class="navbar-nav me-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Left</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="//codeply.com">Codeply</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
    </div>
    <div class="mx-auto order-0">
      <a class="navbar-brand mx-auto" href="#">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar6" aria-controls="navbar6" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

    </div>
    <div id="navbar6" class="navbar-collapse collapse w-100 order-3 dual-collapse2">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Right</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
 
<div class="jumbotron text-center">
  <h5> Logo in right</h5>
  
 </div>
   <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="false">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        
      </div>
      <a class="navbar-brand col-1 "style="position: absolute; right: 0px; top: 0px;" href="#">
                    Logo
                </a>
    </div>
  </nav>

  

<div class="jumbotron text-center">
  <h5> Logo in middle</h5>
  
</div>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark flex-column">
  <a class="navbar-brand pr-5" href="#">Logo</a>
  
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
  <div class="collapse navbar-collapse flex-row w-100" id="navbarNavAltMarkup">
    <div class="navbar-nav w-100 justify-content-around">
       <div class="nav-item nav-link mx-auto" href="#">
        <ul class="navbar-nav  ml-5">
          <li class="nav-item">
            <a class="nav-link nav-style active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-style" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-style" href="#" tabindex="-1" aria-disabled="false">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link nav-style dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
      </ul>
      </div>
      <div class="nav-item nav-link mx-auto" href="#">
        <ul class="navbar-nav ">
            <li class="nav-item">
            <a class="nav-link nav-style active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-style" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-style " href="#" tabindex="-1" aria-disabled="false">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link nav-style dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
      </ul>
    </div>
      <div class="nav-item nav-link mx-auto" href="#">
        <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="#">Link1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Right</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
      </div> 
       
    </div>
  </div>
</nav>


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


<?php get_footer(); ?>
