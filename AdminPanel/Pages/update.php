<?php
  include('Config.php');
  session_start();
  if(isset($_POST['update'])){
    $id=$_POST['movie-id'];
    $movieName =$_POST['movieTitle'];
    $movieGenre =$_POST['genre_type'];
    $movieYear =$_POST['year'];
    $movieDuration =$_POST['duration'];
    // print_r($_POST);

    $update="UPDATE `movie` SET `movie-id`='[$id]',`movieTitle`='[$movieName ]',
    `genre_type`='[$movieGenre ]',
    `year`='[$movieYear]',`duration`='[$movieDuration]' WHERE movie-id=$id ";
    $queryrun=mysqli_query($conn,$update);
    if($queryrun > 0){
        $_SESSION['message']="data has been updated";
        echo "<script>window.location.href='Movies.php'</script>";
    }else{
    $_SESSION['message']="data not updated yet";
        echo "<script>window.location.href='Movies.php'</script>";
    }
  }  
    ?>
