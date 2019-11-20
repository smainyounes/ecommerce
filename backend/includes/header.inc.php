<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>
    <?php echo $page; ?>
  </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body class="<?php if($page === 'Home') echo('bg-secondary'); else echo('bg-light'); ?> d-flex flex-column">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">E-Commerce</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if($page === 'Home') echo('active')?>">
            <a class="nav-link" href="<?php if($page === 'Home') echo('#'); else echo('index.php') ?>">Home</a>
          </li>
          <li class="nav-item dropdown ">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="index.php?categ=1">Tout</a>
                    <a class="dropdown-item" href="index.php?categ=2">Meubles</a>
                    <a class="dropdown-item" href="index.php?categ=3">Electromenager</a>
                  </div>
          </li>
          <li class="nav-item <?php if($page === 'Contact') echo('active')?>">
            <a class="nav-link" href="<?php if($page === 'Contact') echo('#'); else echo('contact.php')?>">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>