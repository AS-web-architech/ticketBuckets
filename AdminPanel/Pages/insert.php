<?php

include('Config.php');
session_start();
if(isset($_POST['add'])){
    // $id=$_POST['movie-id'];
    $movieName =$_POST['movieTitle'];
    $movieGenre =$_POST['genre_type'];
    $movieYear =$_POST['year'];
    $movieDuration =$_POST['duration'];
    // print_r($_POST);
    $insert="INSERT INTO movie (`movieTitle`,`genre_type`,`release`,`duration`) VALUES 
    ('$movieName','$movieGenre','$movieYear','$movieDuration') ";

    $result = mysqli_query($conn,$insert);
    if($result){
        echo "<script>alert(data inserted successfully)</script>";
    }
    else{
        echo "<script>alert(data not inserted successfully)</script>";
        
    }
}














?>