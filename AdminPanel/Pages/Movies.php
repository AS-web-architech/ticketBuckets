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
                    <img src="../assets/images/<?php echo $_SESSION['picture']; ?>" alt="">
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

     <!-- ############################## User Data List ############################ -->
     <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
            <div class="details">
          <div class="userData">
              <div class="cardHeader pt-2">
                  <h3 class="userHd ps-2">Movie Details</h3>
                       <button type="submit" class="Addbtn" name="fetch">Add Movie</button>
                  <!-- <button type="add" class="Addbtn" >Add Users</a> -->
              </div><br>
              <div class="table-responsive-sm">
             <table class="table table-bordered-bottom align-middle border-d table-sm table-responsive-md table-striped ">
                <thead class="align-middle">
                    <tr class="text-dark" style="background: var(--dark_red);">
                        <th>ID</th>
                        <th>IMAGE</th>
                        <th>MOVIE NAME</th>
                        <th>GENRE</th>
                        <th>YEAR</th>
                        <th>DURATION</th>
                        <!-- <th>COMMENTS</th> -->
                        <th>ACTION</th>
=======
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
                        
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream

            <tr>
              <th><?php echo $movie_data["movie_id"] ?></th>
              <td><img width="100px" class="pic" height="100px" src="../assets/images/<?php echo $movie_data["movie_pic"] ?>" alt=""></td>
              <td><?php echo $movie_data["movieTitle"] ?></td>
              <td><?php echo $movie_data["genre_type"] ?></td>
              <td><?php echo $movie_data["year"] ?></td>
              <td><?php echo $movie_data["duration"] ?></td>
              <td><button class="btn btn-primary btn-sm"><a href="update.php?Mid=<?php echo  $movie_data["movie_id"] ?>"
               class="text-white text-decoration-none"> Update</a></button>&nbsp;
               <button class="btn btn-danger btn-sm"><a href="delete.php?Mid=<?php echo  $movie_data["movie_id"] ?>" 
               class="text-white text-decoration-none"> Delete</a></button></td>
            </tr>
        <?php  } ?>
                </tbody>
             </table>
             </div>
          </div>
       </div>
            </div>
=======
              
                    
            <?php   ?>       
                </tbody>
            </table>
            </form>
>>>>>>> Stashed changes
        </div>
    </div>
</div>


<!-- movie data ends  -->






    </div>
    <!-- main container ends  -->