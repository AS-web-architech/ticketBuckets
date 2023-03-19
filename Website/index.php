<?php
include('../Website/Pages/scripts.php')



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TicketBuckets.com</title>
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">

   <link rel="stylesheet" href="./Assets/css/wstyle.css">  
</head>
<body>

<header class="header-navigation d-none d-lg-block" style="background-color:#333333;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html">
                        <img src="./Assets/images/logo1 (1).jpeg" alt="" style="height:80px;width:180px;"> <!-- Replace Logo Here -->
                    </a>
                </div>
                <!-- End Logo -->
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9">
                <div class="top-ad-banner float-right">
                    <a href="#">
                        <img src="./Assets/images/ad-pro.png" class="img-fluid" alt="banner-ads">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="main-navbar clearfix bg-dark ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg site-main-nav navigation">
                      <a class="navbar-brand d-lg-none" href="index.html">
                        <img src="./Assets/images/logo1__2_-removebg-preview (1).png" alt=""  style="height:80px;width:180px;"> 
                     </a>
  
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                  </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                           
                            <li class="nav-item ">
                                <a class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Home
                                </a>
                                <!-- <div class="dropdown-menu" >
                                  <a class="dropdown-item" href="index.html" >Home 1</a>
                                  <a class="dropdown-item" href="index-2.html">Home 2</a>
                                </div> -->
                            </li>
                           
                             <li class="nav-item ">
                                <a class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  movies
                                </a>
                                <!-- <div class="dropdown-menu" >
                                <a class="dropdown-item" href="post-left-sidebar.html"></a>
                                  <a class="dropdown-item" href="post-full-width.html">Post Full Width</a>
                                  <a class="dropdown-item" href="single-post.html">Single Post</a>
                                  <a class="dropdown-item" href="post-category-1.html">Category 1</a>
                                  <a class="dropdown-item" href="post-category-2.html">Category 2</a>
                                  <a class="dropdown-item" href="author.html">Author</a>
                                </div> -->
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link  dropdown-togler" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Account
                                </a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="../../login.php">Log In</a>
                                  <a class="dropdown-item" href="signup.html">Register</a>
                                </div>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Theatre
                                </a>
                                <!-- <div class="dropdown-menu">
                                  <a class="dropdown-item" href="about.html">About</a>
                                  <a class="dropdown-item" href="terms.html">Terms</a>
                                  <a class="dropdown-item" href="privacy.html">Privacy Policy</a>
                                  <a class="dropdown-item" href="job.html">Career</a>
                                </div> -->
                            </li>
                             <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  
                                </a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="404.html">404 Page</a>
                                  <a class="dropdown-item" href="search.html">Search Page</a>
                                </div>
                            </li> -->

                             <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>

                        </ul>
                        <div class="nav-search ml-auto d-none d-lg-block">
                            <span id="search">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </nav>
                
            </div>
        </div>
    </div>
    <form class="site-search" method="get">
        <input type="text" id="searchInput" name="site_search" placeholder="Enter Keyword Here..." autofocus="">
        <div class="search-close">
            <span class="close-search">
                <i class="fa fa-times"></i>
            </span>
        </div>
    </form>
</div>














</body>
</html>