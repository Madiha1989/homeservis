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
        <!-- Features Start -->
        <div class="container-fluid feature bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <p class="text-uppercase text-secondary fs-5 mb-0">WHy US</p>
                    <h2 class="display-4 text-capitalize mb-3">Why Choose Us</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item text-center border p-5">
                            <div class="feature-img bg-secondary d-inline-flex p-4">
                                <img class="text-primary fa-5x" src="<?php echo "img/timesaving.webp"?>" width="50px" height="60px" alt="">
                            </div>
                            <a href="#" class="h4 d-block my-4">Time Saving</a>
                            <p class="mb-0 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem provident incidunt obcaecati.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item text-center border p-5">
                            <div class="feature-img bg-secondary d-inline-flex p-4">
                            <img class="text-primary fa-5x" src="<?php echo "img/qualitie.png"?>" width="70px" height="60px" alt="">
                            </div>
                            <a href="#" class="h4 d-block my-4">Quality</a>
                            <p class="mb-0 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem provident incidunt obcaecati.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item text-center border p-5">
                            <div class="feature-img bg-secondary d-inline-flex p-4">
                            <img class="text-primary fa-5x" src="<?php echo "img/feedbaack.png"?>" width="50px" height="60px" alt="">
                            </div>
                            <a href="#" class="h4 d-block my-4">FeedBack</a>
                            <p class="mb-0 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem provident incidunt obcaecati.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->



    <?php 
include 'web_footer.php';
?>