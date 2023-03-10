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
<<<<<<< Updated upstream
    <link rel="icon" type="image/x-icon" href="../assets/images/logo (3).png">
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="../assets/css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- style_css -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- Font_Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Admin | Tickets Bucket</title>
=======
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/instyle.css">

>>>>>>> Stashed changes
</head>
<!-- sidenavbar starts -->
  
<body id="body-pd">
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
                     <a href="../Pages/booking.php" class="nav_link active " > <i class="fa-solid fa-ticket"></i> <span class="nav_name">bookings</span> </a> 
                     <a href="../Pages/reviews.php" class="nav_link"> <i class="fa-solid fa-star"></i><span class="nav_name">reviews</span> </a> 
                     <a href="../Pages/Movies.php" class="nav_link"> <i class="fa-solid fa-video"></i> <span class="nav_name">movies</span> </a> 
                     <a href="../Pages/Theaters.php" class="nav_link"><i class="fa-solid fa-masks-theater"></i> <span class="nav_name">theatre</span> </a>
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
              <div class="cardHeader">
                  <h3 class="userHd">Booking Details</h3>
                       <button type="submit" class="Addbtn" name="fetch">Add Booking</button>
                  <!-- <button type="add" class="Addbtn" >Add Users</a> -->
              </div><br>
              <div class="table-responsive-sm">
             <table class="table table-bordered-bottom align-middle border-d table-sm table-responsive-md table-striped text-center">
                <thead class="text-center align-middle">
                    <tr class="text-dark" style="background: var(--dark_red);">
                        <th>ID</th>
                        <th>Customer Name</th>
                        <th>Movie Name</th>
                        <th>Genre</th>
                        <th>Theater Name</th>
                        <th>Ticket Type</th>
                        <th>Seat Type</th>
                        <th>Total Seats</th>
                        <th>Show Time</th>
                        <th>Show Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
          
        //   include("../AdminPanel/Pages/Config.php");
          
          $data = mysqli_query($conn,"SELECT * from booking");

          while ($booking_data = mysqli_fetch_array($data)){
            ?>

            <tr>
              <th><?php echo $booking_data["booking_id"] ?></th>
              <td><?php echo $booking_data["customer-name"] ?></td>
              <td><?php echo $booking_data["movieTitle"] ?></td>
              <td><?php echo $booking_data["genre-type"] ?></td>
              <td><?php echo $booking_data["theater-name"] ?></td>
              <td><?php echo $booking_data["ticket-type"] ?></td>
              <td><?php echo $booking_data["seat-type"] ?></td>
              <td><?php echo $booking_data["Total-seat"] ?></td>
              <td><?php echo $booking_data["show-time"] ?></td>
              <td><?php echo $booking_data["show-date"] ?></td>
              <td><?php echo $booking_data["status"] ?></td>
              <td>
                <!-- <button class="btn btn-primary btn-sm"><a href="update.php?id=<?php echo  $booking_data["booking_id"] ?>"
               class="text-white text-decoration-none"> Update</a></button>&nbsp;<br> -->
               <button class="btn btn-danger btn-sm"><a href="delete.php?Bid=<?php echo  $booking_data["booking_id"] ?>" 
               class="text-white text-decoration-none"> Delete</a></button>
             </td>
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

  <!-- javascript cdn  -->
  <script src="../assets/css/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
  <!-- main_js -->
  <script src="../assets/js/main.js"></script>
  <!-- ionicons -->
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
=======
<!-- sidenavbar ends -->
>>>>>>> Stashed changes
