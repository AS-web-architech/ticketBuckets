<?php
include("Config.php");
?>
         <div class="modal-header">
           <?php
           //  if(isset($_GET('id'))){
            //  $id = $_GET['tid'];
             $query = "SELECT * FROM `movie` WHERE movie_id =(1) ";
             $fetch = mysqli_query($conn, $query);
           
              while ($row = mysqli_fetch_assoc($fetch)){
                $title = $row['movieTitle'];
                $trailer = $row['Movie_Trailers'];
                $result = str_replace('watch?v=', 'embed/', $trailer);
               
                   
                           
            ?>
            <h5 class="modal-title" id="exampleModalLabel"><?php echo $title."&nbsp;"."Trailer"; ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
         
          <div class="modal-body">
            <iframe width="100%" height="400" style="object-fit: cover;" src="<?php echo $result ?>" 
            allow="accelerometer; autoplay; encrypted-media;gyroscope; picture-in-picture" 
            allowfullscreen frameborder="0"></iframe>
          </div>
          <?php } ?>
        
       
         
         

         

          

         

          

          
  

          
          
          
          


          