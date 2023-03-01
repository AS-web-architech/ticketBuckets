<?php
$localhost="localhost";
$root="root";
$password="";
$db="mtb-data";

$conn = mysqli_connect($localhost, $root, $password, $db);
if($conn){
    echo "connection established";
}else{
    echo "error";
}

?>