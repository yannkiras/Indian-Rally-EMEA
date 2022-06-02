<!doctype html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Navbar Template · Bootstrap v5.0</title>
    <link rel="icon" type="image/png" href="favicon.png">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbars/">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="bootstrap/css/navbar.css" rel="stylesheet">
  </head>
  <body>
    
<main>
    

  <nav class="navbar navbar-expand-lg navbar-light bg-white" aria-label="Rally navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
      <img src="img/rally_brand.png" alt="" height="60">
    </a>
	  
	  
	  </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!--
          <li class="nav-item">
            <a class="nav-link" href="results.php">RÉSULTATS 2021</a>
          </li>
          -->
          <li class="nav-item">
            <a class="nav-link" href="discover.php">DESCUBRE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="therally.php">COMO FUNCIONA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">INSCRÍBETE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="stages.php">LISTADO DE ETAPAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="imrg.php">LISTADO DE IMRG'S</a>
          </li>
		</ul>
		<!-- Nouvelle partie de menu à droite-->
		<ul class="navbar-nav ml-auto my-2 my-lg-0">
          <?php
		  if (isset($_SESSION["email"])) {
		  echo'<li class="nav-item align-middle"><a class="nav-link">Hola '.$_SESSION["prenom"].' '.$_SESSION["nom"].'</a>
          <a class="nav-link" href="changepass.php?user='.$_SESSION["email"].'">¿ CAMBIAR CONTRASEÑA ?</a>
          
          </li>';
		  echo'<li class="nav-item bg-dark p-3"><a class="nav-link text-light" href="logout.php">DESCONECTARSE</a></li>';
		  }
 
		  
		  ?>
		  
		  
		  <li class="nav-item bg-primary text-white p-3">
            <a class="nav-link text-white" href="myrally.php">
              <?php 
                if (isset($_SESSION["email"])) {
                    echo "MY RALLY";
                } else {
                    echo "ENTRAR";
                }
              ?>
            </a>
          </li>
          <?php
          
          if ($_SESSION["role"] === "admin" )
          {echo "
      		  <li class='nav-item bg-warning text-white p-3'>
            <a class='nav-link text-dark' href='admin.php'>ADMIN</a>
          </li>
      
      
      
      ";
          
          
          
          }
          
          
          
          ?>
        </ul>
		<!-- Fin de partie à droite-->
      </div>
    </div>
  </nav>



</main>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
