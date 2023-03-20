<?php
include("./Pages/configg.php");
include("./Pages/scripts.php")
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <title>Avengers Movie Card UI</title> -->
  <link rel="stylesheet" href="./Assets/css/moviecard.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
  <div >
       <div class="row mx-auto">
       <div class="container">
			<h3 class=""><span>Top Rated <img class="img-fluid" width="30px" height="26px" src="./Assets/images/icon/star.svg" alt=""></span></h3>
			<div id="myCarousel" class="carousel slide MCarousel" data-ride="carousel MCarousel" data-interval="0">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators indicators">
					<li class="CLINK" data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li class="CLINK" data-target="#myCarousel" data-slide-to="1"></li>
					<li class="CLINK" data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="carousel-item Citem active">
            <div class="container "></div>
						<div class="row" >
							<div class="">
                                
                                <div class="Mcard card">
                                    <?php
                                      // $id = $_GET['tid'];
                                       $query = "SELECT * FROM `movie` WHERE `movie_id` = (1) ";
                                       $data = mysqli_query($conn, $query);
                                       //  return $data;
              
                                        while ($Show_data = mysqli_fetch_array($data)){
                                            $Title = $Show_data['movieTitle'];
                                            $genre = $Show_data['genre_type'];
                                            $trailer = $Show_data['Movie_Trailers'];
                                            $description = $Show_data['description'];
                                    ?>
                                    <div class="poster"><img class="postimg" src="./Assets/images/moviecard/<?php echo $Show_data["movie_pic"] ?>"></div>
                                    <div class="details card-body">
                                      <h1 style="display:none;"><?php echo $id ?></h1>
                                      <h2 class="card-title"><?php echo $Title ?></h2>
                                
                                      <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span>5.5</span>
                                      </div>
                                
                                      <div class="tags mb-3">
                                        <span class="fantasy"><?php echo $genre ?></span>
                                        <span class="scifi">Comedy</span>
                                      </div>
                                      <div class="info">
                                        <p class="card-text mb-2"><?php echo  $description ?></p>
                                      </div>
                                
                                      <!-- <div class="star">
                                        <h4>Cast</h4>
                                        <ul>
                                          <li><img src="https://www.famousbirthdays.com/headshots/robert-downey-jr-2.jpg"></li>
                                          <li><img src="https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTU1MTM0NzA2NzQ3MTg4NDQw/chris-evans-arrives-at-the-los-angeles-premiere-of-captain-america-the-winter-soldier-held-at-the-el-capitan-theatre-on-march-13-2014-in-hollywood-california-photo-by-michael-tran_filmmagicjpg-square.jpg"></li>
                                          <li><img src="https://www.india-forums.com/images/celebrity/l_12804.jpg"></li>
                                          <li><img src="https://imageresizer.static9.net.au/LYRtJfSVUFCURsyAlx6qdMXJzwI=/400x0/http%3A%2F%2Fprod.static9.net.au%2F_%2Fmedia%2FNetwork%2FImages%2Favengers300616Scarjo.jpg"></li>
                                          <li><img src="https://www.famousbirthdays.com/faces/boseman-chadwick-image.jpg"></li>
                                        </ul>
                                      </div> -->
                                      <div class="imp">
                                      
                                        <button class="btn btn-danger Mbtn" data-bs-toggle="modal" data-bs-target="#kingsman">
                                        <i class='uil uil-play'></i>&nbsp;
                                        <a href="<?php echo  $Show_data['movie_id'] ?>" class="text-white text-decoration-none">Trailer</a>
                                       </button>&nbsp;
                                       <?php } ?>
                                          <button class="btn btn-danger Mbtn"><ion-icon name="ticket-outline"></ion-icon>&nbsp;Book</button>
                                      </div>
                                    </div>
                                    
                               </div>
                               
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="Mcard card">
                                <?php
                                      // $id = $_GET['tid'];
                                       $query = "SELECT * FROM `movie` WHERE `movie_id` = (2) ";
                                       $data = mysqli_query($conn, $query);
                                       //  return $data;
              
                                       while ($Show_data = mysqli_fetch_array($data)){
                                        $Title = $Show_data['movieTitle'];
                                        $genre = $Show_data['genre_type'];
                                        $trailer = $Show_data['Movie_Trailers'];
                                        $description = $Show_data['description'];
                                    ?>
                                    <div class="poster"><img class="postimg" src="./Assets/images/moviecard/<?php echo $Show_data["movie_pic"] ?>"></div>
                                    <div class="details card-body">
                                      <h1 style="display:none;"><?php echo $id ?></h1>
                                      <h2 class="card-title"><?php echo $Title ?></h2>
                                
                                      <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span>5.5</span>
                                      </div>
                                
                                      <div class="tags mb-3">
                                        <span class="fantasy"><?php echo $genre ?></span>
                                        <span class="scifi">Comedy</span>
                                      </div>
                                      
                                      <div class="info">
                                        <p class="card-text mb-2"><?php echo  $description ?></p>
                                      </div>
                                      <div class="imp">
                                      
                                        <button class="btn btn-danger Mbtn" data-bs-toggle="modal" data-bs-target="#EnolaHolmes">
                                        <i class='uil uil-play'></i>&nbsp;
                                        <a href="<?php echo  $Show_data['movie_id'] ?>" class="text-white text-decoration-none">Trailer</a>
                                       </button>&nbsp;
                                       <?php } ?>
                                          <button class="btn btn-danger Mbtn"><ion-icon name="ticket-outline"></ion-icon>&nbsp;Book</button>
                                      </div>
                                    </div>
                               </div>
                            </div>							
                            <div class="col-6 col-md-3">
                                <div class="Mcard card">
                                <?php
                                      // $id = $_GET['tid'];
                                       $query = "SELECT * FROM `movie` WHERE `movie_id` = (3) ";
                                       $data = mysqli_query($conn, $query);
                                       //  return $data;
              
                                       while ($Show_data = mysqli_fetch_array($data)){
                                        $Title = $Show_data['movieTitle'];
                                        $genre = $Show_data['genre_type'];
                                        $trailer = $Show_data['Movie_Trailers'];
                                        $description = $Show_data['description'];

                                    ?>
                                    <div class="poster"><img class="postimg" src="./Assets/images/moviecard/<?php echo $Show_data["movie_pic"] ?>"></div>
                                    <div class="details card-body">
                                      <h1 style="display:none;"><?php echo $id ?></h1>
                                      <h2 class="card-title"><?php echo $Title ?></h2>
                                
                                      <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span>5.5</span>
                                      </div>
                                
                                      <div class="tags mb-3">
                                        <span class="fantasy"><?php echo $genre ?></span>
                                        <span class="scifi">Comedy</span>
                                      </div>
                                      <div class="info">
                                        <p class="card-text mb-2"><?php echo  $description ?></p>
                                      </div>
                                      
                                      <div class="imp">
                                      
                                        <button class="btn btn-danger Mbtn" data-bs-toggle="modal" data-bs-target="#KnivesOut">
                                        <i class='uil uil-play'></i>&nbsp;
                                        <a href="<?php echo  $Show_data['movie_id'] ?>" class="text-white text-decoration-none">Trailer</a>
                                       </button>&nbsp;
                                       <?php } ?>
                                          <button class="btn btn-danger Mbtn"><ion-icon name="ticket-outline"></ion-icon>&nbsp;Book</button>
                                      </div>
                                    </div>
                               </div>
                            </div>	
                            <div class="col-6 col-md-3">
                                <div class="Mcard card">
                                <?php
                                      // $id = $_GET['tid'];
                                       $query = "SELECT * FROM `movie` WHERE `movie_id` = (4) ";
                                       $data = mysqli_query($conn, $query);
                                       //  return $data;
              
                                       while ($Show_data = mysqli_fetch_array($data)){
                                        $Title = $Show_data['movieTitle'];
                                        $genre = $Show_data['genre_type'];
                                        $trailer = $Show_data['Movie_Trailers'];
                                        $description = $Show_data['description']
                                    ?>
                                    <div class="poster"><img class="postimg" src="./Assets/images/moviecard/<?php echo $Show_data["movie_pic"] ?>"></div>
                                    <div class="details card-body">
                                      <h1 style="display:none;"><?php echo $id ?></h1>
                                      <h2 class="card-title"><?php echo $Title ?></h2>
                                
                                      <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span>5.5</span>
                                      </div>
                                
                                      <div class="tags mb-3">
                                        <span class="fantasy"><?php echo $genre ?></span>
                                        <span class="scifi">Comedy</span>
                                      </div>

                                      <div class="info">
                                        <p class="card-text mb-2"><?php echo  $description ?></p>
                                      </div>
                                      
                                      <div class="imp">
                                      
                                        <button class="btn btn-danger Mbtn" data-bs-toggle="modal" data-bs-target="#NYSM">
                                        <i class='uil uil-play'></i>&nbsp;
                                        <a href="<?php echo  $Show_data['movie_id'] ?>" class="text-white text-decoration-none">Trailer</a>
                                       </button>&nbsp;
                                       <?php } ?>
                                          <button class="btn btn-danger Mbtn"><ion-icon name="ticket-outline"></ion-icon>&nbsp;Book</button>
                                      </div>
                                    </div>
                               </div>
                            </div>					
                        </div>
					</div>
					<div class="carousel-item mt-2 Citem">
						<div class="row" >
                           <div class="col-6 col-md-3">
                                <div class="Mcard card">
                                <?php
                                      // $id = $_GET['tid'];
                                       $query = "SELECT * FROM `movie` WHERE `movie_id` = (5) ";
                                       $data = mysqli_query($conn, $query);
                                       //  return $data;
              
                                       while ($Show_data = mysqli_fetch_array($data)){
                                        $Title = $Show_data['movieTitle'];
                                        $genre = $Show_data['genre_type'];
                                        $trailer = $Show_data['Movie_Trailers'];
                                        $description =$Show_data['description'];
                                    ?>
                                    <div class="poster"><img class="postimg" src="./Assets/images/moviecard/<?php echo $Show_data["movie_pic"] ?>"></div>
                                    <div class="details card-body">
                                      <h1 style="display:none;"><?php echo $id ?></h1>
                                      <h2 class="card-title"><?php echo $Title ?></h2>
                                
                                      <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span>5.5</span>
                                      </div>
                                
                                      <div class="tags mb-3">
                                        <span class="fantasy"><?php echo $genre ?></span>
                                        <span class="scifi">Comedy</span>
                                      </div>
                                      
                                      <div class="info">
                                        <p class="card-text mb-2"><?php echo  $description ?></p>
                                      </div>
                                      <div class="imp">
                                      
                                        <button class="btn btn-danger Mbtn" data-bs-toggle="modal" data-bs-target="#BabyBoss">
                                        <i class='uil uil-play'></i>&nbsp;
                                        <a href="<?php echo  $Show_data['movie_id'] ?>" class="text-white text-decoration-none">Trailer</a>
                                       </button>&nbsp;
                                       <?php } ?>
                                          <button class="btn btn-danger Mbtn"><ion-icon name="ticket-outline"></ion-icon>&nbsp;Book</button>
                                      </div>
                                    </div>
                               </div>
                            </div>					
                            <div class="col-6 col-md-3">
                                <div class="Mcard card">
                                <?php
                                      // $id = $_GET['tid'];
                                       $query = "SELECT * FROM `movie` WHERE `movie_id` = (7) ";
                                       $data = mysqli_query($conn, $query);
                                       //  return $data;
              
                                       while ($Show_data = mysqli_fetch_array($data)){
                                        $Title = $Show_data['movieTitle'];
                                        $genre = $Show_data['genre_type'];
                                        $trailer = $Show_data['Movie_Trailers'];
                                        $description =$Show_data['description'];
                                    ?>
                                    <div class="poster"><img class="postimg" src="./Assets/images/moviecard/<?php echo $Show_data["movie_pic"] ?>"></div>
                                    <div class="details card-body">
                                      <h1 style="display:none;"><?php echo $id ?></h1>
                                      <h2 class="card-title"><?php echo $Title ?></h2>
                                
                                      <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span>5.5</span>
                                      </div>
                                
                                      <div class="tags mb-3">
                                        <span class="fantasy"><?php echo $genre ?></span>
                                        <span class="scifi">Comedy</span>
                                      </div>
                                      <div class="info">
                                        <p class="card-text mb-2"><?php echo  $description ?></p>
                                      </div>
                                      
                                      <div class="imp">
                                      
                                        <button class="btn btn-danger Mbtn" data-bs-toggle="modal" data-bs-target="#Annabelle">
                                        <i class='uil uil-play'></i>&nbsp;
                                        <a href="<?php echo  $Show_data['movie_id'] ?>" class="text-white text-decoration-none">Trailer</a>
                                       </button>&nbsp;
                                       <?php } ?>
                                          <button class="btn btn-danger Mbtn"><ion-icon name="ticket-outline"></ion-icon>&nbsp;Book</button>
                                      </div>
                                    </div>
                               </div>
                            </div>	
                            <div class="col-6 col-md-3">
                                <div class="Mcard card">
                                <?php
                                      // $id = $_GET['tid'];
                                       $query = "SELECT * FROM `movie` WHERE `movie_id` = (14) ";
                                       $data = mysqli_query($conn, $query);
                                       //  return $data;
              
                                       while ($Show_data = mysqli_fetch_array($data)){
                                        $Title = $Show_data['movieTitle'];
                                        $genre = $Show_data['genre_type'];
                                        $trailer = $Show_data['Movie_Trailers'];
                                        $description = $Show_data['description'];
                                    ?>
                                    <div class="poster"><img class="postimg" src="./Assets/images/moviecard/<?php echo $Show_data["movie_pic"] ?>"></div>
                                    <div class="details card-body">
                                      <h1 style="display:none;"><?php echo $id ?></h1>
                                      <h2 class="card-title"><?php echo $Title ?></h2>
                                
                                      <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span>5.5</span>
                                      </div>
                                
                                      <div class="tags mb-3">
                                        <span class="fantasy"><?php echo $genre ?></span>
                                        <span class="scifi">Comedy</span>
                                      </div>
                                      <div class="info">
                                        <p class="card-text mb-2"><?php echo  $description ?></p>
                                      </div>
                                      
                                      <div class="imp">
                                      
                                        <button class="btn btn-danger Mbtn" data-bs-toggle="modal" data-bs-target="#Orphan">
                                        <i class='uil uil-play'></i>&nbsp;
                                        <a href="<?php echo  $Show_data['movie_id'] ?>" class="text-white text-decoration-none">Trailer</a>
                                       </button>&nbsp;
                                       <?php } ?>
                                          <button class="btn btn-danger Mbtn"><ion-icon name="ticket-outline"></ion-icon>&nbsp;Book</button>
                                      </div>
                                    </div>
                               </div>
                            </div>	
                            <div class="col-6 col-md-3">
                                <div class="Mcard card">
                                <?php
                                      // $id = $_GET['tid'];
                                       $query = "SELECT * FROM `movie` WHERE `movie_id` = (9) ";
                                       $data = mysqli_query($conn, $query);
                                       //  return $data;
              
                                       while ($Show_data = mysqli_fetch_array($data)){
                                        $Title = $Show_data['movieTitle'];
                                        $genre = $Show_data['genre_type'];
                                        $trailer = $Show_data['Movie_Trailers'];
                                        $description = $Show_data['description'];
                                    ?>
                                    <div class="poster"><img class="postimg" src="./Assets/images/moviecard/<?php echo $Show_data["movie_pic"] ?>"></div>
                                    <div class="details card-body">
                                      <h1 style="display:none;"><?php echo $id ?></h1>
                                      <h2 class="card-title"><?php echo $Title ?></h2>
                                
                                      <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span>5.5</span>
                                      </div>
                                
                                      <div class="tags mb-3">
                                        <span class="fantasy"><?php echo $genre ?></span>
                                        <span class="scifi">Comedy</span>
                                      </div>
                                      <div class="info">
                                        <p class="card-text mb-2"><?php echo  $description ?></p>
                                      </div>
                                      
                                      <div class="imp">
                                      
                                        <button class="btn btn-danger Mbtn" data-bs-toggle="modal" data-bs-target="#SpiderMan">
                                        <i class='uil uil-play'></i>&nbsp;
                                        <a href="<?php echo  $Show_data['movie_id'] ?>" class="text-white text-decoration-none">Trailer</a>
                                       </button>&nbsp;
                                       <?php } ?>
                                          <button class="btn btn-danger Mbtn"><ion-icon name="ticket-outline"></ion-icon>&nbsp;Book</button>
                                      </div>
                                    </div>
                               </div>
                            </div>	
                        </div>
                        
					</div>
				
    </div>
</div>

   
    
    
    </div>
</body>

</html>