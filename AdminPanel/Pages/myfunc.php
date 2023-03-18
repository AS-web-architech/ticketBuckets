<?php
include('Config.php');
function getAll($table){
   global $conn;
   $query="SELECT * FROM $table ";
   return $query_run=mysqli_query($conn,$query);
}
function getById($table,$table_id){
  global $conn;
  $query="SELECT * FROM $table where $table_id=''";
  return $query_run=mysqli_query($conn,$query);
  
}



?>