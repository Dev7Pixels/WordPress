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
    
    
    
    
  <?php
wp_head();



?>
</head>

<body>
 
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      
      <!-- container for responsiveness -->
      <div class="container-fluid">

        <!-- first item: brand name -->
        <a class="navbar-brand" href="#">M.....yBrand</a>

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
              <a class="nav-link" href="#">About</a>
            </li>          
          
          </ul>
        
        </div>
      
      </div>

    </nav>

    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            
            <!-- CONTAINER O CONTAINER FLUID -->
            <div class="container">
               
                <!-- LOGO - PUEDE SER IMAGEN O TEXTO -->
                <a class="navbar-brand col-1" href="#">
                    Logo
                </a>
                
                <!-- BOTÓN MENÚ DE HAMBURGUESA -->
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#menu02" >
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <!-- CONTENEDOR LISTA DE VÍNCULOS -->
                <div class="navbar-collapse collapse" id="menu02">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center"> <!-- me-auto=IZQUIERDA / ms-auto=DERECHA -->
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 2</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="submenu1" data-bs-toggle="dropdown">Contact</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        

<div class="jumbotron text-center">
  <h1><?php bloginfo('name') ?></h1>
  <p><?php bloginfo('description') ?></p> 
</div>

</header> 
