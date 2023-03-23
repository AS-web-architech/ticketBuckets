<?php
session_start();
include('configg.php');
session_destroy();
// echo "<script>window.location.href='./adminlogin';</script>;"

header('location:../UserLogin.php');



?>