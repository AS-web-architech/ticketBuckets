<?php
  include('./Pages/configg.php');
  include("./Pages/scripts.php");
  session_start();
  $user_check=$_SESSION['login_user'];
 
  $query=mysqli_query($conn,"SELECT full_name FROM registration WHERE full_name='$user_check' ");
  $row=mysqli_fetch_array($query,MYSQLI_ASSOC);
  $login_session=$row['full_name'];
  if(!isset($login_session))
  {
   header("Location: UserLogin.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TicketBuckets.com</title>
        <link rel="stylesheet" href="./Assets/css/card.css">  
<!-- owlcarousel cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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


<div class="main-navbar clearfix bg-dark mybg position-relative ">
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
                                    <a class="dropdown-item" href="./UserLogin.php">Log In</a>
                                    <a class="dropdown-item" href="./UserRegister.php">Register</a>
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
    
  
        <!-- Hero Section Begin -->
<section>
        <!-- Carousel Start -->
        <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="./Assets/images/moviebg/s-l500.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <!-- <p class="fs-4 text-white animated slideInRight">Welcome to
                                        <strong>GrowMark</strong>
                                    </p>
                                    <h1 class="display-1 text-white mb-4 animated slideInRight">Unlock Your Business
                                        Growth</h1>
                                    <a href=""
                                        class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight">Explore
                                        More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="./Assets/images/moviebg/fantasticbeast.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <!-- <p class="fs-4 text-white animated slideInLeft">Welcome to <strong>GrowMark</strong>
                                    </p>
                                    <h1 class="display-1 text-white mb-5 animated slideInLeft">Ready to Grow Your
                                        Business</h1>
                                    <a href=""
                                        class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Explore
                                        More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="./Assets/images/moviebg/maxresdefault.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <!-- <p class="fs-4 text-white animated slideInLeft">Welcome to <strong>GrowMark</strong>
                                    </p>
                                    <h1 class="display-1 text-white mb-5 animated slideInLeft">Ready to Grow Your
                                        Business</h1>
                                    <a href=""
                                        class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Explore
                                        More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
</section>
    <!-- Hero Section End -->
    <br><br><br>
<section>
    <?php
    include('index.php');
    ?>
</section>
<section>
    <?php
    include('MovieCard.php')?>
</section>

  <!-- Hero Section Begin -->
<!-- <section class="hero">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-indicators">
<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner " style="border:1px soid red;">
<div class="carousel-item active "style="border:1px soid red;>
<img src="..." class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block bg-dark">
  <h5>First slide label</h5>
  <p>Some representative placeholder content for the first slide.</p>
</div>
</div>
<div class="carousel-item">
<img src="..." class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block bg-dark">
  <h5>Second slide label</h5>
  <p>Some representative placeholder content for the second slide.</p>
</div>
</div>
<div class="carousel-item bg-dark">
<img src="..." class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block bg-dark">
  <h5>Third slide label</h5>
  <p>Some representative placeholder content for the third slide.</p>
</div>
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>
</section> -->
<!-- Hero Section End -->




<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script></body>
</html>