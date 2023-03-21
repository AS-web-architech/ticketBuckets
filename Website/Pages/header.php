<?php
include("configg.php");
include("scripts.php");


session_start();
$user_check=$_SESSION['login_user'];

$query=mysqli_query($conn,"SELECT full_name FROM registration WHERE full_name='$user_check' ");
$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
$login_session=$row['full_name'];
if(!isset($login_session))
{
 header("Location: ../UserLogin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="../Assets/css/mode.css">
    <link rel="stylesheet" href="../Assets/css/header.css">
    <title></title>
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

          <li class="nav-item active">
            <a class="nav-link" href="../Pages/header.php">HOME
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
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
<script src="../Assets/js/mode.js"></script>
</body>
</html>