<?php
session_start();
include("./Pages/scripts.php");
include("./Pages/Config.php");
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
    <!-- SWIPER CDN -->
    <link rel="stylesheet" href="./Assets/css/swiper.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <!-- BOOTSTRAP CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body id="body-pd" class="body">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
             <div class="d-flex" >
                <p class="pt-2 text-white"> <?php echo $_SESSION['full_name'];?> </p>&nbsp; &nbsp; 
                <div class="header_img ms-auto mx-4"> 
                  <img class="img-fluid" src="../AdminPanel/assets/images/uploads/<?php echo $_SESSION['picture'] ;?> "  
                   style="width:40px;height:40px;border:1px solid black;border-radius:50px;"  alt="logo"> 
                </div>    
                
               <!-- <button class="btn btn-info"styyle="margin:0;" >logout</button>    -->
             </div>
    </header>
    <!-- ####################### Navigation Start ######################### -->
  <div class="container-fluid">
       <div class="row">
          <div class="col">
               <div class="l-navbar" id="nav-bar">
                 <nav class="nav">
                       <div> 
                           <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i>
                           <span class="nav_logo-name">BBBootstrap</span> </a>
                          <div class="nav_list"> <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i>
                               <span class="nav_name">Dashboard</span> </a> <a href="#" class="nav_link">
                               <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a> <a href="#"
                               class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i>
                               <span class="nav_name">Messages</span> </a> <a href="#" class="nav_link">
                               <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a> <a href="#"
                               class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a>
                               <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                               <span class="nav_name">Stats</span> </a>
                          </div>
                       </div> 
                       <a href="#" class="nav_link"> 
                          <form action="./Pages/logout.php" method="POST">
                          <button class="btn btn-transparent m-0 p-0" type="submit" name="Signout">
                          <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Logout</span>
                        </a>
                         </button>
                         </form>
                  </nav>
               </div>
          </div>
       </div>
  </div>
  <!-- ################################## Navigation End #################################### -->

    <!--############################# Container Main start ###############################-->
  <div class="container-fluid cont">
    <section>
      <div class="scroll-holder">        
        <div class="scroll-tray">
          <div>
            <img src="./Assets/Images/MovieBg/download (2).jpg" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/enola.jpg" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/knives.jpg" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/lights-out-poster.jpg" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/luca.jpg" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/luck.jpg" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/Scream.jpg" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/spynext.jpeg" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
        </div>
        <div class="scroll-tray">
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
          <div>
            <img src="./Assets/Images/MovieBg/freeguy.png" />
          </div>
        </div>
      </div>
    </section>
    <!-- <div class="container">
          <video autoplay loop muted controls class="slider" src="./Assets/videos/Free Guy _ Official Trailerr.mp4"></video>

        <div class="row">
          <div class="col-md-12">
            
              <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                   <ul>
                      <li class="colm" onclick="videoslider('./Assets/videos/Free_Guy.mp4')">
                        <video src="./Assets/videos/Free_Guy.mp4"></video>
                      </li>
                    </ul>
                  </div>
                  <div class="swiper-slide" >
                    <ul>
                     <li onclick="videoslider('./Assets/videos/Light Outmp4.mp4')">
                        <video src="./Assets/videos/Light Outmp4.mp4"></video>
                      </li>
                    </ul>
                  </div>
                  <div class="swiper-slide">
                   <ul>
                      <li class="colm" onclick="videoslider('./Assets/videos/The Baby Bosss.mp4 ')">
                        <video src="./Assets/videos/The Baby Bosss.mp4"></video>
                      </li>
                    </ul>
                  </div>
                  <div class="swiper-slide">Resize me!</div>
                  <div class="swiper-slide">Resize me!</div>
                  <div class="swiper-slide">Resize me!</div>
                  <div class="swiper-slide">Resize me!</div>
                  <div class="swiper-slide">Resize me!</div>
                  <div class="swiper-slide">Resize me!</div>
                  <div class="swiper-slide">Resize me!</div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <li class="colm" onclick="videoslider('./Assets/videos/Free_Guy.mp4')">
                <video src="./Assets/videos/Free_Guy.mp4"></video>
             </li>
              <li onclick="videoslider('./Assets/videos/Light Outmp4.mp4')">
                <video src="./Assets/videos/Light Outmp4.mp4"></video>
             </li>
              <li onclick="videoslider('./Assets/videos/The Baby Bosss.mp4')">
                <video src="./Assets/videos/The Baby Bosss.mp4"></video>
              </li>
          </div>
       </div>
        </div> -->
  </div><br><br><br>
    <!--########################### Container Main end ##########################-->

    <!-- ################################## Cards ############################### -->
    <div class="container-fluid" style="border: 1px solid yellow;">
    
      
    </div>
    <div class="container-fluid" style="border: 1px solid yellow;">
        <div class="row" style="border: 1px solid green;">
            <div class="col-sm-3" style="display:flex;">
              <a href="#" alt="Annabelle" target="_blank">
              <div class="cardo" style="border-radius: 60px;">
                  <div class="wrapper">
                     <img src="./Assets/Images/HD-wallpaper-annabelle-creation-beautiful-girl.jpg" class="cover-image" />
                  </div>
                   <img src="./Assets/Images/Annabelle-Logo-PNG-Pic.png" class="img-title" />
                    <img src="./Assets/Images/Annabelle.png" class="character" />
              </div>
              </a>
            </div>

            <div class="col-sm-3" style="display:flex;">
              <a href="#" alt="Mario" target="_blank">
                 <div class="cardo">
                      <div class="wrapper">
                         <img src="./Assets/Images/Mario Bros1.jpg" class="cover-image" />
                      </div>
                        <img src="./Assets/Images/the_super_mario_bros title.png" class="img-title" />
                         <img src="./Assets/Images/mari caharacter.png" class="character" />
                  </div>
                </a>
            </div>
   
            <div class="col-sm-3" style="float:right;">
                <a href="#" alt="Mario" target="_blank">
                  <div class="cardo">
                     <div class="wrapper">
                          <img src="./Assets/Images/FREE_GUY.jpg" class="cover-image" />
                      </div>
                      <img src="./Assets/Images/free guy title.png" class="img-title" />
                       <img src="./Assets/Images/free guy character.png" class="character" />
                   </div>
               </a>
            </div>

            <div class="col-sm-3" style="float:right;">
               <a href="#" alt="Mario" target="_blank">
                  <div class="cardo">
                      <div class="wrapper">
                           <img src="./Assets/Images/Knive Out.PNG" class="cover-image" />
                      </div>
                       <img src="./Assets/Images/knives title.png" class="img-title" />
                       <img src="./Assets/Images/knive character.png" class="character" />
                   </div>
                </a> 
            </div>        

        </div>
    </div>
<script>

    function videoslider(links){
        document.querySelector(".slider").src = links;
    }
</script>

    <!--BOOTSTRAP JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- JQUERY CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Index JS -->
    <script src="./Assets/js/index.js"></script>

    <!-- SWIPER JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="./Assets/js/swiper.js"></script>
</body>
</html>