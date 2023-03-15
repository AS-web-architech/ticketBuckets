<?php
session_start();
include('./config.php');
include('./scripts.php');
include('./bootstrap.php');

if(isset($_POST['UserLogin'])){
    $UserEmail=mysqli_real_escape_string($conn,$_POST['email']);
    $UserPassword=mysqli_real_escape_string($conn,$_POST['Apassword']);

      $login="SELECT * FROM registration WHERE email='$UserEmail' AND Apassword = '$UserPassword'";
      $login_query_run=mysqli_query($conn,$login);
      $loginData=mysqli_num_rows($login_query_run);
      if($loginData)
      {
        $email_pass=mysqli_fetch_assoc($login_query_run);
        $db_pass=$email_pass['Apassword'];
        
        $_SESSION['full_name']=$email_pass['full_name'];
        $_SESSION['picture']=$email_pass['picture'];
        if($db_pass){
            echo "<script>window.location.href='/ticketBuckets/UserPanel/index.php';</script>";
        }else{
            echo "<script>window.location.href='./UserLogin.php';</script>";
        }

      }
      else{
        $_SESSION['message']="invalid Credentials";
        echo "<script>window.location.href='./UserLogin.php'</script>";
      }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="../Assets/css/UForm.css"> -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="../Assets/css/Ubackg.css"> -->
    <link rel="stylesheet" href="../Assets/css/LForm.css">
</head>
<body class="animation-area">
    <!-- <ul class="box-area">
        <li><img src="../Assets/images/tb-logo.png" alt=""></li>
        <li><img src="../Assets/images/tb-logo.png" alt=""></li>
        <li><img src="../Assets/images/tb-logo.png" alt=""></li>
        <li><img src="../Assets/images/tb-logo.png" alt=""></li>
        <li><img src="../Assets/images/tb-logo.png" alt=""></li>
        <li><img src="../Assets/images/tb-logo.png" alt=""></li>
     </ul> -->
    <div class="container-fluid">
	   <img src="../Assets/images/Lwave.PNG" class="wave" alt="">
       <div class="container pt-1 pb-1">
           <div class="row g-0  align-items-center">
               <div class="col-6 .col-sm-3 col1">
                  <div class="card mb-3 card1" style="max-width: 540px;">
                       <!-- <div class="img"> -->
			                <img  class="img rounded-start"  src="../Assets/images/Lbg.PNG">
		               <!-- </div> -->
                  </div>
               </div>
               <div class="col-6 .col-sm-3 col2">
                  <div class="card card2 content2" style="max-width:540px;">
                    <div class="card-body cbody2">
                        <h3 class="mb-3">LOGIN TO YOUR ACCOUNT</h3>
                        <?php
                           if(isset($_SESSION['message'])){
                        ?>
                        <div class="alert alert-warning" role="alert">
                            <strong><?php $_SESSION['message'];?></strong>
                        </div>
                        <?php
                           unset($_SESSION['message']);
                         } 
                        ?>  
                          <form action="./UserLogin.php" method="post">
                              <img class="mb-3"  src="../Assets/images/user5.png" alt="">
                              <div class="mb-3">
                                <i class="fas fa-user" style="color: #ac1004;"></i>&nbsp;
                                <label for="exampleInputEmail1" class="form-label label">Email address</label>
                                <input type="email" class="form-control input form-control-sm" name="email"  required placeholder="Enter Your Email">                                
                              </div>
                              <div class="mb-2">
                                <i class="fas fa-lock" style="color: #ac1004;"></i>&nbsp;
                                <label for="exampleInputPassword1" class="form-label label">Password</label>
                                <input type="password" class="form-control input form-control-sm" name="Apassword" required placeholder="Enter Your Password">                                
                              </div>
                              <div class="text-end mb-1 f-password">
                                <a href="#">Forgot Password?</a>
                              </div>
                              <div class=" form-check">
                                <input type="checkbox" name="remember" class="form-check-input" id="rememberCheckBox">
                                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                              </div>
                              <button type="submit" name="UserLogin" class="btn btn-primary">Login</button>
                              <div class="mt-2">
                                <p class="text-center f-password">
                                    Don't have an account?
                                    <a href="./UserRegister.php" name="register">Click here to register</a>
                                </p>
                              </div>
                          </form>
                        </div>
                   </div>
               </div>
            </div>
       </div>
		
	</div>
    <script type="text/javascript" src="../Assets/js/main.js"></script>
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</body>
</html>