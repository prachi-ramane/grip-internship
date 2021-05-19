<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>The Sparks Bank</title>
  </head>
  
  <body>
    <?php include('navbar.php') ?>

    <!--************************** Corousel ***************************--> 
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="images/image1.jpeg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Welcome to The TSF Bank Ltd.</h3>
            </div>
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="images/image2.jpeg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h3 class="text-black">Welcome to The TSF Bank Ltd.</h3>
            </div>
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="images/image3.jpeg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h3 class="text-black">Welcome to The TSF Bank Ltd.</h3>
            </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--**************************Corousel end*****************************-->  

    <!--**************************Map and Contact Us **********************--> 
    <section class="header-extradiv">
      <div class="container">
        <div class="row">
            <div class="section-map col-lg-6 col-md-6 col-12">
                <iframe width="520" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" 
                src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Mumbai+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                </iframe> 
                <a href='https://embedmap.org/'>google maps widget html</a> 
                <script type='text/javascript'src='https://embedmaps.com/google-maps-authorization/script.js?id=16ea2c78ed7912c3aa061c1e8159faadf4256563'></script>
            </div>         
        
            <div class="contact_us col-lg-6 col-md-6 col-12">
                <div class="section-form"> 
                    <h3 class="text-center m-4" id="contact-heading">Contact Us</h3> 
                    <form action="insert.php" method="POST"> 
                        <div class="form-group"> 
                            <input type="text" class="form-control" placeholder="Your Name" autocomplete="off" value ="" name="name" required><br> 
                            <input type="email" class="form-control"  placeholder="Email ID" autocomplete="off" value="" name="email" required><br> 
                            <textarea rows="5" class="form-control"  placeholder="Give a Feedback" autocomplete="off" name="feedback" required></textarea><br> 
                            <button type="submit" class="btn btnprimary" id="submit_feedback" name="submit_feedback">Submit</button> 
                        </div> 
                    </form> 
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--**************************Map and Contact Us end**********************--> 

    <!--**************************Footer *************************************-->
    <footer class="text-center text-lg-start bg-dark text-muted" >
        
        <section class="">
            <div class="container text-center text-md-start text-white">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto">
                        <h6 class="text-uppercase fw-bold p-2"></i>TSF Bank Ltd.</h6>
                        <p  >At your service 24x7</p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto ">
                        <h6 class="text-uppercase fw-bold p-2"  >Our Services</h6>
                        <p><a href="#!" class="text-reset" >24x7 ATMs</a></p>
                        <p><a href="#!" class="text-reset" >24x7 Customer Care</a></p>
                        
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                        <h6 class="text-uppercase fw-bold p-2"  >Useful links</h6>
                        <p><a href="#!" class="text-reset" >For Loan Enquiry</a></p>
                        <p><a href="#!" class="text-reset" >Account related queries</a></p>
                        
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 ">
                        <h6 class="text-uppercase fw-bold  p-2" >Contact</h6>
                        <p  >Mumbai-400100, Maharashtra, India</p>
                        <p ></i>022-2541235</p>
                        
                    </div>
                </div>
            </div>
        </section>
        <div class="text-center text-white" >
            © 2021 Copyright: 
            <a class="text-reset fw-bold" href="">gripbank.com</a>
        </div>
    </footer>
    <!--******************************************* Footer End ******************************************-->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>