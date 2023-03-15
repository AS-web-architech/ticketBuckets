<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../Assets/css/index.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<div class="container cont1">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <video autoplay loop muted controls  src="../Assets/videos/Free_Guy.mp4"></video>
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>
    <div class="carousel-item">
    <video autoplay loop muted controls  src="../Assets/videos/Light Outmp4.mp4"></video>
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>
    <div class="carousel-item">        
      <video autoplay loop muted controls  src="../Assets/videos/The Baby Bosss.mp4"></video>
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <div class="row">
          <div class="col-md-12">
            <ul>
              <li class="colm" onclick="videoslider('../Assets/videos/Free_Guy.mp4')">
                <video src="../Assets/videos/Free_Guy.mp4"></video>
             </li>
              <li onclick="videoslider('../Assets/videos/Light Outmp4.mp4')">
                <video src="../Assets/videos/Light Outmp4.mp4"></video>
             </li>
              <li onclick="videoslider('../Assets/videos/The Baby Bosss.mp4')">
                <video src="../Assets/videos/The Baby Bosss.mp4"></video>
              </li>
            </ul>
          </div>
       </div>
</div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>