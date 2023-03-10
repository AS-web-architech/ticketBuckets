<?php
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
    <title>Document</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="../assets/css/instyle.css">
</head>
  
<body id="body-pd">
  <!-- sidenavbar starts -->

    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                 <a href="#" class="nav_logo"> <img src="../assets/images/adminlogo.svg" alt="">  <span class="nav_logo-name">Admin &nbsp;Panel </span> </a>
                <div class="nav_list"> 
                    <a href="../index.php" class="nav_link  "> <i class="fa-solid fa-gauge"></i>
                        <span class="nav_name">Dashboard</span>
                     </a> 
                     <a href="../Pages/Users.php" class="nav_link active"> <i class='bx bx-user nav_icon'></i> 
                    <span class="nav_name ">Users</span> </a>
                     <a href="../Pages/booking.php" class="nav_link " > <i class="fa-solid fa-ticket"></i> <span class="nav_name">bookings</span> </a> 
                     <a href="../Pages/reviews.php" class="nav_link"> <i class="fa-solid fa-star"></i><span class="nav_name">reviews</span> </a> 
                     <a href="../Pages/Movies.php" class="nav_link"> <i class="fa-solid fa-video"></i> <span class="nav_name">movies</span> </a> 
                     <a href="../Pages/Theaters.php" class="nav_link"><i class="fa-solid fa-masks-theater"></i> <span class="nav_name">theatre</span> </a>
                     <!-- <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name"></span> </a> -->
 
                    </div>
            </div> 
            <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!-- sidenavbar ends -->
<div class="height-100 bg-light main-container ">
<div class="user-l d-flex ">
<a href="#" class="user-head"> <i class="fa-solid fa-users"></i> <span class="nav_name">users lists</span> </a>
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
</div>
<hr>
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            User
                          </th>
                          <th>
                            User-id
                          </th>
                          <th>
                            full name
                          </th>
                          
                          <th>
                            Email
                          </th>
                          <th>
                            role
                          </th>
                          <th>
                            status
                          </th>
                          
                          
                        </tr>
                      </thead>
                      <?php
                      
                $data = mysqli_query($conn,"SELECT * from registration");

                while ($users_data = mysqli_fetch_array($data)){
                      
                      ?>
                      <tbody>
                        <tr>
                          <td class="py-1">
                            <img src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="image">
                          </td>
                          <td><?php echo $users_data["register-id"] ?></td>
                          <td><?php echo $users_data["full_name"] ?></td>
                          <td><?php echo $users_data["email"] ?></td>
                          <td><?php echo $users_data["role"] ?></td>
                          <td></td>

                         
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
</body>
</html>

