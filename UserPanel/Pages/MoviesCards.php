<?php
include("./Config.php");
include("./scripts.php");
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <title>Avengers Movie Card UI</title> -->
  <link rel="stylesheet" href="../Assets/css/moviecard.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body style="background: black;">
  <div class="container-fluid" style="height:80vh;border:1px solid yellow;">
       <div class="row mx-auto">
           <div class="col-md-12">
               <h3 class="mb-4"><span>Top Rated <img class="img-fluid" width="30px" height="26px" src="../Assets/Images/icon/star.svg" alt=""></span></h3>
               <div id="myCarousel" class="carousel slide MCarousel" data-ride="carousel MCarousel" data-interval="0">
                    <!-- Carousel indicators -->
				    <ol class="carousel-indicators indicators">
				    	<li class="CLINK" data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    	<li class="CLINK" data-target="#myCarousel" data-slide-to="1"></li>
				    	<li class="CLINK" data-target="#myCarousel" data-slide-to="2"></li>
				    </ol>   
                    <!-- Wrapper for carousel items -->
				   <div class="carousel-inner mt-2" style="height:50vh;">
                        <div class="carousel-item mt-2 Citem active">
                            <div class="row" style="width:100%;height:46vh;margin-left:0.6px;justify-content:center;align-items:center;padding-left:1.6rem;">
                                <div class="col_1_of_4 span_1_of_4" style="width:24%;">
                                    <div class="Mcard card">
                                        <div class="poster"><img class="postimg" src="./Assets/Images/moviecard/<?php echo $Show_data["movie_pic"] ?>"></div>
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
                                          
                                          
                                          <div class="imp">
                                          
                                            <button class="btn btn-danger Mbtn" data-bs-toggle="modal" data-bs-target="#kingsman">
                                            <i class='uil uil-play'></i>&nbsp;
                                            <a href="<?php echo  $Show_data['movie_id'] ?>" class="text-white text-decoration-none">Trailer</a>
                                           </button>&nbsp;
                                           <?php  ?>
                                              <button class="btn btn-danger Mbtn"><ion-icon name="ticket-outline"></ion-icon>&nbsp;Book</button>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                   <!-- Carousel controls -->
				        <a class="carousel-control-prev prev" href="#myCarousel" data-slide="prev">
				        	<i class="fa fa-chevron-left licon"></i>
				        </a>
				        <a class="carousel-control-next next" href="#myCarousel" data-slide="next">
				        	<i class="fa fa-chevron-right ricon"></i>
				        </a>
               </div>
           </div>
       </div>
  </div>
</body>
</html>