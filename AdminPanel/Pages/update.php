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
    `picture`= '$picture', `Urole`= '$Urole' WHERE register_id = '$register_id'";

    if(mysqli_query($conn,$update)){
      echo "<script>alert('Data Updated Successfully!')</script>";
    header("location:Users.php");
    
    } else{
        echo "<script>alert('Data Not Update yet!')</script>";
    
    }
}






?>