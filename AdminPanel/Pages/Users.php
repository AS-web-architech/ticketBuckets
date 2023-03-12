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
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="../assets/css/instyle.css">
</head>
  
<body id="body-pd">
  <!-- sidenavbar starts -->
  <?php  
      

    
        $per_page_record = 3;  // Number of entries to show in a page.   
        // Look for a GET variable page if not found default is 1.        
        if (isset($_GET["page"])) {    
            $page  = $_GET["page"];    
        }    
        else {    
          $page=1;    
        }    
    
        $start_from = ($page-1) * $per_page_record;     
    
        $query = "SELECT * FROM `users` LIMIT $start_from, $per_page_record";     
        $rs_result = mysqli_query ($conn, $query);    
    ?> 
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
<div class="user-l d-flex ">
<a href="#" class="user-head"> <i class="fa-solid fa-users"></i> <span class="nav_name">Users Detail</span> </a>
<!-- action buttons -->
<div class="ms-auto ">
  <!-- <form class="d-flex ms-auto">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form> -->
  <button class="btn btn-success ">
    <i class="fa-solid fa-circle-plus"></i>  new users</button>
    <button class="btn btn-warning ">
      <i class="fa-solid fa-pen-to-square"></i> modify</button>
      <form action="delete.php" method="POST"  >    
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
                    <table class="table table-striped table-hover align-middle text-center">
                      <thead>
                        <tr>
                         <th>Select</th>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th>User_Pic</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody class="table table-dark table-striped">
                      <?php
                      
                $data = mysqli_query($conn,"SELECT * from registration");

                while ($users_data = mysqli_fetch_array($data)){
                      
                      ?>
                      
                        <tr>
                         <td>
                            <form action="" method="post">
                            <input type="checkbox" name="deleteMovie[]" value="<?php echo $row['register_id'];?>">
                            </form>
                          </td>
                          <!-- <td class="py-1">
                            <img src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="image">
                          </td> -->
                          <td><?php echo $users_data["register_id"] ?></td>
                          <td><?php echo $users_data["full_name"] ?></td>
                          <td><?php echo $users_data["email"] ?></td>
                          <td><?php echo $users_data["Urole"] ?></td>
                          <td class="py-1" ><img width="66px" height="66px" style="border-radius: 50px;" src="../assets/images/uploads/<?php echo $users_data["picture"] ?>" alt=""></td>
                          <td></td>
                         
                        </tr>
                        <?php  } ?>      
                      </tbody>
                    </table>
                    
     <!-- <div class="pagination">     -->
       <?php  
        // $Pquery = "SELECT COUNT(*) FROM users";     
        // $rs = mysqli_query($conn, $Pquery);     
        // $paginationRow = mysqli_num_rows($rs); 
        // print_r($paginationRow);   
    //     $total_records = $paginationRow[0];     
          
    // echo "</br>";     
        // Number of pages required.   
      //   $total_pages = ceil($total_records / $per_page_record);     
      //   $pagLink = "";       
      
      //   if($page>=2){   
      //       echo "<a href='pagination.php?page=".($page-1)."'>  Prev </a>";   
      //   }       
                   
      //   for ($i=1; $i<=$total_pages; $i++) {   
      //     if ($i == $page) {   
      //         $pagLink .= "<a class = 'active' href='pagination.php?page="  
      //                                           .$i."'>".$i." </a>";   
      //     }               
      //     else  {   
      //         $pagLink .= "<a href='pagination.php?page=".$i."'>   
      //                                           ".$i." </a>";     
      //     }   
      //   };     
      //   echo $pagLink;   
  
      //   if($page<$total_pages){   
      //       echo "<a href='pagination.php?page=".($page+1)."'>  Next </a>";   
      //   }   
  
      // ?>    

                  </div>
                </div>
              </div>
            </div>
            </div>
              </div>
            </div>


</div>
<!-- <script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'index1.php?page='+page;   
    }   
  </script> -->
</body>
</html>

