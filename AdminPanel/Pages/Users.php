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
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="../assets/css/instyle.css">
>>>>>>> Stashed changes
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
<form class="d-flex ms-auto">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
</div>
<hr>
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

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
               <div class="AD_Name" style="margin-right:60px;margin-top:5px;">
                   <h6 class="text-white"><?php echo $_SESSION['full_name']; ?></h6>
                </div>
                <div class="AD_Role" style="margin-right:60px;">
                    <h6 class="text-sm text-center" style="color:var(--dark_red);font-size:13px;">( <?php echo $_SESSION['role']; ?> )</h6>
                </div>
            </div>
        </div><br>
            </div>
        </div>

     <!-- ############################## User Data List ############################ -->
     <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <div class="details">
          <div class="userData">
              <div class="cardHeader pt-2">
                  <h3 class="userHd ps-2 ">User Details</h3>
                       <button type="submit" class="Addbtn" name="show">Show More</button>
                  <!-- <button type="add" class="Addbtn" >Add Users</a> -->
              </div><br>
              <div class="table-responsive-sm">
             <table class="table table-bordered-bottom align-middle border-d table-sm table-responsive-md table-striped text-center" >
                <thead>
                    <tr class="text-dark" style="background: var(--dark_red);">
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PASSWORD</th>
                        <th>PICTURE</th>
                        <th>ROLE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                <?php
          
        //   include("../AdminPanel/Pages/Config.php");
          
          $data = mysqli_query($conn,"SELECT * from registration");

          while ($users_data = mysqli_fetch_array($data)){
            ?>

            <tr>
              <th><?php echo $users_data["register_id"] ?></th>
              <td><?php echo $users_data["full_name"] ?></td>
              <td><?php echo $users_data["email"] ?></td>
              <td><?php echo $users_data["Apassword"] ?></td>
              <td><img width="100px" class="pic" height="100px" src="../assets/images/<?php echo $users_data["picture"] ?>" alt=""></td>
              <td><?php echo $users_data["Urole"] ?></td>
              <td><button type="button" class="btn btn-primary btn-sm editbtn"><a href="Users.php?id=<?php echo $row["register_id"] ?>"
               class="text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#updateModal"> Update</a></button>&nbsp;
               <button type="button" class="btn btn-danger btn-sm"><a href="delete.php?id=<?php echo  $users_data["register_id"] ?>" 
               class="text-white text-decoration-none"> Delete</a></button></td>
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
      <!-- ############################# Modal Start ########################## -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update User Detail</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <?php
include("Config.php");
$id = $_GET['id'];
$getData = "SELECT * FROM registration WHERE  register_id = '$id' ";



$res = mysqli_query($conn, $getData);
// mysqli_query($conn, $update)
if ($res) {

    $row =  mysqli_fetch_assoc($res);

    $full_name = $row['full_name'];
    $email = $row['email'];
    $Apassword = $row['Apassword'];
    $picture = $row['picture'];
    $Urole = $row['Urole'];


?>
      <form action="Users.php" method="post">
         <div class="modal-body">
           <div class="mb-3" hidden>
                <label for="exampleInputEmail1" class="form-label">User ID</label>
                <input type="number" class="form-control" id="register_id" name="register_id" value="<?php echo $id  ?>">
            </div>
           <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="Fname" required name="full_name" value="<?php echo $full_name ?>" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>" required aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="Apassword" name="Apassword" value="<?php echo $Apassword  ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Uplode Picture</label>
                <input type="file" class="form-control" id="picture" name="picture" value="<?php echo $picture  ?>" required>
            </div>
            <div class="mb-3">
              <select class="form-select" id="Urole" aria-label="Default select example" name="Urole" value="<?php echo $Urole ?>"  required>
                <option selected disabled>User Role</option>
                <option value="Admin" >Admin</option>
                <option value="User" >User</option>
              </select>
            </div>
          </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger" name="update">Update changes</button>
            </div>
       </form>
       <?php } ?>
       <?php 
include ('Config.php');

if(isset($_POST['update'])){
    $register_id = $_POST['register_id'];
    $full_name = $_POST['full_name'];
    $email =  $_POST['email'];
    $Apassword = $_POST['Apassword'];
    $picture = $_POST['picture'];
    $Urole = $_POST['Urole'];

    $update = "UPDATE `registration` SET `full_name`= '$full_name', `email`= '$email', `Apassword`= '$Apassword', 
    `picture`= '$picture', `Urole`= '$Urole' WHERE register_id = '$register_id' ";
       $updateRes = mysqli_query($conn, $update);
    if($updateRes){
      echo "<script>alert('Data Updated Successfully!')</script>";
    header("location:Users.php");
    
    } else{
        echo "<script>alert('Data Not Update yet!')</script>";
    
    }
}






?>
    </div>
  </div>
</div>
      <!-- ############################# Modal End ########################## -->

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
=======
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
                          <th>
                            action
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
                          <td>
                          <button class="btn btn-primary"><a href="update.php?id=<?php echo  $users_data["register-id"] ?>"
               class="text-white text-decoration-none"> Update</a></button>&nbsp;
               <button class="btn btn-danger"><a href="delete.php?id=<?php echo  $users_data["register-id"] ?>" 
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
>>>>>>> Stashed changes
</body>
</html>

