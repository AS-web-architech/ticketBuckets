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


?>