<?php 
include 'web_header.php';
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>HR - service website template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <!-- Header Start -->
        <div class="container-fluid bg-dark">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                  <i>  <li class="breadcrumb-item active text-secondary">Service</li></i>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
<br><br>
     <!-- Services Start -->
     <div class="container-fluid service bg-light pb-8">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <p class="text-uppercase text-secondary fs-5 mb-0">Our Services</p>
                    <h2 class="display-4 text-capitalize mb-3">our service is creative, & decent</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/plumbing.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="service-content text-center p-4">
                                <div class="bg-secondary btn-xl-square mx-auto" style="width: 120px; height: 120px;">
                                <img class="text-primary fa-5x" src="<?php echo "img/plumbingicon.png"?>" width="50px" height="60px" alt="">
                                </div>
                                <a href="#" class="d-block fs-4 my-4">Plumbing Service</a>
                                <p class="text-white mb-4">Plumbing service agreements, also known as comfort plans, maintenance contracts, or home warranties, are contracts between you and your plumbing service provider. </p>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a>
                            </div>
                            <div class="service-tytle">
                                <div class="d-flex align-items-center ps-4 w-100">
                                    <h4>Plumbing Service</h4>
                                </div>
                                <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                <img class="text-primary fa-5x" src="<?php echo "img/plumbingicon.png"?>" width="50px" height="60px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/kitchen-.jpg" class="img-fluid w-100" alt="Image" height="200vh">
                            </div>
                            <div class="service-content text-center p-4">
                                <div class="bg-secondary btn-xl-square mx-auto" style="width: 120px; height: 120px;">
                                <img class="text-primary fa-5x" src="<?php echo "img/stoveicon.png"?>" width="50px" height="60px" alt="">
                                </div>
                                <a href="#" class="d-block fs-4 my-4">Kitchen Repairing</a>
                                <p class="text-white mb-4">Cabinet installation services can also be dangerous if not performed correctly. Cabinets must be sturdy enough to hold dishes, pots, pans, glasses, and more.</p>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a>
                            </div>
                            <div class="service-tytle">
                                <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                    <h4>Kitchen Repairing</h4>
                                </div>
                                <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                <img class="text-primary fa-5x" src="<?php echo "img/stoveicon.png"?>" width="50px" height="60px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/electronics.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="service-content text-center p-4">
                                <div class="bg-secondary btn-xl-square mx-auto" style="width: 120px; height: 120px;">
                                <img class="text-primary fa-5x" src="<?php echo "img/electriciann.png"?>" width="50px" height="60px" alt="">
                                </div>
                                <a href="#" class="d-block fs-4 my-4">Electronics Repairing</a>
                                <p class="text-white mb-4">Our extensive parts department stocks thousands of common failure components as well as those thought to be obsolete. Track the process of your repair through our Secure Customer Repair Portal,</p>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a>
                            </div>
                            <div class="service-tytle">
                                <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                    <h4>Electronics Repairing</h4>
                                </div>
                                <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                <img class="text-primary fa-5x" src="<?php echo "img/electriciann.png"?>" width="50px" height="60px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/service-4.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="service-content text-center p-4">
                                <div class="bg-secondary btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                    <i class="fas fa-file-invoice-dollar text-primary fa-4x"></i>
                                </div>
                                <a href="#" class="d-block fs-4 my-4">Virtual Design & Build</a>
                                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, minima!</p>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a>
                            </div>
                            <div class="service-tytle">
                                <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                    <h4>Virtual Design & Build</h4>
                                </div>
                                <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                    <i class="fas fa-file-invoice-dollar text-primary fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/service-5.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="service-content text-center p-4">
                                <div class="bg-secondary btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                    <i class="fas fa-cogs text-primary fa-4x"></i>
                                </div>
                                <a href="#" class="d-block fs-4 my-4">Preconstruction</a>
                                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, minima!</p>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a>
                            </div>
                            <div class="service-tytle">
                                <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                    <h4>Preconstruction</h4>
                                </div>
                                <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                    <i class="fas fa-cogs text-primary fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/service-6.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="service-content text-center p-4">
                                <div class="bg-secondary btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                    <i class="fas fa-sitemap text-primary fa-4x"></i>
                                </div>
                                <a href="#" class="d-block fs-4 my-4">Design Build</a>
                                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, minima!</p>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a>
                            </div>
                            <div class="service-tytle">
                                <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                    <h4>Design Build</h4>
                                </div>
                                <div class="btn-xl-square bg-secondary p-4" style="width: 80px; height: 80px;">
                                    <i class="fas fa-sitemap text-primary fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a class="btn btn-secondary py-3 px-5 mt-4" href="#">More Services</a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Services End -->
         <!-- Fact Counter -->
        <!-- <div class="container-fluid counter py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-box">
                            <div class="counter-item">
                                <div class="counter-item-style"></div>
                                <div class="counter-item-inner p-5">
                                    <i class="fas fa-thumbs-up fa-4x text-secondary"></i>
                                    <h4 class="text-dark my-4">Completed Projects</h4>
                                    <div class="counter-counting">
                                        <span class="text-secondary fs-2 fw-bold" data-toggle="counter-up">456</span>
                                        <span class="h1 fw-bold text-secondary">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="counter-box">
                            <div class="counter-item">
                                <div class="counter-item-style"></div>
                                <div class="counter-item-inner p-5">
                                    <i class="fas fa-users fa-4x text-secondary"></i>
                                    <h4 class="text-dark my-4">Happy Customers</h4>
                                    <div class="counter-counting">
                                        <span class="text-secondary fs-2 fw-bold" data-toggle="counter-up">513</span>
                                        <span class="h1 fw-bold text-secondary">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="counter-box">
                            <div class="counter-item">
                                <div class="counter-item-style"></div>
                                <div class="counter-item-inner p-5">
                                    <i class="fas fa-user fa-4x text-secondary"></i>
                                    <h4 class="text-dark my-4">Best Worker Team</h4>
                                    <div class="counter-counting">
                                        <span class="text-secondary fs-2 fw-bold" data-toggle="counter-up">53</span>
                                        <span class="h1 fw-bold text-secondary">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="counter-box">
                            <div class="counter-item">
                                <div class="counter-item-style"></div>
                                <div class="counter-item-inner p-5">
                                    <i class="fas fa-heart fa-4x text-secondary"></i>
                                    <h4 class="text-dark my-4">Years Experiance</h4>
                                    <div class="counter-counting">
                                        <span class="text-secondary fs-2 fw-bold" data-toggle="counter-up">17</span>
                                        <span class="h1 fw-bold text-secondary">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center pt-4 wow fadeInUp" data-wow-delay="0.9s">
                        <a class="counter-btn btn btn-secondary py-3 px-5" href="#">Join With Us</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Fact Counter -->



<?php 
include 'web_footer.php';
?>