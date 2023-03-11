<?php
include("./Pages/Config.php");
session_start();


if (isset($_POST['login'])) {

    $useremail = $_POST['email'];
    $password = $_POST['Apassword'];
    
    $login = "SELECT * FROM registration WHERE email = '$useremail' AND  Apassword = '$password' ";

    $data = mysqli_query($conn, $login);
    $row = mysqli_fetch_assoc($data);
    $AdminName = $row['full_name'];
    $role = $row['role']; 
    $admin_pic = $row['picture'];
    print_r($row);
if ($useremail == $row AND $password == $row   ) {
    echo "<script>alert(' Login failed !')</script>";
    echo "<script>window.location.href = 'adminlogin.php';</script>";

} else
{
    $_SESSION['email'] = $useremail;
    $_SESSION['role'] = $role;
    $_SESSION['picture'] = $admin_pic;
    echo "<script>alert('Login Successfully!')</script>";
    echo "<script>window.location.href ='./index.php';</script>"; 
 
}
}

// if(isset($_POST['remember'])){
//     setcookie('email',$_POST['email'],time()+4000);
//     setcookie('Apassword',$_POST['Apassword'],time()+4000);
//     echo "cookies are set";
// }
// else{
//     echo "cookies are not set";
// }







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/instyle.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  

</head>
<body >
    <div class="container admin-container">
        <div class="row">
    <div class="col-12 col-md-12 col-lg-6 col-xl-6 m-auto " >

   <div class="login-card-light p-3 shadow-lg rounded">
            <div class="pt-3">
                <h2 class="text-danger text-center">Admin | Sign In </h2>
            </div>

            <form class="mt-5 my-login-form" action="adminlogin.php" method="post">
                <div class="form-group">
                    <input type="email" 
                         class="form-control form-control-sm" required
                     name="email"  value="<?php  if(isset($_COOKIE['email'])){echo $_COOKIE['email'];} ?>"   placeholder="Email Id">
                 </div>

                <div class="form-group">
                    <input type="password" 
                        class="form-control form-control-sm" required
                      name="Apassword"  value="<?php if(isset($_COOKIE['Aassword'])){echo $_COOKIE['Apassword'];}?>" placeholder="Password">
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="remember" class="form-check-input" id="rememberCheckBox">
                    <label class="form-check-label text-dark"  for="rememberCheckBox">Remember me?</label>
                </div>

                <div class="mt-5">
                    <button name="login" type="submit" class="btn btn-sm btn-danger col  ">
                        Login
                    </button>
  
  
                </div>

                <div class="text-center mt-2 f-password">
                    <a href="#">Forgot Password?</a>
                </div>
                
                <div class="mt-5">
                    <p class="text-center f-password">
                        Don't have an account?
                        <a href="./Pages/adminregister.php" name="register">Click here to register</a>
                    </p>
                </div>
            </form>
        </div>
        </div>
        </div>
    </div>


        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
</body>
</html>