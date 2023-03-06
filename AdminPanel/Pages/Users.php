<?php
include("Config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/images/logo (3).png">
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="../assets/css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- style_css -->
    <link rel="stylesheet" href="../assets/css/main.css">
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
                    <img src="../assets/images/mylogo (2).png" alt="" class="ion-icon">
                </span>
                <!-- <span class="title" style="margin-top:20px;margin-left: 6px;">Tickets Bucket</span> -->
            </a>
        </li>
        <li>
           <a href="../index.php">
                <span class="icon">
                  <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title" style="margin-top:20px;margin-left: 10px;">Dashboard</span>
            </a>
        </li>
        <li>
           <a href="Users.php">
                <span class="icon">
                <ion-icon name="people-outline"></ion-icon>
                </span>
                <span class="title" style="margin-top:20px;margin-left: 10px;">Users</span>
            </a>
        </li>
        <li>
           <a href="Movies.php">
                <span class="icon">
                     <ion-icon name="videocam-outline"></ion-icon>
                </span>
                <span class="title" style="margin-top:20px;margin-left: 10px;">Movies</span>
            </a>
        </li>
        <li>
           <a href="Theaters.php">
                <span class="icon">
                <ion-icon name="tv-outline"></ion-icon>
                </span>
                <span class="title" style="margin-top:20px;margin-left: 10px;">Theaters</span>
            </a>
        </li>
        <li>
           <a href="booking.php">
                <span class="icon">
                <ion-icon name="id-card-outline"></ion-icon>
                </span>
                <span class="title" style="margin-top:20px;margin-left: 10px;">Booking</span>
            </a>
        </li>
        <li>
           <a href="reviews.php">
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
</body>
</html>