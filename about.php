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
            <!-- <img src="<?php echo"/img/abb.jpg"?>" alt=""> -->
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <!-- <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <i><li class="breadcrumb-item active text-secondary">About</li></i>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

    
<!-- About Start -->
<div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="about-item-image d-flex">
                            <img src="img/about2.jpeg" class="img-1 img-fluid w-50"  alt="">
                            <img src="img/about3.jpg" class="img-2 img-fluid w-50"  alt="">
                            <div class="about-item-image-content">
                                <img src="img/about1.jpg" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.1s">
                        <div class="about-item-content">
                            <p class="text-uppercase text-secondary fs-5 mb-0">WE ARE REPAIRING COMPANY</p>
                            <h2 class="display-4 text-capitalize mb-3 ">We Make your vision come true at the basics.</h2>
                            <p class="mb-6 fs-6 text-dark">Plus, performance reviews are an excellent opportunity to open lines of communication between peers or a manager and their direct reports. Both sides can clarify questions or concerns about performance, and the reviewer may use this time to motivate the reviewee. 
                            </p>
                            <div class="pb-4 mb-4 border-bottom">
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <div class="about-item-content-img">
                                            <img src="img/about4.jpg" class="img-fluid w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="d-flex mb-4">
                                            <div class="text-secondary">
                                                <i class="fas fa-user-shield fa-3x"></i>
                                            </div>
                                            <h4 class="ms-3">Building quality standards</h4>
                                        </div>
                                        <div class="d-flex">
                                            <div class="text-secondary">
                                                <i class="fas fa-users-cog fa-3x"></i>
                                            </div>
                                            <h4 class="ms-3">Certified repairing's team</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gy-0 gx-4 justify-content-between pb-4">
                                <div class="col-lg-6">
                                    <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> 100% Satisfaction</p>
                                    <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Trained Emploies</p>
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Annual Pass Programs</p>
                                    <p class="text-dark mb-0"><i class="fas fa-check text-secondary me-1"></i> Flexible and cost effective</p>
                                </div>
                            </div>
                            <a class="btn btn-secondary d-inline-block py-3 px-5 me-2 flex-shrink-0 wow fadeInUp" data-wow-delay="0.1s" href="#">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->







    <?php 
include 'web_footer.php';
?>