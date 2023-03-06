<?php 
include 'Config.php';
$ID = $_GET['id'];
$delquery = "DELETE FROM registration WHERE register_id = '$ID' ";

if(mysqli_query($conn,$delquery)){

header("location:Users.php");

} else{
    echo "error";

}

########################## MOVIE #########################
$ID = $_GET['Mid'];
$delquery = "DELETE FROM movie WHERE movie_id = '$ID' ";

if(mysqli_query($conn,$delquery)){

header("location:Movies.php");

} else{
    echo "error";

}

########################## THEATER #########################
$ID = $_GET['Tid'];
$delquery = "DELETE FROM theatre WHERE theater_id = '$ID' ";

if(mysqli_query($conn,$delquery)){

header("location:Theaters.php");

} else{
    echo "error";

}

########################## BOOKING #########################
$ID = $_GET['Bid'];
$delquery = "DELETE FROM booking WHERE booking_id = '$ID' ";

if(mysqli_query($conn,$delquery)){

header("location:booking.php");

} else{
    echo "error";

}
?>