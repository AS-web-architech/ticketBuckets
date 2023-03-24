<?php
$title = 'THEATER | TICKET BUCKET';
include('scripts.php');
include('configg.php');

include('header.php');
<<<<<<< Updated upstream
=======

if(isset($_POST['booknow'])){
    if(!isset($_SESSION['login_user'])){
        echo "<script>alert('please login first 
        and if you don't have an account register yourself please')</script>";
        // echo "<script>window.location.href='../UserLogin.php'</script>";
        echo "<script>window.location.href='bookingForm.php'</script>";

    }
}



>>>>>>> Stashed changes
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< Updated upstream
    <title></title>
    <!-- <link rel="stylesheet" href="../Assets/css/theatre.css">     -->
  
=======
    <title>theatre.php</title>
    <link rel="stylesheet" href="../Assets/css/theatre.css">    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <!-- font link -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Averia+Serif+Libre:ital,wght@0,300;1,300;1,700&family=DM+Serif+Display:ital@1&family=Petit+Formal+Script&family=Tilt+Prism&display=swap" rel="stylesheet">
>>>>>>> Stashed changes
</head>
<body>
    <br><br><br><br><br><br>

        
        <div class="user-l text-center mt-3">
        <h2 class="text-center mt-5"><b>AVAILABLE MOVIES </b><i class="fa-solid fa-projector fa-beat"></i></h2>
               
   </div>
<hr>
<form action="theatre.php" method="POST">
        <div class="row justify-content-center">
            <?php
            // $select1="SELECT release ,description, "
            $movie_data= "SELECT * from theatre";
            
            
            $data = mysqli_query($conn, $movie_data);
            
            while($movie_data= mysqli_fetch_assoc($data)){
    
                
            // $data = mysqli_query($conn,"SELECT * from theatre");
                    
            // while ($data){





            ?>
 <div class="container py-3">
  <!-- Card Start -->
  <div class="card">
      <div class="row ">
        <div class="col-md-5">
          <div id="CarouselTest" class="carousel slide" data-ride="carousel">
            
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block" src="../Assets/images/moviecard/<?php echo $movie_data['movie-pic'] ?>"style="height:100%;width:100%" alt="">
              </div>
              
    
            </div>
          </div>
        </div>
        <!-- End of carousel -->

<<<<<<< Updated upstream
    </div><br><br><br>

<?php
include("footer.php");
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
=======
      <div class="col-md-7 px-3">
        <div class="card-block px-6">
          <h2 class="card-title text-dark" style="font-family: 'Alkatra', cursive;"><?php echo $movie_data['movieTitle'] ?> </h2>
          <h5 class="card-text text-large text-muted" style="font-family: 'Alkatra', cursive;">
          <?php echo $movie_data['description'] ?>
          <h5 class="card-text">
            <h6>Country:</h6>
             <b class="text-success"> <?php echo $movie_data['country'] ?> </b><br>
             <h6>Location:</h6>
             <large class="text-info"><?php echo $movie_data['Location'] ?></large><br>
             <h6>theatre Name:</h6>
             <b class="text-primary "><?php echo $movie_data['theater-title'] ?></b><br><br>
             <h6>Show Date:</h6>
             <small class="text-danger"><?php echo $movie_data['showdate'] ?></small><br>
             <h6>Show Day:</h6>
             <small class="text-danger"><?php echo $movie_data['showtime'] ?></small><br>
          <br>
          <button  type="submit" name="booknow" class="mt-auto btn btn-danger  ">Book Now</button>
        </div>
      </div>
      <!-- Carousel start -->
    </div>
  </div>
  <!-- End of card -->

</div>
</form>
<?php }?>
>>>>>>> Stashed changes
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>
