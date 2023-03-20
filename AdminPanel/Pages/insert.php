<?php

include('Config.php');
session_start();
if(isset($_POST['insert'])){
    $img=$_FILES['movie-image'];
    $img_name=$_FILES['movie-image']['name'];
    $img_tempname=$_FILES['movie-image']['tmp_name'];
    // print_r($img_name);
    // print_r($img_tempname); 
    $path="../assets/images/uploads/".$img_name;
    move_uploaded_file($img_tempname,$path);
    
    $movieName =$_POST['movieTitle'];
    $movieGenre =$_POST['genre_type'];
    $movieYear =$_POST['year'];
    $movieDuration =$_POST['duration'];
    $moviedescrip =$_POST['description'];
    $trailers =$_POST['trailers'];
    // $insert="INSERT INTO `movie`( `movieTitle`, `movie_pic`, `Movie_Trailers`, `genre_type`, `release`, `duration`, `description`) VALUES
    //  ('$movieName ','$img_name','$trailers','$movieGenre','$movieYear','$movieYear','$movieDuration','$moviedescrip')";
    
   $add="  INSERT INTO `movie`(`movieTitle`, `movie_pic`, `Movie_Trailers`,
     `genre_type`, `release`, `duration`, `description`) 
    VALUES ('[$movieName]','[$img_name ]','[$trailers]','[$movieGenre ]','[$movieYear]',
    '[$movieDuration]','[$moviedescrip]')";
   $query= mysqli_query($conn,$add);
    // print_r($img);
    if($query){
        $_SESSION['message']="data has been inserted";
        echo "<script>window.location.href='Movies.php'</script>";
    }else{
    $_SESSION['message']="data not inserted yet";
        echo "<script>window.location.href='Movies.php'</script>";
    }
}














?>