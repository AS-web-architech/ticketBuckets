<?php

include('Config.php');
session_start();
if(isset($_POST['insert'])){
    $img=$_FILES['movie-image'];
    $img_name=$_FILES['movie-image']['name'];
    $img_tempname=$_FILES['movie-image']['tmp_name'];
    $path="../assets/images/uploads/movies".$img_name;
    move_uploaded_file($img_tempname,$path);
    $movieName =$_POST['movieTitle'];
    $movieGenre =$_POST['genre_type'];
    $movieYear =$_POST['year'];
    $movieDuration =$_POST['duration'];
    $moviedescrip =$_POST['description'];
    $trailers =$_POST['trailers'];
       
   $add="  INSERT INTO `movie`(`movieTitle`, `movie_pic`, `Movie_Trailers`,
     `genre_type`, `release`, `duration`, `description`) 
    VALUES ('$movieName','$img_name','$trailers','$movieGenre','$movieYear',
    '$movieDuration','$moviedescrip')";
   $query= mysqli_query($conn,$add);
    
    if($query){
        $_SESSION['message']="data has been inserted";
        echo "<script>window.location.href='Movies.php'</script>";
    }else{
        $_SESSION['message']="data not inserted yet";
        echo "<script>window.location.href='Movies.php'</script>";
    }
}
if(isset($_POST['th_insert'] )){
    $theatreName =$_POST['theater-title'];
    $country =$_POST['country'];
    $hall1 =$_POST['Hall-1'];
    $hall2 =$_POST['Hall-2'];
    $hall3 =$_POST['Hall-3'];
    $capacity =$_POST['capacity'];
    $location =$_POST['Location'];
    $insert="INSERT INTO `theatre`( `theater-title`, `country`, `Hall-1`, `Hall-2`, `Hall-3`, `capacity`, `Location`)
     VALUES ('$theatreName','$country','$hall1','$hall2',
    '$hall3','$capacity','$location')  ";
     $query= mysqli_query($conn,$insert);
    
     if($query){
         $_SESSION['message']="data has been inserted";
         echo "<script>window.location.href='Theaters.php'</script>";
     }else{
         $_SESSION['message']="data not inserted yet";
         echo "<script>window.location.href='Theaters.php'</script>";
     }
}














?>