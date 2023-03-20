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

  if(isset($_POST['th_update'])){
    $id=$_POST['theater_id'];
    $theatreName =$_POST['theater-title'];
    $country =$_POST['country'];
    $hall1 =$_POST['Hall-1'];
    $hall2 =$_POST['Hall-2'];
    $hall3 =$_POST['Hall-3'];
    $capacity =$_POST['capacity'];
    $location =$_POST['Location'];

    $update="UPDATE `theatre` SET `theater-title`='$theatreName',`country`='$country',`Hall-1`='$hall1',`Hall-2`='$hall3',
    `Hall-3`='$hall3',`capacity`='$capacity',`Location`='$location ' WHERE theater_id=$id  ";
    mysqli_query($conn,$update);
    
    if(mysqli_query($conn,$update)){
        $_SESSION['message']="data has been updated";
        echo "<script>window.location.href='Theaters.php'</script>";
    }else{
    $_SESSION['message']="data not updated yet";
        echo "<script>window.location.href='Theaters.php'</script>";
    }
  }
    ?>