<?php
$title = 'THEATER | TICKET BUCKET';
include('scripts.php');
include('configg.php');

include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- <link rel="stylesheet" href="../Assets/css/theatre.css">     -->
  
</head>
<body>
    <br><br><br><br><br><br>

        
        <div class="user-l text-center mt-3">
        <h2 class="text-center mt-5"><b>AVAILABLE MOVIES </b><i class="fa-solid fa-projector fa-beat"></i></h2>
               
   </div>
<hr>
        <div class="row justify-content-center">
            <div class="col-12 col-md-12"> 
                   <div class="card p-3">
                       <div class="row">
                           
                            <div class="col-12 col-md-5">
                                <iframe src="https://www.youtube.com/embed/5ANVbYlm4i4" frameborder="0" class="responsive" height="100%" width="100%"></iframe>
                            </div>
                         
                          
                           
                           <div class="col-12 col-md-7 py-3 px-4">
                               
                                <strong>
                                    release:
                                </strong><br>
                                
                               <strong class="small font-weight-bold text-success my-2"> June 26 </strong>
                               <h3 class="mb-3"> Introducing iPhone XS, iPhone XS Max and iPhone XR - Apple </h3>
                                <h4 class="text-warning">storyline!!</h4>
                               <small class="text-muted">
                                   iPhone XS impresses with its screen - 5.8 inch OLED display Super Retina opens new frontiers of the virtual world, increased area, brightness and depth - this is... 
                                </small><br><br>
                                <div class="d-flex">
                               <h6 class="text-info">show timings:</h6>
                               <small class="text-danger"></small>
                               <h6 class="text-info">show date:</h6>
                               <small class="text-danger"></small>
                               <h6 class="text-info">tickets availaible:</h6>
                               <small class="text-danger"></small>
                               <h6 class="text-info">location:</h6>
                               <small class="text-danger"></small>
                               </div>
                               <!-- Button trigger modal -->
                               <div class="d-flex mb-3">
                                   <button class="btn btn-danger bg-danger  mr-3" data-toggle="modal" data-target="#exampleModal">book now  </button>
                                   
                               </div>


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h5 class="modal-title "  id="exampleModalLabel">login</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form class="mt-5 my-login-form" action="adminlogin.php" method="POST">
                <div class="form-group">
                    <input type="email" 
                         class="form-control form-control-sm"
                     name="email"  placeholder="Email Id">
                 </div>

                <div class="form-group">
                    <input type="password" 
                        class="form-control form-control-sm" 
                      name="Apassword"  placeholder="Password">
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" name="remember" class="form-check-input" id="rememberCheckBox">
                    <label class="form-check-label text-dark"  for="rememberCheckBox">Remember me?</label>
                </div>

                <div class="mt-5">
                    <button  type="submit" name="adminLogin" class="btn btn-sm btn-danger col  ">
                        Login
                    </button>
  
  
                </div>

                <div class="text-center mt-2 f-password">
                    <a href="#">Forgot Password?</a>
                </div>
                
                <div class="mt-5">
                    <p class="text-center f-password">
                        Don't have an account?
                        <a href="./Pages/adminregister.php" name="register">Click here to register</a>
                    </p>
                </div>
            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                        </div>    
                    
                       </div>
                   
                      
          
                    </div>
            </div>

    </div><br><br><br>

<?php
include("footer.php");
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>
