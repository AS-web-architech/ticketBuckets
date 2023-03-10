<?php
include("scripts.php");
include("Config.php");
// if(isset($_POST["register"])){
//     $adminName=$_POST["Aname"];
//     $adminEmail=$_POST["Aemail"];
//     $adminPassword=$_POST["Apassword"];
//     $role=$_POST['role']
//     $insert = "INSERT INTO registration(`full_name`, `email`, `Apassword`, `picture`, `role`) 
//     VALUES 
//    ( '$adminName' , '$adminEmail','$adminPassword','','$role')";
// if (mysqli_query($conn, $insert)) {
   
//     echo "<script>alert('you have successfully signin ')</script>";
//     echo "<script>alert('please login your account')</script>";

//     echo "<script>window.location.href = 'loginform.php';</script>"; 

// } else 
// {

//     echo "<script>window.location.href = 'signup.php';</script>"; 
//     echo "sigup failed !";
// }
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style2.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"> -->

</head>
<body>
<div class="container d-flex justify-content-center align-items-center">
    <div class="card">
        <div class="row">
            <div class="col-md-6">
                <form action="">
                <div class="form">
                    <h2>Registration</h2>
                    <div class="inputbox mt-3"> <span>full Name</span> <input type="text" placeholder="Name" name="Aname" class="form-control"> </div>
                    <div class="inputbox mt-3"> <span>Email</span> <input type="email" placeholder="Email" name="Aemail" class="form-control"> </div>
                    <div class="inputbox mt-3"> <span>Password</span> <input type="password" placeholder="Email" name="Apassword" class="form-control"> </div>
                    <div class="inputbox mt-3"> <span>role:</span></div>
                    <select class="form-select" aria-label="Default select example">
                    <option selected  name="role"></option>
                    <option value="1"><img src="" alt="">Admin</option>
                    </select>
                      <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    profile
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Choose profile</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <ul class="d-flex ">
                                <li class="px-2"><a href=""> <img src="../assets/images/userdp.png" alt="" style="height:60px;width:60px;"></a></li>
                                <li><a href=""> <img src="../assets/images/user3.png" alt="" style="height:60px;width:60px;"></a></li>

                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">choose</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-right mt-3"> 
                            <button class="btn btn-success register btn-block" name="register">Register</button>
                         </div> <a href="../../adminlogin.php" class="login">Login</a>
                    </div>
                    <div class="form-check mt-2"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> I agree to the terms and conditions of <a href="" class="login">Privacy & Policy</a> </label> </div>
            
                </div>
                </form>
            </div>

            <div class="col-md-6">
                <div class="text-center mt-5"> <img src="../assets/images/register.svg
                " width="400"> </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>