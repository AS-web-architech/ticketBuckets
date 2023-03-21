<?php
// session_start();
// include('./index2.php');
include("./Pages/configg.php");
include("./Pages/scripts.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Style CSS -->
  <link rel="stylesheet" href="./Assets/css/index.css">
  <!-- CARDS -->
  <link rel="stylesheet" href="./Assets/css/card.css">
  <!-- MOVIES CARDS -->
  <link rel="stylesheet" href="./Assets/css/moviecard.css">
  <!-- SWIPER CDN -->
  <link rel="stylesheet" href="./Assets/css/swiper.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <!-- BOOTSTRAP CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <title>Document</title>
</head>
 <body >
  
 <div class="container-fluid main-cont  mb-5" style="border: 2px solid green;">

    <div id="carouselExampleCaptions" class="carousel slide bgcarousel" data-bs-ride="carousel">
      <div class="carousel-indicators carousel-ind mb-5">
        <button class="indbtn" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" 
        class="active" aria-current="true" aria-label="Slide 1">
        <img src="./Assets/Images/MovieBg/freeguy.png" alt="" class="d-block w-100 img-fluid">
        </button>
        <button class="indbtn" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" 
        aria-label="Slide 2"><img src="./Assets/Images/MovieBg/Annabelle_Creation.PNG" alt="" 
        class="d-block w-100 img-fluid">
        </button>
        <button class="indbtn" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" 
        aria-label="Slide 3"><img src="./Assets/Images/MovieBg/super mario.jpg" alt="" 
        class="d-block w-100 img-fluid">
        </button>
        <button class="indbtn" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" 
        aria-label="Slide 4"><img src="./Assets/Images/MovieBg/knives.jpg" alt="" 
        class="d-block w-100 img-fluid">
        </button>
      </div>
      <div class="carousel-inner">
     
        <div class="carousel-item Citem1 active">
          <!-- <img src="..."  alt="..."> -->
          <form action="modal.php" method="post">
            <video playsinline autoplay muted loop poster="Trailer.jpg">
              <source src="<?php echo $Show_Video['Movie_Trailers'] ?>" type="vi">
            </video>
          </form>
          <?php
           $query = "SELECT `movieTitle`, `Movie_Trailers`, `genre_type`,  `release`, `duration`, `description` FROM 
           `movie` WHERE `movie_id`=(12)"; 
           $data = mysqli_query($conn, $query);
           //  return $data;
       
              while ($Show_Video = mysqli_fetch_array($data)){         
          ?>
          <!-- <div class="carousel-caption"> -->
            <div class="container mb-5" style="height:56vh;margin-bottom:10rem;border:1px solid green;">
              <div class="row mb-5 pb-5">
                <!-- CARDS COLUMN -->
                <div class="col-6 col-md-6" >
                  <div class="card" style="background: transparent;border:none;">
                    <div class="card-body">
                      <a href="#" alt="Annabelle" target="_blank">
                        <div class="cardo mb-5 mt-0" style="border-radius: 60px;">
                          <div class="wrapper">
                            <img src="./Assets/Images/moviecard/FREE_GUY.jpg" class="cover-image" />
                          </div>
                          <img src="./Assets/Images/moviecard/free guy title.png" class="img-title" />
                          <img src="./Assets/Images/moviecard/free guy character.png" class="character" />
                        </div>
                      </a>
                    </div>
                  </div>
                </div>        
                <!-- CONTENT COLUMN -->
                <div class="col-6 col-md-6">
                  <div class="card content1" style="background: transparent;border:none;">
                    <div class="card-body">
                      <div class="button mb-3">
                        <a class="btn1" style="border-radius: 25px;"><?php echo $Show_Video["genre_type"] ?>
                        </a>&nbsp;&nbsp;<a class="btn1" style="border-radius: 25px;">Comedy</a><br>
                      </div>
                      <!-- <h1 class="card-title text-bold"><img src="./Assets/videos/free guy title.png" alt=""><span style="color: #1192E8;">Guy</span> </h1> -->
                      <img src="./Assets/images/free guy title.png" class="card-img img-responsive mb-2" alt="">&nbsp;
                      <!-- <h1 class="card-title text-bold"><?php echo $Show_Video["movieTitle"] ?></h1> -->
                        <ul class="text-small" style="font-size: 13px;">
                          <li style="float:left;"><?php echo $Show_Video["duration"] ?></li>
                          <li style="margin-left: 7.6rem;"><?php echo $Show_Video["release"] ?></li>
                          <!-- <li></li> -->
                        </ul>
                      <p class="card-text"><?php echo $Show_Video["description"] ?></p>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Watch Trailer &nbsp;<i class='uil uil-play'></i></button>&nbsp;&nbsp;
                    
                      <button class="btn btn-primary">Book Now &nbsp;<i class="uil uil-ticket"></i></button>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          <!-- </div> -->
          <?php }  ?>
        </div>
        <!-- <div class="carousel-item Citem1">
          <img src="..."  alt="...">
          <?php
          //   $query = "SELECT `movieTitle`, `Movie_Trailers`, `genre_type`,  `release`, `duration`, `description` FROM 
          //            `movie` WHERE `movie_id`=(7)";
          //  $data = mysqli_query($conn, $query);
          //  return $data;
      
          //    while ($Show_Video = mysqli_fetch_array($data)){
                
         ?>
          <video playsinline autoplay muted loop poster="Trailer.jpg">
            <source src="./Assets/videos/<?php echo $Show_Video["Movie_Trailers"] ?>" type="video/mp4">
          </video>
          <div class="carousel-caption">
            <div class="container mb-5" style="height:56vh;margin-bottom:10rem;border:1px solid green;">
              <div class="row mb-5 pb-5">
                <div class="col-3 col-md-6" style="border: 1px solid red;width:24%;height:56vh;position:relative;">
                  <div class="card" style="background: transparent;border:none;">
                    <div class="card-body">
                      <a href="#" alt="Annabelle" target="_blank">
                        <div class="cardo" style="border-radius: 60px;">
                          <div class="wrapper">
                            <img src="./Assets/Images/moviecard/HD-wallpaper-annabelle-creation-beautiful-girl.jpg" class="cover-image" />
                          </div>
                          <img src="./Assets/Images/moviecard/Annabelle-Logo-PNG-Pic.png" class="img-title" />
                          <img src="./Assets/Images/moviecard/Annabelle_Character.png" class="character" />
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-3 col-md-6"style="width:60%;height:56vh;border: 1px solid red;">
                  <div class="card content1" style="background: transparent;border:none;">
                    <div class="card-body">
                      <div class="button mb-3">
                        <a class="btn1" style="border-radius: 25px;"><?php echo $Show_Video["genre_type"] ?>
                        </a>&nbsp;&nbsp;<a class="btn1" style="border-radius: 25px;">Thriller</a><br>
                      </div>
                      <h1 class="card-title text-bold" ><?php echo $Show_Video["movieTitle"] ?><span style="color: #a90101;">CREATION</span> </h1>
                     
                     
                       <ul class="text-small" style="font-size: 13px;">
                          <li style="float:left;"><?php echo $Show_Video["duration"] ?></li>
                          <li style="margin-left: 7.6rem;"><?php echo $Show_Video["release"] ?></li>
                          <li></li>
                        </ul>
                      <p class="card-text"><?php echo $Show_Video["description"] ?></p>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#annabelemodal">
                        Watch Trailer &nbsp;<i class='uil uil-play'></i></button>&nbsp;&nbsp;
                    
                      <button class="btn btn-primary">Book Now &nbsp;<i class="uil uil-ticket"></i></button>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          </div>
        </div> -->
        <div class="carousel-item Citem1">
          <!-- <img src="..."  alt="..."> -->
          <?php
            $query = "SELECT `movieTitle`, `Movie_Trailers`, `genre_type`,  `release`, `duration`, `description` FROM 
                     `movie` WHERE `movie_id`=(15)";
           $data = mysqli_query($conn, $query);
          //  return $data;
      
             while ($Show_Video = mysqli_fetch_array($data)){
                
         ?>
          <video playsinline autoplay muted loop poster="Trailer.jpg">
            <source src="./Assets/videos/The Super Mario Bros_Trim.mp4" type="video/mp4">
          </video>
          <div class="carousel-caption">
            <div class="container mb-5" style="height:56vh;margin-bottom:10rem;border:1px solid green;">
              <div class="row mb-5 pb-5">
                <div class="col-3 col-md-6" style="border: 1px solid red;width:24%;height:56vh;position:relative;">
                  <div class="card" style="background: transparent;border:none;">
                    <div class="card-body">
                     <a href="#" alt="Mario" target="_blank">
                        <div class="cardo">
                          <div class="wrapper">
                            <img src="./Assets/Images/moviecard/Mario Bros1.jpg" class="cover-image" />
                          </div>
                          <img src="./Assets/Images/moviecard/the_super_mario_bros title.png" class="img-title mb-4" />
                          <img src="./Assets/Images/moviecard/mari caharacter.png" class="character" />
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-3 col-md-6"style="width:60%;height:56vh;border: 1px solid red;">
                  <div class="card content1" style="background: transparent;border:none;">
                    <div class="card-body">
                     <div class="button mb-3">
                        <a class="btn1" style="border-radius: 25px;"><?php echo $Show_Video["genre_type"] ?>
                        </a>&nbsp;&nbsp;<a class="btn1" style="border-radius: 25px;">Adventure</a><br>
                      </div>
                      <!-- <h1 class="card-title text-bold"><img src="./Assets/videos/free guy title.png" alt=""><span style="color: #1192E8;">Guy</span> </h1> -->
                      <!-- <img src="./Assets/videos/free guy title.png" class="card-img img-responsive mb-2" alt="">&nbsp; -->
                      <h1 class="card-title text-bold"><?php echo $Show_Video["movieTitle"] ?></h1>
                       <ul class="text-small" style="font-size: 13px;">
                          <li style="float:left;"><?php echo $Show_Video["duration"] ?></li>
                          <li style="margin-left: 7.6rem;"><?php echo $Show_Video["release"] ?></li>
                          <!-- <li></li> -->
                        </ul>
                      <p class="card-text"><?php echo $Show_Video["description"] ?></p>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mariomodal">
                        Watch Trailer &nbsp;<i class='uil uil-play'></i></button>&nbsp;&nbsp;
                    
                      <button class="btn btn-primary">Book Now &nbsp;<i class="uil uil-ticket"></i></button>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          </div>
          <?php }  ?>
        </div>
        <div class="carousel-item Citem1">
          <!-- <img src="..."  alt="..."> -->
          <?php
            $query = "SELECT `movieTitle`, `Movie_Trailers`, `genre_type`,  `release`, `duration`, `description` FROM 
                     `movie` WHERE `movie_id`=(3)";
           $data = mysqli_query($conn, $query);
          //  return $data;
      
             while ($Show_Video = mysqli_fetch_array($data)){
                
         ?>
          <video playsinline autoplay muted loop poster="Trailer.jpg">
            <source src="./Assets/videos/<?php echo $Show_Video["Movie_Trailers"] ?>" type="video/mp4">
          </video>
          <div class="carousel-caption">
            <div class="container mb-5" style="height:56vh;margin-bottom:10rem;border:1px solid green;">
              <div class="row mb-5 pb-5">
                <div class="col-3 col-md-6" style="border: 1px solid red;width:24%;height:56vh;position:relative;">
                  <div class="card" style="background: transparent;border:none;">
                    <div class="card-body">
                     <a href="#" alt="Mario" target="_blank">
                        <div class="cardo">
                          <div class="wrapper">
                            <img src="./Assets/Images/moviecard/Knive Out.PNG" class="cover-image" />
                          </div>
                          <img src="./Assets/Images/moviecard/knives title.png" class="img-title" />
                          <img src="./Assets/Images/moviecard/knive character.png" class="character" />
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-3 col-md-6"style="width:60%;height:56vh;border: 1px solid red;">
                  <div class="card content1" style="background: transparent;border:none;">
                    <div class="card-body">
                     <div class="button mb-3">
                        <a class="btn1" style="border-radius: 25px;"><?php echo $Show_Video["genre_type"] ?>
                        </a>&nbsp;&nbsp;<a class="btn1" style="border-radius: 25px;">Crime</a><br>
                      </div>
                      <!-- <h1 class="card-title text-bold"><img src="./Assets/videos/free guy title.png" alt=""><span style="color: #1192E8;">Guy</span> </h1> -->
                      <!-- <img src="./Assets/videos/free guy title.png" class="card-img img-responsive mb-2" alt="">&nbsp; -->
                      <h1 class="card-title text-bold"><?php echo $Show_Video["movieTitle"] ?></h1>
                       <ul class="text-small" style="font-size: 13px;">
                          <li style="float:left;"><?php echo $Show_Video["duration"] ?></li>
                          <li style="margin-left: 7.6rem;"><?php echo $Show_Video["release"] ?></li>
                          <!-- <li></li> -->
                        </ul>
                      <p class="card-text"><?php echo $Show_Video["description"] ?></p>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#knivesoutmodal">
                        Watch Trailer &nbsp;<i class='uil uil-play'></i></button>&nbsp;&nbsp;
                    
                      <button class="btn btn-primary">Book Now &nbsp;<i class="uil uil-ticket"></i></button>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          </div>
          <?php }  ?>
        </div>
        
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- MODAL VIDEO -->
    <?php
            $query = "SELECT * FROM `movie` WHERE `movie_id`=(12)";
           $data = mysqli_query($conn, $query);
          //  return $data;
      
             while ($Show_Video = mysqli_fetch_array($data)){
              $title = $Show_Video['movieTitle'];
              $trailer = $Show_Video['Movie_Trailers'];
              $result = str_replace('watch?v=', 'embed/', $trailer);
         ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="text-transform:uppercase;"><?php echo $title ?> MOVIE TRAILER</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <iframe width="100%" height="400" style="object-fit: cover;" src="<?php echo $result ?>" 
            allow="accelerometer; autoplay; encrypted-media;gyroscope; picture-in-picture" 
            allowfullscreen frameborder="0"></iframe>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-dange" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>
    <?php } ?>
    <?php
            $query = "SELECT * FROM `movie` WHERE `movie_id`=(7)";
           $data = mysqli_query($conn, $query);
          //  return $data;
      
             while ($Show_Video = mysqli_fetch_array($data)){
              $title = $Show_Video['movieTitle'];
              $trailer = $Show_Video['Movie_Trailers'];
              $result = str_replace('watch?v=', 'embed/', $trailer);
         ?>
    <div class="modal modal2 fade" id="annabelemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?php echo $title.''."CREATION" ?> MOVIE TRAILER</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <iframe width="100%" height="400" style="object-fit: cover;" src="<?php echo $result ?>" 
            allow="accelerometer; autoplay; encrypted-media;gyroscope; picture-in-picture" 
            allowfullscreen frameborder="0"></iframe>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-dange" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>
    <?php } ?>
    <?php
            $query = "SELECT * FROM `movie` WHERE `movie_id`=(15)";
           $data = mysqli_query($conn, $query);
          //  return $data;
      
             while ($Show_Video = mysqli_fetch_array($data)){
              $title = $Show_Video['movieTitle'];
              $trailer = $Show_Video['Movie_Trailers'];
              $result = str_replace('watch?v=', 'embed/', $trailer);
         ?>
    <div class="modal fade" id="mariomodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?php echo $title ?> MOVIE TRAILER</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <iframe width="100%" height="400" style="object-fit: cover;" src="<?php echo $result ?>" 
            allow="accelerometer; autoplay; encrypted-media;gyroscope; picture-in-picture" 
            allowfullscreen frameborder="0"></iframe>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-dange" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>
    <?php } ?>
    <?php
            $query = "SELECT * FROM `movie` WHERE `movie_id`=(3)";
           $data = mysqli_query($conn, $query);
          //  return $data;
      
             while ($Show_Video = mysqli_fetch_array($data)){
              $title = $Show_Video['movieTitle'];
                $trailer = $Show_Video['Movie_Trailers'];
                $result = str_replace('watch?v=', 'embed/', $trailer);
                
         ?>
    <div class="modal fade" id="knivesoutmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?php echo $title ?> MOVIE TRAILER</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <iframe width="100%" height="400" style="object-fit: cover;" src="<?php echo $result ?>" 
            allow="accelerometer; autoplay; encrypted-media;gyroscope; picture-in-picture" 
            allowfullscreen frameborder="0"></iframe>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-dange" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>
    <?php } ?>
  </div>

 <!--BOOTSTRAP JS CDN -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<!-- JQUERY CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Index JS -->
<script src="./Assets/js/index.js"></script>
<script src="./Assets/js/all.min.js"></script>
 
</body>

</html>