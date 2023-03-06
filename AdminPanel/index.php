<?php
include("../AdminPanel/Pages/Config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assets/images/logo (3).png">
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="./assets/css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- style_css -->
    <link rel="stylesheet" href="./assets/css/main.css">
    <!-- Font_Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Admin | Tickets Bucket</title>
</head>
<body>
    <!-- ######################## Navigation ########################## -->
<div class="container1">
    <div class="row">
        <div class="col-sm-12">
        <div class="navigation">
        <ul>
        <li>
            <a href="#">
                <span class="icon">
                    <!-- <ion-icon name="ticket-outline"></ion-icon> -->
                    <img src="./assets/images/mylogo (2).png" alt="" class="ion-icon">
                </span>
                <!-- <span class="title" style="margin-top:20px;margin-left: 6px;">Tickets Bucket</span> -->
            </a>
        </li>
        <li>
           <a href="index.php">
                <span class="icon">
                  <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title" style="margin-top:20px;margin-left: 10px;">Dashboard</span>
            </a>
        </li>
        <li>
           <a href="./Pages/Users.php">
                <span class="icon">
                <ion-icon name="people-outline"></ion-icon>
                </span>
                <span class="title" style="margin-top:20px;margin-left: 10px;">Users</span>
            </a>
        </li>
        <li>
           <a href="./Pages/Movies.php">
                <span class="icon">
                     <ion-icon name="videocam-outline"></ion-icon>
                </span>
                <span class="title" style="margin-top:20px;margin-left: 10px;">Movies</span>
            </a>
        </li>
        <li>
           <a href="./Pages/Theaters.php">
                <span class="icon">
                <ion-icon name="tv-outline"></ion-icon>
                </span>
                <span class="title" style="margin-top:20px;margin-left: 10px;">Theaters</span>
            </a>
        </li>
        <li>
           <a href="./Pages/booking.php">
                <span class="icon">
                <ion-icon name="id-card-outline"></ion-icon>
                </span>
                <span class="title" style="margin-top:20px;margin-left: 10px;">Booking</span>
            </a>
        </li>
        <li>
           <a href="./Pages/reviews.php">
                <span class="icon">
                <ion-icon name="star-half-outline"></ion-icon>
                </span>
                <span class="title" style="margin-top:20px;margin-left: 10px;">Reviews</span>
            </a>
        </li>
        <li>
           <a href="#">
                <span class="icon" style="margin-top:8px;margin-left:3px;">
                <ion-icon name="log-out-outline"></ion-icon>
                </span>
                <form action="" method="post" style="margin-top:20px;margin-left: 6px;">
                   <button class="title "id="LgBtn" name="logout" type="submit" style=" padding: 5px 10px;
                    background: transparent; color: var(--dark_red); text-decoration: none;
                     border-radius: 6px;border:1px solid var(--dark_red);">Logout</button>
                </form>
                <?php
                  if(isset($_POST['logout'])){
                    session_start();
                   session_unset();
                   session_destroy();
 
                   echo "<script>window.location.href ='http://localhost/ticketBuckets/AdminPanel/pages/adminlogin.php';</script>"; 
 
                  }
                ?>
 
            </a>
        </li>
        </ul>
        </div>
        </div>
    </div>
    

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
            <div class="row">
                <div class="col-sm-12">
                <div class="cardBox">
        <div class="card">
            <div>
              <div class="iconBx">
              <i class="fa-solid fa-masks-theater"></i>
              </div>
                <div class="number">100</div>
                <div class="cardName">Theaters</div>
            </div>
            
        </div>
        
        <div class="card">
            <div>
              <div class="iconBx">
                <i class="fa-solid fa-ticket"></i>
              </div>
                <div class="number">37,032</div>
                <div class="cardName">Tickets Sold</div>
            </div>
        </div>

        <div class="card">
            <div>
              <div class="iconBx">
                 <i class="fa-solid fa-users"></i>
              </div>
                <div class="number">50,369</div>
                <div class="cardName">Customers</div>
            </div>
        </div>
        <div class="card">
            <div>
               <div class="iconBx">
               <i class="fa-solid fa-film"></i>
               </div>
               <div class="number">1000</div>
                <div class="cardName">New Movies</div>
            </div>
        </div>
        <!-- <div class="card">
            <div>
                <div class="cardName">Theater</div>
                <div class="number">400</div>
            </div>
            <div class="iconBx">
            <i class="fa-solid fa-masks-theater"></i>
            </div>
        </div> -->

     </div>

                </div>
            </div>
        </div>
     
     <!-- ############################## User Data List ############################ -->
     <!-- <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <div class="details">
          <div class="userData">
              <div class="cardHeader">
                  <h2 class="userHd">User Details</h2>
                       <button type="submit" class="Addbtn" name="fetch">Add Users</button>
                  <button type="add" class="Addbtn" >Add Users</a>
              </div>
             <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Picture</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
          
          include("../AdminPanel/Pages/Config.php");
          
          $data = mysqli_query($conn,"SELECT * from registration");

          while ($users_data = mysqli_fetch_array($data)){
            ?>

            <tr>
              <th><?php echo $users_data["register-id"] ?></th>
              <td><?php echo $users_data["full_name"] ?></td>
              <td><?php echo $users_data["email"] ?></td>
              <td><?php echo $users_data["Apassword"] ?></td>
              <td><img width="100px" height="100px" src="./assets/images/<?php echo $users_data["picture"] ?>" alt=""></td>
              <td><?php echo $users_data["role"] ?></td>
              <td><button class="btn btn-primary"><a href="update.php?id=<?php echo  $users_data["register-id"] ?>"
               class="text-white text-decoration-none"> Update</a></button>&nbsp;
               <button class="btn btn-danger"><a href="delete.php?id=<?php echo  $users_data["register-id"] ?>" 
               class="text-white text-decoration-none"> Delete</a></button></td>
            </tr>
        <?php  } ?>
                </tbody>
             </table>
          </div>
       </div>
            </div>
        </div>
     </div> -->
      
    </div>

    
</div>

  <!-- javascript cdn  -->
  <script src="../assets/css/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
  <!-- main_js -->
  <script src="./assets/js/main.js"></script>
  <!-- ionicons -->
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>