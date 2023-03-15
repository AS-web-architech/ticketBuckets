<?php
include("Config.php");

if(isset($_POST['checkedId']) && isset($_POST['deleteAll'])){
  $checkedId = $_POST['checkedId'];
  $deleteMsg=deleteMultipleData($conn, $checkedId);

}
$fetchData = fetch_data($conn);

function fetch_data($conn){
  $query = "SELECT `register-id`, `full_name`, `email`, `Apassword`, `picture`, `role` FROM registration ";
  $result = $conn->query($query);

   if ($result->num_rows > 0) {
      $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
      $data= $row;
   } else {
      $data= []; 
   }
     return $data;
}

function deleteMultipleData($conn, $checkedId){
  
$checkedIdGroup = implode(',', $checkedId);
$delquery = "DELETE FROM registration WHERE 'register-id' IN ($checkedIdGroup)";
$result = mysqli_query($conn,$delquery);
if($result==true){
  return "Selected data was deleted successfully";
}

}
?>