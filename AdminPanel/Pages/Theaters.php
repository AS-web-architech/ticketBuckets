<?php
session_start();
include("scripts.php");
include("sidenav.php");
include("Config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/images/logo (3).png">
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="../assets/css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- style_css -->
    <link rel="stylesheet" href="../assets/css/instyle.css">
    <!-- Font_Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Admin | Tickets Bucket</title>
</head>
  
<body id="body-pd">
    <!-- sidenavbar starts -->

    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="d-flex" >
                <p class="pt-2"> <?php echo $_SESSION['full_name'];?> </p>&nbsp;&nbsp;&nbsp;
                <div class="header_img ms-auto mx-4"> <img class="img-fluid" src="../assets/images/uploads/<?php echo $_SESSION['picture'] ;?> "  
                style="width:40px;height:40px;border:1px solid black;border-radius:50px;"  alt="logo"> </div>
               <!-- <button class="btn btn-info"styyle="margin:0;" >logout</button>    -->
             </div>
      </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                 <a href="#" class="nav_logo"> <img src="../assets/images/adminlogo.svg" alt="">  <span class="nav_logo-name">Admin &nbsp;Panel </span> </a>
                <div class="nav_list"> 
                    <a href="../index.php" class="nav_link  "> <i class="fa-solid fa-gauge"></i>
                        <span class="nav_name">Dashboard</span>
                     </a> 
                     <a href="../Pages/Users.php" class="nav_link "> <i class='bx bx-user nav_icon'></i> 
                    <span class="nav_name ">Users</span> </a>
                    <a href="../Pages/booking.php" class="nav_link  " > <i class="fa-solid fa-ticket"></i> <span class="nav_name">bookings</span> </a> 
                    <a href="../Pages/reviews.php" class="nav_link"> <i class="fa-solid fa-star"></i><span class="nav_name">reviews</span> </a> 
                    <a href="../Pages/Movies.php" class="nav_link"> <i class="fa-solid fa-video"></i> <span class="nav_name">movies</span> </a> 
                    <a href="../Pages/Theaters.php" class="nav_link active"><i class="fa-solid fa-masks-theater"></i> <span class="nav_name">theatre</span> </a>
                     <!-- <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name"></span> </a> -->
 
                    </div>
              </div> 

                       <!-- signout button action   -->
                       <a href="#" class="nav_link"> 
                <form action="logout.php" method="POST">
                <button class="btn btn-transparent m-0 p-0" type="submit" name="Signout">
                    <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span>
                 </a>
                </button>
                </form>
                <!-- signout button ends   -->
          </nav>
    </div>
    <!-- sidenavbar ends -->
    <div class="height-100 bg-light main-container ">
<div class="user-l d-flex ">
<a href="#" class="user-head"> <i class="fa-solid fa-users"></i> <span class="nav_name">Theater Detail</span> </a>
<!-- action buttons -->
<div class="ms-auto">
            <form action="delete.php" method="POST"  >    
              <!-- <form class="d-flex ms-auto">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
            <button class="btn btn-success ">
            <i class="fa-solid fa-circle-plus"></i>  new users</button>
            <button class="btn btn-warning ">
            <i class="fa-solid fa-pen-to-square"></i> modify</button>
            <button type="submit" name="del_movie_data" class="btn btn-danger "><i class="fa-solid fa-trash"></i> </button>
            </form>    
       </div>
       <!-- action buttons --> 
</div><br>
    <div class="height-100 bg-light main-container">
    <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover align-middle text-center">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Theatre Name</th>
                          <th>country</th>
                          <th colspan="3" class="text-center">Halls</th>
                          <th>capacity</th>
                          <th>Location</th>
                          <!-- <th>Action</th> -->
                        </tr>
                      </thead>
                      <tbody class="table table-dark table-striped">
                      <?php
          
          //   include("../AdminPanel/Pages/Config.php");
            
            $data = mysqli_query($conn,"SELECT * from theatre");
  
            while ($theater_data = mysqli_fetch_array($data)){
              ?>
            <tr>
              <th><?php echo $theater_data["theater_id"] ?></th>
              <td><?php echo $theater_data["theater-title"] ?></td>
              <td><?php echo $theater_data["country"] ?></td>
              <td><?php echo $theater_data["Hall-1"] ?></td>
              <td><?php echo $theater_data["Hall-2"] ?></td>
              <td><?php echo $theater_data["Hall-3"] ?></td>
              <td><?php echo $theater_data["capacity"] ?></td>
              <td><?php echo $theater_data["Location"] ?></td>
              <!-- <td><button class="btn btn-primary btn-sm"><a href="update.php?Tid=<?php echo  $theater_data["theater_id"] ?>"
               class="text-white text-decoration-none"> Update</a></button>&nbsp;<br>
               <button class="btn btn-danger btn-sm"><a href="delete.php?Tid=<?php echo  $theater_data["theater_id"] ?>" 
               class="text-white text-decoration-none"> Delete</a></button></td> -->
            </tr>
        <?php  } ?>
        
        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
              </div>
            </div>
     </div>   