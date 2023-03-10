<?php
include("scripts.php");
include("sidenav.php");
include("Config.php");
// include('delete.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                     <a href="../Pages/Users.php" class="nav_link "> <i class='bx bx-user nav_icon'></i> 
                    <span class="nav_name ">Users</span> </a>
                    <a href="../Pages/booking.php" class="nav_link  " > <i class="fa-solid fa-ticket"></i> <span class="nav_name">bookings</span> </a> 
                    <a href="../Pages/reviews.php" class="nav_link"> <i class="fa-solid fa-star"></i><span class="nav_name">reviews</span> </a> 
                    <a href="../Pages/Movies.php" class="nav_link active" > <i class="fa-solid fa-video"></i> <span class="nav_name">movies</span> </a> 
                     <a href="../Pages/Theaters.php" class="nav_link"><i class="fa-solid fa-masks-theater"></i> <span class="nav_name">theatre</span> </a>
                     <!-- <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name"></span> </a> -->
 
                    </div>
            </div> 
            <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!-- sidenavbar ends -->
    <!-- main container  -->
    <div class="height-100 bg-light main-container">

    <div class="user-l d-flex mt-3">
        <a href="#" class="user-head"><i class="fa-sharp fa-solid fa-film"></i> <span class="nav_name">My collections</span> </a> 
        <!-- action buttons -->
        <div class="ms-auto">
            <form action="delete.php" method="POST"  >    
            <button class="btn btn-success ">
            <i class="fa-solid fa-circle-plus"></i>  new movies</button>
            <button class="btn btn-warning ">
            <i class="fa-solid fa-pen-to-square"></i> modify</button>
            <button type="submit" name="del_movie_data" class="btn btn-danger "><i class="fa-solid fa-trash"></i> </button>
            </form>    
       </div>
       <!-- action buttons -->
        
</div>
<hr>
<!-- movie data  -->
<div class="container mt-3">
<div class="container mt-5">
        <div class="table-responsive">
        <form action="delete.php" method="POST">
            <table class="table table-striped table-dark text-white table-hover">
                
                <thead>
                    <tr>
                        <th></th>
                        <th>movie title</th>
                        <th>MOVIE</th>
                        <th>MOVIE ID</th>
                        <th>GENRE</th>
                        <th>YEAR</th>
                        <th>DURATION</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
          
            
          $movie_data= "SELECT * from movie";
            $data = mysqli_query($conn, $movie_data);
            if(mysqli_num_rows($data) > 0){
                foreach($data as $row){
                    ?>
                    <tr>
                        <td>
                            <form action="" method="post">
                            <input type="checkbox" name="deleteMovie[]" value="<?php echo $row['movie-id'];?>">
                            </form>
                        </td>
                        <td>
                          <h6><?php echo $row["movieTitle"] ?></h6>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                            <img width="100px" class="pic" height="100px" src="../assets/images/<?php echo $row["movie_pic"] ?>" alt="">
                            </div>
                        </td>
                        <td >
                        <?php echo $row["movie-id"] ?>
                        </td>
                        <td><?php echo $row["genre_type"] ?></td>
                        <td  class="font-weight-bold"><?php echo $row["year"] ?></td>
                         <td class="text-warning"><?php echo $row["duration"] ?></td>
                        
                    </tr>
                    
                    <?php   
                }
            }
            else{
                ?>
                     <tr>
                        <td>no record found</td>
                     </tr>
                <?php
            }
            ?>
              
                    
            <?php   ?>       
                </tbody>
            </table>
            </form>
        </div>
    </div>
</div>


<!-- movie data ends  -->






    </div>
    <!-- main container ends  -->