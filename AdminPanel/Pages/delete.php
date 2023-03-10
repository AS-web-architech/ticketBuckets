<<<<<<< Updated upstream
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
=======
<?php
include('Config.php');
session_start();
if(isset($_POST['del_movie_data'])){
    $all_id=$_POST["deleteMovie"];
    // $extract_id=implode(',' , $all_id);
    echo $all_id;
    // $del_query="DELETE FROM movie WHERE movie-id IN($extract_id) ";
    // $query_run=mysqli_query($conn,$del_query);
    // if($query_run){
    //     echo "<script>window.location.href='Movies.php'</script>";
    //     echo "<script>alert('data deleted successfully ')</script>";
    // }
    // else{
    //     echo "<script>window.location.href='Movies.php'</script>";
    //     echo "<script>alert('data is not deleted yet ')</script>";
    // }
}


>>>>>>> Stashed changes
?>