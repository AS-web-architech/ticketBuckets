<?php
include("./Pages/sidenav.php");
include("./Pages/scripts.php");
include("./Pages/Config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< Updated upstream
    <link rel="icon" type="image/x-icon" href="./assets/images/logo (3).png">
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="./assets/css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- style_css -->
    <link rel="stylesheet" href="./assets/css/main.css">
    <!-- Font_Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Admin | Tickets Bucket</title>
=======
    <title>ticketBuckets.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/instyle.css">
>>>>>>> Stashed changes
</head>
<body id="body-pd">
   <!-- sidenavbar starts -->

    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="./assets/images/  <?php echo $_SESSION['picture']; ?>"    alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                 <a href="#" class="nav_logo"> <img src="./assets/images/adminlogo.svg" alt="">  <span class="nav_logo-name">Admin &nbsp;Panel </span> </a>
                <div class="nav_list"> 
                    <a href="./index.php" class="nav_link active "> <i class="fa-solid fa-gauge"></i>
                        <span class="nav_name">Dashboard</span>
                     </a> 
                     <a href="./Pages/Users.php" class="nav_link "> <i class='bx bx-user nav_icon'></i> 
                    <span class="nav_name ">Users</span> </a>
                     <a href="./Pages/booking.php" class="nav_link " > <i class="fa-solid fa-ticket"></i> <span class="nav_name">bookings</span> </a> 
                     <a href="./Pages/reviews.php" class="nav_link"> <i class="fa-solid fa-star"></i><span class="nav_name">reviews</span> </a> 
                     <a href="./Pages/Movies.php" class="nav_link"> <i class="fa-solid fa-video"></i> <span class="nav_name">movies</span> </a> 
                     <a href="./Pages/Theaters.php" class="nav_link"><i class="fa-solid fa-masks-theater"></i> <span class="nav_name">theatre</span> </a>
                     <!-- <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name"></span> </a> -->
 
                    </div>
            </div> 
            <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
<<<<<<< Updated upstream
    

    <!-- ############################### Main ########################### -->
    <div class="main">
        <div class="row">
            <div class="col-sm-12">
            <div class="topbar">
            <div class="toggle">
               <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="search">
                <label>
                    <input type="text" placeholder="Search Here">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
            
            <div class="AD_Info">
               <div class="admin" style="float:right;margin-top:7px;">
                    <img src="./assets/images/<?php echo $_SESSION['picture']; ?>" alt="">
                </div>
               <div class="AD_Name" style="margin-right:56px;margin-top:5px;">
                   <h6 class="text-white"><?php echo $_SESSION['full_name']; ?></h6>
                </div>
                <div class="AD_Role" style="margin-right:56px;">
                    <h6 class="text-sm text-center" style="color:var(--dark_red);font-size:13px;">( <?php echo $_SESSION['role']; ?> )</h6>
                </div>
            </div>

        </div><br>
            </div>
        </div>
       
        <!-- ############################ cards ######################### -->
        <div class="container-fluid">
=======
<!-- sidenavbar ends -->
    <!--Container Main start-->
    <div class="height-100 bg-light main-container">
       <h1 class="text-center main-heading">welcome  <?php echo $_SESSION['email'];?> </h1>
        <div class="container">
>>>>>>> Stashed changes
            <div class="row">
          <!-- dashboard card one    -->
      <div class="col-md-4  d-flex cards">
   <div class="card flex" data-sr-id="10" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
      <div class="card-body c-body1">
         <div class="d-flex align-items-center text-hover-success">
            <div class="avatar w-56 m-2 no-shadow gd-success">
               <img src="./assets/images/Film_reel.svg.png" style="height:40px;width:40px;" alt="">
            </div>
            <div class="px-4 flex ">
               <h4>movies</h4>
               <div class="text-success mt-2">0</div>
            </div>
            <a href="#" class="text-muted" data-abc="true">
               
            </a>
         </div>
      </div>
   </div>
</div>  
        
    

<<<<<<< Updated upstream
  <!-- javascript cdn  -->
  <script src="../assets/css/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
  <!-- main_js -->
  <script src="./assets/js/main.js"></script>
  <!-- ionicons -->
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
=======

          <!-- dashboard card two   -->
    
      <div class="col-md-4 d-flex cards">
   <div class="card flex" data-sr-id="10" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
      <div class="card-body c-body2">
         <div class="d-flex align-items-center text-hover-success ">
            <div class="avatar w-56 m-2 no-shadow gd-success">
            <img src="./assets/images/tvshow.svg" alt="">
               
            </div>
            <div class="px-4 flex">
               <h4>shows</h4>
               <div class="text-success mt-2">0</div>
            </div>
            <a href="#" class="text-muted" data-abc="true">
               
            </a>
         </div>
      </div>
   </div>
</div>  
                  <!-- dashboard card three    -->
               <div class="col-md-4 d-flex cards">
                  <div class="card flex" data-sr-id="10" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                     <div class="card-body c-body3">
                        <div class="d-flex align-items-center text-hover-success">
                           <div class="avatar w-56 m-2 no-shadow gd-success">
                           <img src="./assets/images/users.svg" alt="">
                           </div>
                           <div class="px-4 flex">
                              <h4>users</h4>
                              <div class="text-success mt-2">0</div>
                           </div>
                           <a href="#" class="text-muted" data-abc="true">
                              
                           </a>
                        </div>
                     </div>
                  </div >
               </div>   
    

            </div>
        </div>
    </div>
    <!--Container Main end-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./assets/js/index2.js"></script>
>>>>>>> Stashed changes
</body>
</html>