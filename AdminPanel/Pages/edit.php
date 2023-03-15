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
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/movie.css">
    <link rel="stylesheet" href="../assets/css/instyle.css">
</head>
  
<body id="body-pd" >
  <!-- sidenavbar starts -->
      
    <header class="header " id="header">
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
                     <a href="../Pages/Users.php" class="nav_link active"> <i class='bx bx-user nav_icon'></i> 
                    <span class="nav_name ">Users</span> </a>
                     <a href="../Pages/booking.php" class="nav_link " > <i class="fa-solid fa-ticket"></i> <span class="nav_name">bookings</span> </a> 
                     <a href="../Pages/reviews.php" class="nav_link"> <i class="fa-solid fa-star"></i><span class="nav_name">reviews</span> </a> 
                     <a href="../Pages/Movies.php" class="nav_link"> <i class="fa-solid fa-video"></i> <span class="nav_name">movies</span> </a> 
                     <a href="../Pages/Theaters.php" class="nav_link"><i class="fa-solid fa-masks-theater"></i> <span class="nav_name">theatre</span> </a>
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
      <!-- edit form start -->
      <div class="heading d-flex">
        <h1 class="mb-3">Edit Category</h1>
        <!-- goback button  -->
        <a href="Movies.php" class="btn btn-danger  ms-auto mb-3 w-22 text-center">
          <i class="fa-solid fa-arrow-left"></i> back</a>
      </div>
   
           

                <form action="edit.php" method="post">
                 <div class="row mb-4">
                   <div class="col-12 col-md-6 col-xl-6 ">

                    <?php
                     
                       $movieId=$_GET['id'];
                       $showquery="SELECT * FROM `movie` WHERE `movie-id`= {$movieId}" ;

                       $showdata=mysqli_query($conn,$showquery);
                       $arr=mysqli_fetch_array($showdata);
                       if(isset($_POST['update'])){
                        $id=$_GET['id'];
                        $movieName =$_POST['movieTitle'];
                        $movieGenre =$_POST['genre_type'];
                        $movieYear =$_POST['year'];
                        $movieDuration =$_POST['duration'];
                         
                        $update="UPDATE movie SET movie-id='$id' , movieTitle='' , genre_type='$movieGenre' , year='$movieYear'
                        duration='$movieDuration' WHERE movie-id='$id' " ;
  
                        $up_run=mysqli_query($conn,$update);
                        if($up_run > 0){
                            $_SESSION['message']="data has been updated";
                            echo "<script>window.location.href='Movies.php'</script>";
                        }else{
                        $_SESSION['message']="data  not updated yet";
                            echo "<script>window.location.href='Movies.php'</script>";
                        }
                     }    
                        if($arr > 0){
                          
                          
                          ?>
                              <div class="form-outline">
                                <input type="text" id="form6Example1" name="movieTitle" class="form-control"value="<?php echo $arr['movieTitle']?>" />
                                <label class="form-label" for="form6Example1" >Movie title</label>
                              </div>
                            </div>
                            <!-- Text input -->
                            <div class="col-12 col-md-6 col-xl-6 ">
                              <div class="form-outline mb-4">
                                <input type="text"  class="form-control" name="genre_type"  value="<?php echo $arr['genre_type']?>" />
                                <label class="form-label" >genre</label>
                    </div>
                  </div>
                  <!-- Text input -->

                  <div class="col-12 col-md-6 col-xl-6 ">
                    <div class="form-outline mb-4">
                      <input type="text" id="form6Example4" class="form-control" name="year" value="<?php echo $arr['year']?>" />
                      <label class="form-label" for="form6Example4">year</label>
                    </div>
                  </div>
                  <!-- Email input -->
                  <div class="col-12 col-md-6 col-xl-6 ">
                    <div class="form-outline mb-4">
                                           
                      <input type="time" id="form6Example5" class="form-control" name="duration" value="<?php echo $arr['duration']?>" />
                      <label class="form-label" for="form6Example5">duration</label>
                    </div>
                  </div>
                </div>
                
                <!-- Submit button -->
                <button type="submit" class="btn btn-dark btn-block mb-4 w-25" name="update" >Edit</button>
              </form>
              <?php
                   
                               
                   }else{
                        echo "<script>alert(no recored found)</script>";
                     }
                  
                  ?>
                    
                    
                    
                    
                  
                   
                   
                 
               
        
              

      
  

    </div>  






















    <!-- edit form ends -->
