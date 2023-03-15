<?php
include('./config.php');
include('./scripts.php');
include('./bootstrap.php');
// include '../Pages/UserRegister.php';
if(isset($_POST["register"])){
  $name= $_FILES['picture'];
  
  $imageName=$_FILES['picture']['name'];
  $tempName=$_FILES['picture']['tmp_name'];
  $destination="/ticketBuckets/AdminPanel/assets/images/uploads".$imageName;
  move_uploaded_file($tempName,$destination);
  $UserName=mysqli_real_escape_string($conn,$_POST['Uname']);
  $UserEmail=mysqli_real_escape_string($conn,$_POST['email']);
  $UserPassword=mysqli_real_escape_string($conn,$_POST['password']);
  $confirmPassword=mysqli_real_escape_string($conn,$_POST['confirmPass']);
  $role=$_POST['Role'];
  if(empty($UserName)){
      $error="* Name field is required";
  }
  elseif(empty($UserEmail)){
      $error="* Email field is required";
  }
  elseif(empty($UserPassword)){
      $error= "* password  is required";
  }elseif($UserPassword != $confirmPassword){
      $error="*  password  does not match";
  }elseif(strlen($UserName) < 5 || strlen($UserName) > 30){
      $error="name must be between 5 to 30 charachters ";
  }elseif(strlen($UserPassword ) < 6 || strlen($UserPassword ) > 18){
      $error="your password must be atleast 6  to 18 charachters ";
  }else{
      
      $insert = "INSERT INTO registration (`full_name`, `email`, `Apassword`, `picture`, `Urole`) 
      VALUES ( '$UserName' , '$UserEmail','$UserPassword','$imageName','$role')";
      $query= mysqli_query($conn, $insert);
      if($query){

          echo "<script>alert('You have successfully Register')</script>";
          // echo "<script>alert('please login your account')</script>";
         
          echo "<script>window.location.href = '../Pages/UserLogin.php';</script>"; 
      }else{

          echo "<script>window.location.href = '../Pages/UserRegister.php';</script>"; 
          echo "Registration failed !";
      }
}
 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Swipper CDN --> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
<link rel="stylesheet" href="">
  <!-- Internal Style -->
  <link rel="stylesheet" href="../Assets/css/Rform.css">
  <link rel="stylesheet" href="../Assets/css/Ubackg.css">
  <title>Tickets Bucket | Registration Form</title>
</head>

<body class=" animation-area">
  <ul class="box-area">
    <li><img src="../Assets/images/tb-logo.png" alt=""></li>
    <li><img src="../Assets/images/tb-logo.png" alt=""></li>
    <li><img src="../Assets/images/tb-logo.png" alt=""></li>
    <li><img src="../Assets/images/tb-logo.png" alt=""></li>
    <li><img src="../Assets/images/tb-logo.png" alt=""></li>
    <li><img src="../Assets/images/tb-logo.png" alt=""></li>
  </ul>
  <div class="container-fluid">
    <div class="container pt-1 pb-1">
     <div class="row g-0  align-items-center">
        <div class="col-12 col-md-6 col1">
          <div class="card mb-3 card1" style="max-width: 540px;">
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide Swiper1">
                  <div class="content1 fa fas fa-3x fadeInRight">
                    <h2 class="text-black"><b>Join Us</b></h2>
                    <h4 class="text-black">99% Customer Satisfaction</h4>
                    <p class="text-black">(Based on paid invoices)</p>
                  </div> 
                </div>
                <div class="swiper-slide Swiper2">
                  <div class="content1">
                    <h2 class="text-black"><b>Movies Trailer</b></h2>
                    <h4 class="text-black">Watch Unlimited Movies Trailers</h4>
                    <p class="text-black">(Feel Free To Watch Your Desire Moive Trailers)</p>
                  </div> 
                </div>
                <div class="swiper-slide Swiper3">
                  <div class="content1">
                    <h2 class="text-black"><b>Book Online Tickets</b></h2>
                    <h4 class="text-black">Book your tickets at home  now.</h4>
                    <p class="text-black">(Now everything is based at your fingertip)</p>
                  </div>
                </div>
                <!-- <div class="swiper-slide">Slide 4</div> -->
              </div>
              <!-- <div class="swiper-button-next text-white"></div>
              <div class="swiper-button-prev text-white"></div> -->
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="card card2 content2" style="max-width:540px;">
            <div class="card-body cbody2">
              
              <p style="color:red;" class="text-bold" >
               <?php           
                    if(isset($error)){
                       echo $error;
                    }           
               
               ?>
             </p>
             <h2 class="card-title text-center mb-3">Sign Up</h2>
              <p class="card-text">
                <form method="post" action="UserRegister.php" enctype="multipart/form-data">
                 <div class=" form-group mb-2">
                    <i class="fa-solid fa-user-tie" style="color:#ac1004;"></i>&nbsp;
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="Uname"  value="<?php if(isset($error)){
                      echo $UserName; } ?>" required placeholder="Enter Your Full Name">
                    <!-- <div id="emailHelp" class="form-text">W  e'll never share your email with anyone else.</div> -->
                  </div>
                  <div class="form-group mb-2">
                    <i class="fa-solid fa-at" style="color:#ac1004;"></i>&nbsp;
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php if(isset($error)){
                      echo $UserEmail; } ?>" required placeholder="Enter Your Email">
                    <!-- <div id="emailHelp" class="form-text">W  e'll never share your email with anyone else.</div> -->
                  </div>
                  <div class="form-group mb-2">
                    <i class="fa-solid fa-lock" style="color:#ac1004;"></i>&nbsp;
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" value="<?php if(isset($error)){
                      echo $UserPassword; } ?>" name="password" required placeholder="Enter Your Password">
                  </div>
                  <div class="form-group mb-2">
                    <i class="fa-solid fa-lock" style="color:#ac1004;"></i>&nbsp;
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" value="<?php if(isset($error)){
                      echo $confirmPassword; } ?>" name="confirmPass" required placeholder="Enter Your Password">
                  </div>
                  <div class="form-group mb-2">
                    <i class="fa-solid fa-user" style="color:#ac1004;"></i>&nbsp;
                    <label for=""  class="form-label">Role:</label>
                    <select class="form-select" name="Role" value="<?php if(isset($error)){
                      echo $role; } ?>"  aria-label="Default select example">
                        <option value="User" selected >User</option>
                        <!-- <option  value="User">User</option> -->
                    </select>
                  </div>
                  <div class="form-group mb-4">
                    <i class="fa-solid fa-image" style="color:#ac1004;"></i>&nbsp;
                    <label for="exampleInputPassword1" class="form-label">Upload Picture:</label>
                    <input type="file" class="form-control" id="exampleInputPassword1" name="picture" required placeholder="Enter Your Password">
                  </div>
                  <!-- <div class="form-check mt-4">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                  </div> -->
                  <div class="form-group mx-auto text-center">
                    <button class="btn Rbtn" type="submit" name="register">Register</button>
                  </div>
                </form>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</body>

</html>