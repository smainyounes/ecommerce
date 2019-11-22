<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>
  	
  	<?php 

  	switch ($page) {
  		case 'prodlist':
  			echo "Liste Produits";
  			break;

  		case 'addprod':
  			echo "Ajouter Produit";
  			break;

  		case 'category':
  			echo "Liste Categories";
  			break;

  		case 'message':
  			echo "Messagerie";
  			break;

  		case 'settings':
  			echo "Parametres";
  			break;
  		
  		default:
  			echo "Admin panel";
  			break;
  	}

  	 ?>

  </title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/shop-homepage.css" rel="stylesheet">
</head>

<body class="bg-light d-flex flex-column">
	
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	  <div class="container">
	    <a class="navbar-brand" href="#">Admin Panel</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarResponsive">
	      <ul class="navbar-nav ml-auto">
	        <li class="nav-item">
	          <a class="nav-link <?php if($page==='prodlist') echo('active') ?>" href="prodlist.php">List Produits</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link <?php if($page==='category') echo('active') ?>" href="category.php">Categories</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link <?php if($page==='message') echo('active') ?>" href="messages.php">Messagerie</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link <?php if($page==='settings') echo('active') ?>" href="settings.php">Parametres</a>
	        </li>
	        <li class="nav-item">
	          <a class="btn btn-secondary" href="../index.php">Deconnecter</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>