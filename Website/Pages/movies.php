<?php
include('configg.php');
include('scripts.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- header link -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="../Assets/css/mode.css">
    <link rel="stylesheet" href="../Assets/css/header.css">
  <!-- header link end -->
  <title>Movies Collection</title>
  <link rel="stylesheet" href="../Assets/css/movies.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Navigation -->
<div class="fixed-top">
  <header class="topbar">
      <div class="container">
        <div class="row">
          <!-- social icon-->
          <div class="col-sm-12">
            <ul class="social-network">
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>

        </div>
      </div>
  </header>
  <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear mb-5">
    <div class="container">
      <a class="navbar-brand" rel="nofollow" target="_blank" href="#" style="text-transform: uppercase;">
      <img src="../Assets/images/mylogo (2).png" alt="" width="100%" height="70px" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ml-auto">

          <li class="nav-item ">
            <a class="nav-link" href="../Pages/header.php">HOME
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="../Pages/movies.php">MOVIES</a>
          </li>

         <li class="nav-item">
            <a class="nav-link" href="#">THEATER</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">CONTACT</a>
          </li>

          <li class="nav-item dropdown ">
            <a class="nav-link  dropdown-togler" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ACCOUNT
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="../UserLogin.php">Log In</a>
                <a class="dropdown-item" href="../UserRegister.php">Register</a>
            </div>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li> -->
        </ul>&nbsp;&nbsp;&nbsp;
        <div class="justify-content-center align-items-center">
            <div class="one-quarter" id="switch">
              <input type="checkbox" class="checkbox" id="chk" />
              <label class="label" for="chk">
                 <i class="fas fa-sun"></i>
                  <i class="fas fa-moon"></i>
                  <div class="ball"></div>
              </label>
            </div>
        </div>
      </div>
       
    </div>
    
  </nav>
</div>   
<div class="container-fluid moviecont">
<div class="container  mt-5">
  <h2 class="text-center mt-5"><b>MOVIES COLLECTION</b><i class="fa-solid fa-projector fa-beat"></i></h2>
  <div class="row justify-content-center">
    <div class="col-md-4 col-md-4">
        <div class="card movie_card">
          <img src="../Assets/images/moviecard/BossBaby.PNG" class="card-img-top" alt="...">
          <div class="card-body">
            <i class="fas fa-play play_button" data-toggle="tooltip" data-placement="bottom" title="Play Trailer">
            </i>
            <h5 class="card-title text-dark">THE BOSS BABY</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info float-right"><i class="fas fa-star"></i> 9 / 10</span>
          </div>
        </div>
    </div>
    <div class="col-md-4 col-md-4">
        <div class="card movie_card">
          <img src="../Assets/images/moviecard/Free_Guy.PNG" class="card-img-top" alt="...">
          <div class="card-body">
            <i class="fas fa-play play_button" data-toggle="tooltip" data-placement="bottom" title="Play Trailer">
            </i>
            <h5 class="card-title text-dark">FREE GUY</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info float-right"><i class="fas fa-star"></i> 9 / 10</span>
          </div>
        </div>
    </div>

    <div class="col-md-4 col-md-4">
        <div class="card movie_card">
          <img src="../Assets/images/moviecard/EnolaHolmes.PNG" class="card-img-top" alt="...">
          <div class="card-body">
            <i class="fas fa-play play_button" data-toggle="tooltip" data-placement="bottom" title="Play Trailer">
            </i>
            <h5 class="card-title text-dark">ENOLA HOLMES</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info float-right"><i class="fas fa-star"></i> 9 / 10</span>
          </div>
        </div>
    </div>
</div>   

<div class="row justify-content-center">

    <div class="col-md-4 col-md-4">
        <div class="card movie_card">
          <img src="../Assets/images/moviecard/kingsman.PNG" class="card-img-top" alt="...">
          <div class="card-body">
            <i class="fas fa-play play_button" data-toggle="tooltip" data-placement="bottom" title="Play Trailer">
            </i>
            <h5 class="card-title text-dark">KINGSMAN: THE SECRET SERVICE</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info float-right"><i class="fas fa-star"></i> 9 / 10</span>
          </div>
        </div>
    </div>
    <div class="col-md-4 col-md-4">
        <div class="card movie_card">
          <img src="../Assets/images/moviecard/Mario Bros.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <i class="fas fa-play play_button" data-toggle="tooltip" data-placement="bottom" title="Play Trailer">
            </i>
            <h5 class="card-title text-dark">THE SUPER MARIO BROS</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info float-right"><i class="fas fa-star"></i> 9 / 10</span>
          </div>
        </div>
    </div>
    <div class="col-md-4 col-md-4">
        <div class="card movie_card">
          <img src="../Assets/images/moviecard/ResidentEvil.PNG" class="card-img-top" alt="...">
          <div class="card-body">
            <i class="fas fa-play play_button" data-toggle="tooltip" data-placement="bottom" title="Play Trailer">
            </i>
            <h5 class="card-title text-dark">Spider-Man: Into the Spider-Verse</h5>
            <span class="movie_info">2019</span>
            <span class="movie_info float-right"><i class="fas fa-star"></i> 9 / 10</span>
          </div>
        </div>
    </div>
  </div>

</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
  $(function() {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
<script src="../Assets/js/mode.js"></script>
</body>
</html>