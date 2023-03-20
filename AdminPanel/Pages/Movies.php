<?php
session_start();
include("scripts.php");
include("Config.php");
// include('delete.php');
$page_per_record=03;
if(isset($_GET['page'])){
    $page=$_GET['page'];
}else{
    $page=1;
}
// $page=1;
$start_from=($page - 1) * $page_per_record;


   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/instyle.css">
    <style>   
    table {  
        border-collapse: collapse;  
    }  
        .inline{   
            display: inline-block;   
            float: right;   
            margin: 20px 0px;   
        }   
         
        input, button{   
            height: 34px;   
        }   
  
    .pagination {   
        display: inline-block;   
    }   
    .pagination a {   
        font-weight:bold;   
        font-size:18px;   
        color: black;   
        float: left;   
        padding: 8px 16px;   
        text-decoration: none;   
        border:1px solid black;   
    }   
    .pagination a.active {   
            background-color: pink;   
    }   
    .pagination a:hover:not(.active) {   
        background-color: skyblue;   
    }   
        </style>   
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
            <a href="../Pages/Movies.php" class="nav_link active" > <i class="fa-solid fa-video"></i> <span class="nav_name">movies</span> </a> 
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
        <!-- signout button ends   -->        </nav>
</div>
<!-- sidenavbar ends -->
<!-- main container  -->
<div class="height-100 bg-light main-container">

<hr>
<div class="container">
<div class="row">
<div class="card">
<div class="card-body d-flex">

        <div class="user-l  mt-3">
        <a
            href="#" class="user-head"><i class="fa-sharp fa-solid fa-film"></i> <span class="nav_name">Movie collections</span> </a> 
        <!-- action buttons -->

    
        </div>
        <div class="ms-auto mt-3">
        <form action="" method="post">
        <a href="form2.php" class="btn btn-success"  >
          <i class="fa-solid fa-circle-plus"></i>  new movies
        </a>
        </form>
        <!-- Button trigger modal -->

</div>
</div>
<!-- action buttons -->
</div>
</div>
</div>
<p style="color:red;">
    <?php if(isset($_SESSION['status'])){
        echo $_SESSION['status'];
        unset($_SESSION['status']);
    } ?>
    <?php
        if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        } 
    ?>
    
</p>
<!-- movie data  -->
        <div class="table-responsive">
    <form action="delete.php" method="POST" Id="movieForm" >
        <table class="table table-striped text-center table-hover align-middle">
            
            <thead class="text-center">
                <tr>
                    <th>
                    <button type="submit" name="del_movie_data" class="btn btn-danger "><i class="fa-solid fa-trash"></i> </button>

                </th>
                <th>ID</th>
                <th>MOVIE</th>
                <th>MOVIE TITLE</th>
                <th>MOVIE TRAILER</th>
                <th>GENRE</th>
                <th>RELEASE</th>
                <th>DURATION</th>
                <!-- <th>DESCRIPTION</th> -->
                <th>edit</th>
            </tr>
            </thead>
                <tbody class="table-dark">
                <?php
        
                
            $movie_data= "SELECT * from movie";
                $data = mysqli_query($conn, $movie_data);
                print_r(mysqli_fetch_assoc($data));
                if(mysqli_fetch_assoc($data)){
                    while($row= mysqli_fetch_assoc($data)){
                        
                        ?>
                        <tr>
                            <td>
                                
                                <input type="checkbox" name="deleteMovie[]"value="<?php echo $row['movie_id'] ?>" >
                                
                            </td>
                            <td >
                            <?php echo $row["movie_id"] ?>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                <img src="../assets/images/uploads/<?php echo $row['movie_pic']?>" style="height:100px;width:100px" alt="">
                                </div>
                            </td>
                            <td>
                            <h6><?php echo $row["movieTitle"] ?></h6>
                            </td>
                            <td  class="font-weight-bold"><?php echo $row["Movie_Trailers"] ?></td>
                            <td>
                            <?php echo $row['genre_type'];?>     
                            </td>

                            <td  class="font-weight-bold"><?php echo $row["release"] ?></td>
                            <td colspan="2" class="text-warning"><?php echo $row["duration"] ?></td>
                            <!-- <td class="text-warning"><?php echo $row["description"] ?></td> -->

                            <td>

                                <a href="form.php#form-1?id=<?php echo $row['movie_id'] ?>" class="btn btn-info"
                                    style="font-size:small;" ><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                
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
                
                        
                
                    </tbody>
                </table>
                </form>
         </div>


<!-- movie data ends  -->




    </div> 
    <!-- main container ends  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    