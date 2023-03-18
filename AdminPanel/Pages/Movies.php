<?php
session_start();
include("scripts.php");
include("sidenav.php");
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
              
              <button class="btn btn-success" >
             <i class="fa-solid fa-circle-plus"></i>  new movies</button>
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
            
<<<<<<< Updated upstream
                </tbody>
            </table> 
            </form>
        </div>
        </div>
              </div>
            </div>
            </div>
=======
        </p>
<!-- movie data  -->
<!-- <div class="height-100 bg-light main-container"> -->
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-lg-12 grid-margin stretch-card">
                 <div class="card">
                      <div class="card-body">
                          <div class="table-responsive">
                              <form action="delete.php" method="POST">
                                  <table class="table table-striped text-center table-hover align-middle">
                                      
                                      <thead class="text-center">
                                          <tr>
                                              <th>
                                                <button type="submit" name="del_movie_data" class="btn btn-danger "><i class="fa-solid fa-trash"></i> </button>

                                            </th>
                                            <th>ID</th>
                                            <th>MOVIE</th>
                                            <th>MOVIE TITLE</th>
                                            <th>GENRE</th>
                                            <th>YEAR</th>
                                            <th>DURATION</th>
                                            <th>edit</th>
                                             <th>delete</th>       
                                        </tr>
                                    </thead>
                                    <tbody class="table-dark">
                                    <?php
                            
                                
                            $movie_data= "SELECT * from movie";
                                $data = mysqli_query($conn, $movie_data);
                                if(mysqli_num_rows($data) > 0){
                                    foreach($data as $row){
                                        ?>
                                        <tr>
                                            <td>
                                                
                                                <input type="checkbox" name="deleteMovie[]"value="<?php echo $row['movie-id'] ?>" >
                                              
                                            </td>
                                            <td >
                                            <?php echo $row["movie-id"] ?>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                <img src="../assets/images/<?php echo $row['movie_pic'] ?>" style="height:100px;width:100px" alt="">
                                                </div>
                                            </td>
                                            <td>
                                            <h6><?php echo $row["movieTitle"] ?></h6>
                                            </td>
                                            <td>
                                            <?php echo $row['genre_type'];?>     
                                           </td>
                                            <td  class="font-weight-bold"><?php echo $row["year"] ?></td>
                                            <td class="text-warning"><?php echo $row["duration"] ?></td>
                                            <td>
                                                <a href="edit.php?id=<?php echo $row['movie-id'] ?>" class="btn btn-info"
                                                 style="font-size:small;" ><i class="fa-solid fa-pen-to-square"></i></a>
                                           </td>
                                           <td>                              
                                             <button type="submit" class="btn btn-danger" style="font-size:small;">
                                               <i class="fa-solid fa-trash"></i>
                                             </button>
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
                        </div>
                  </div>
>>>>>>> Stashed changes
              </div>
            </div>
        </div>
    </div>
<!-- </div> -->



<!-- movie data ends  -->
<center>
<div class="pagination">    
      <?php  
        $query = "SELECT COUNT(*) FROM movie";     
        $rs_result = mysqli_query($conn, $query);     
        $row = mysqli_fetch_row($rs_result);  
        // print_r($row);   
        $total_records = $row[0];     

//   $sql="SELECT * FROM `movie` ";
//   $rs_result=mysqli_query($conn,$sql);
//   $total_records=mysqli_num_rows($rs_result);
//   echo $total_records;
// $total_pages=ceil($total_records/$limit);
// for($i=1;$i<$total_pages;$i++){
//     echo "<a href='Movies.php?page=''".$i." >".$i."</a>";
// }
$total_pages = ceil($total_records / $page_per_record);     
$pagLink = "";       

if($page>=2){   
    echo "<a href='Movies.php?page=".($page-1)."'>  Prev </a>";   
}       
           
for ($i=1; $i<=$total_pages; $i++) {   
  if ($i == $page) {   
      $pagLink .= "<a class = 'active' href='Movies.php?page="  
                                        .$i."'>".$i." </a>";   
  }               
  else  {   
      $pagLink .= "<a href='Movies.php?page=".$i."'>   
                                        ".$i." </a>";     
  }   
};     
echo $pagLink;   

if($page<$total_pages){   
    echo "<a href='Movies.php?page=".($page+1)."'>  Next </a>";   
}   

?>

<div class="inline m-auto">   
      <input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
      placeholder="<?php echo $page."/".$total_pages; ?>" required>   
      <button onClick="go2Page();">Go</button>   
     </div>   
     </center>
     <script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'Movies.php?page='+page;   
    }   
  </script>  

    </div>
    <!-- main container ends  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    