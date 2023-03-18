<?php
include('Config.php');
session_start();
// if(isset($_POST['del_movie_data'])){

//     if(isset($_POST['delete_check'])){
//       foreach($_POST['delete_check'] as $deleteid){
  
//         $deleteUser = "DELETE FROM registration WHERE 'register-id' = ".$deleteid;
//         $del_query=mysqli_query($conn,$deleteUser);
//         if($del_query){

//             // echo "<script>window.location.href='Users.php'</script>";
//             echo "<script>alert(your data has been  deleted successfully)</script>";
//         }else{
//             echo "<script>alert(error)</script>";
 
//         }
//       }
//     }
   
//   }
if(isset($_POST['del_movie_data'])){
    $all_id=$_POST['deleteMovie'];
    $extract_id=implode(',',$all_id);
    // echo $extract_id;
    $del_query="DELETE FROM `movie` WHERE `movie-id` IN($extract_id)"; 
    $del_query_run=mysqli_query($conn,$del_query);
    if($del_query_run){
       $_SESSION['status']="your data deleted successfully";
       echo "<script>window.location.href='Movies.php'</script>";
    }
    
    else{
        $_SESSION['status']="can't delet data some error occuured";
        echo "<script>window.location.href='Movies.php'</script>";
    }
}

?>