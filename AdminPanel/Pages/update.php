<?php
  include('Config.php');
  session_start();
  if(isset($_POST['update'])){
    $id=$_POST['movie-id'];
    $movieName =$_POST['movieTitle'];
    $movieGenre =$_POST['genre_type'];
    $movieYear =$_POST['year'];
    $movieDuration =$_POST['duration'];
    $update="UPDATE `movie` SET `movieTitle`='$movieName ',
    `genre_type`='$movieGenre ',
    `release`='$movieYear',`duration`='$movieDuration' WHERE  movie_id=$id ";
    mysqli_query($conn,$update);
    
    if(mysqli_query($conn,$update)){
        $_SESSION['message']="data has been updated";
        echo "<script>window.location.href='Movies.php'</script>";
    }else{
    $_SESSION['message']="data not updated yet";
        echo "<script>window.location.href='Movies.php'</script>";
    }
  }  

    ?>