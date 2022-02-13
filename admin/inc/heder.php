<?php 
function siteUrl(){
    $bassfol=explode('/',$_SERVER['REQUEST_URI']);
    $protocal=explode('/',$_SERVER["SERVER_PROTOCOL"]);
    return strtolower($protocal['0'])."://".$_SERVER['SERVER_NAME']."/".$bassfol[1]."/".$bassfol[2]."/".$bassfol[3];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Template · Bootstrap v4.6</title>


    <!-- Bootstrap core CSS -->
<link href="<?=siteUrl();?>/admin/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?=siteUrl();?>/admin/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="<?=siteUrl();?>/singup.php">Sign Up</a>
    </li>
  </ul>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="<?=siteUrl();?>/logout.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="../index.php">
              <span data-feather="home"></span>
              Dashboard 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=siteUrl();?>/admin/banner/index.php">
              <span data-feather="file"></span>
             Home
            </a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="../about/index.php">
              <span data-feather="shopping-cart"></span>
            About
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="../sarvice/index.php">
              <span data-feather="shopping-cart"></span>
            Sarvice
            </a>
         </li>
        </ul>
      </div>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">