<?php include('Config.php');
include("scripts.php");
	$Query2=mysqli_query($conn,"SELECT * from `movie` where movie_id='".$_GET['id']."'");
	$movie=mysqli_fetch_array($Query2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/about.css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-6 col-md-12">
            
              
        </div>
    </div>
</div>
</body>
</html>