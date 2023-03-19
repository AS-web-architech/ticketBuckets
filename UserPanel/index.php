<?php
session_start();
include("./Pages/Config.php");
include("./Pages/scripts.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Style CSS -->
  <link rel="stylesheet" href="./Assets/css/index.css">
  <!-- CARDS -->
  <link rel="stylesheet" href="./Assets/css/card.css">
  <!-- MOVIES CARDS -->
  <link rel="stylesheet" href="./Assets/css/moviecard.css">
  <!-- SWIPER CDN -->
  <link rel="stylesheet" href="./Assets/css/swiper.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <!-- BOOTSTRAP CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <title>Document</title>
</head>

<body id="body-pd" class="body">
  <!-- ########################### Header Start ########################### -->

  <header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>

    <a class="ms-4 mx-auto" style="height:50px;width:200px;" href="index.php">
      <img src="./Assets/images/mylogo (2).png" class="img-fluid img-responsive mb-5" style="width:200px;height:50px;" alt="logo">
    </a>
    <div class="d-flex">
      <p class="pt-2 text-white"> <?php echo $_SESSION['full_name']; ?> </p>&nbsp; &nbsp;
      <div class="header_img ms-auto mt-1 mx-4">
        <img class="img-fluid" src="../AdminPanel/assets/images/uploads/<?php echo $_SESSION['picture']; ?> " style="width:40px;height:40px;border:1px solid black;border-radius:50px;" alt="logo">
      </div>

      <!-- <button class="btn btn-info"styyle="margin:0;" >logout</button>    -->
    </div>
  </header>

  <!-- ########################### Header End ########################### -->

  <!-- ####################### Navigation Start ######################### -->
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="l-navbar" id="nav-bar">
          <nav class="nav">
            <div>
              <div class="nav_logo">
                <!-- <div class="header_toggle" id="header"> <i class='bx bx-menu' id="header-toggle"></i> </div> -->

                <!-- <i class="fa-solid fa-ticket nav_logo-icon"></i> -->
                <!-- <i class="uil uil-ticket nav_logo-icon"></i> -->
                <ion-icon name="ticket-outline" class=" nav_logo-icon"></ion-icon>
                <span class="nav_logo-name">TicketBuckets</span>
              </div>
              <div class="nav_list">
                <a href="#" class="nav_link active activee">
                  <i class='bx bx-home nav_icon'></i>
                  <!-- <i class="uil uil-house-user nav_icon"></i> -->
                  <span class="nav_name">Home</span>
                </a>
                <a href="#" class="nav_link">
                  <!-- <i class='bx bxs-hot nav_icon'></i> -->
                  <i class="uil uil-fire nav_icon"></i>
                  <span class="nav_name">Trending</span>
                </a>
                <a href="#" class="nav_link">
                  <!-- <ion-icon name="alarm-outline" class="nav_icon"></ion-icon> -->
                  <i class='bx bx-alarm nav_icon'></i>
                  <span class="nav_name">Coming Soon</span>
                </a>
                <a href="#" class="nav_link">
                  <i class='bx bx-star nav_icon'></i>
                  <!-- <i class="uil uil-favorite nav_icon"></i> -->
                  <span class="nav_name">Top Rated</span>
                </a>
                <a href="#" class="nav_link">
                  <!-- <i class='bx bx-tv nav_icon'></i>  -->
                  <!-- <i class='bx bx-camera-movie nav_icon'></i> -->
                  <i class="uil uil-tv-retro nav_icon"></i>
                  <span class="nav_name">Movies</span>
                </a>
                <a href="#" class="nav_link">
                  <!-- <i class='bx bx-heart nav_icon'></i> -->
                  <i class="uil uil-heart-alt nav_icon"></i>
                  <span class="nav_name">Favourite</span>
                </a>
              </div>
            </div>
            <form action="./Pages/logout.php" method="post">
              <button type="submit" name="Signout" class="btn btn-transparent m-0 p-0">
                <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i>
                  <span class="nav_name">LogOut</span>
                </a>
              </button>
            </form>
            <!-- <a href="#" class="nav_link"> 
                <form action="./Pages/logout.php" method="POST">
                <button class="btn btn-transparent text-white m-0 p-0" type="submit" name="Signout">
                <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Logout</span>
                </button>
                </form> -->
            </a>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ################################## Navigation End #################################### -->

  <!--############################# Container Main start ###############################-->
  <?php
  include("./Pages/crasoule.php");
  ?>
   

  <!--########################### Container Main end ##########################-->

  <!-- ################################## Cards ############################### -->
 <!-- <div class="container" style="border:1px solid red;height:80vh;"> -->
 <?php
  include("./Pages/moviecard.php");
  ?>
 <!-- </div> -->


<!-- ######################################## Cards End ############################################ -->
  
  <script>
    function videoslider(links) {
      document.querySelector(".slider").src = links;
    }
    $(document).ready(function(){
  $(".close").class(function(){
    $("#exampleModal").empty();
  });
});
  </script>
  

  <!--BOOTSTRAP JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JQUERY CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Index JS -->
  <script src="./Assets/js/index.js"></script>
  <script src="./Assets/js/all.min.js"></script>
</body>

</html>