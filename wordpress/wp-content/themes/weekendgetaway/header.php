<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<div id="wrapper">
<nav class="navbar fixed-top navbar-expand-lg">
  <a class="navbar-brand" href="#">Your Weekend Getaway</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">
    <img src="<?php echo get_template_directory_uri();?>/dist/img/menu-toggle.svg">
    </span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php 
            wp_nav_menu([
                'theme_location'  => 'main',
                'container'       => 'ul',
                'menu_class'      => 'navbar-nav mr-auto',
            ]);
        ?>
<!--    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">House Features <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Things To Do
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Alantic City</a>
          <a class="dropdown-item" href="#">Asbury Park</a>
          <a class="dropdown-item" href="#">Ocean City</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Rentals</a>
      </li>
    </ul> -->
      
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn btn-dark my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>