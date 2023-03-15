<?php
include('Config.php');
session_start();
if(isset($_POST['del_movie_data'])){

    foreach(array($_POST['delete_check']) as $dataId){
        $del_query="DELETE FROM registration WHERE register-id='$dataId'";
        $del_query_run=mysqli_query($conn,$del_query);
    
        if($del_query_run){
            echo "<script>window.location.href='Users.php'</script>";
        }else{
            echo "<script>alert(can't delete data some error occourrd)</script>";
        }
    }
}

?>