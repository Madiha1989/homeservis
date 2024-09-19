<?php 
include 'web_header.php';
include 'conn.php';

if(isset($_POST['send'])){

  $name = $_POST['cname'];
  $email = $_POST['cemail'];
  $contact = $_POST['ccontact'];
  $message = $_POST['cmsg'];

  $query = "INSERT INTO contact (C_name , C_email , 
  C_contact ,C_message ) VALUES ('$name' , '$email' ,  '$contact' , '$message')";
  $runn =  mysqli_query($conn , $query);

  if($runn){

    echo "
    
    <script>
    alert('Recieve your message!!!');
    window.location.href='index.php';
    </script>
    ";
  
   }
} 
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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <!-- <li class="text-secondary"><a href="index.php">Home</a></li>
                    <li class="text-white"><a href="#">Pages</a></li> -->
                    <i><li class="breadcrumb-item active text-secondary">Contact</li></i>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Contact Start -->
        <div class="container-fluid contact bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 mb-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                            <p class="text-uppercase text-secondary fs-5 mb-0">Let’s Connect</p>
                            <h2 class="display-4 text-capitalize mb-3">Send Your Message</h2>
                            <p class="mb-0">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        </div>
                        <form method="POST">
                            <div class="row g-3">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating border border-secondary">
                                        <input type="text" name="cname" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name" class=" text-dark">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating border border-secondary">
                                        <input type="email" name="cemail" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email" class=" text-dark">Your Email</label>
                                    </div>
                                </div>
                                <script>
    const emailInput = document.getElementById('email');

    emailInput.addEventListener('input', () => {
        let value = emailInput.value;
        
        // Ensure there is only one '@' symbol and it's properly handled
        const atIndex = value.indexOf('@');
        if (atIndex !== -1) {
            value = value.slice(0, atIndex) + '@gmail.com';
        } else {
            value = value + '@gmail.com';
        }
        
        emailInput.value = value;
    });

    document.getElementById('login-form').addEventListener('submit', (event) => {
        const email = emailInput.value;
        if (!email.endsWith('@gmail.com')) {
            alert('Please enter a Gmail address.');
            event.preventDefault();
        }
    });
</script>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating border border-secondary">
                                        <!-- <input type="number" name="ccontact" class="form-control" id="phone" placeholder="Phone">
                                        <label for="phone" class=" text-dark">Your Phone</label> -->
                                        <label for="phone">Phone No:</label>
    <input type="text" id="phone" name="ccontact" class="form-control text-dark" maxlength="13" placeholder="123-456-78900">
    
    <script>
        const phoneInput = document.getElementById('phone');

        phoneInput.addEventListener('input', () => {
            let value = phoneInput.value.replace(/\D/g, ''); // Remove non-digits
            if (value.length > 12) value = value.slice(0, 12); // Limit to 11 digits
            phoneInput.value = formatPhoneNumber(value);
        });

        function formatPhoneNumber(value) {
            const len = value.length;
            if (len <= 3) return value;
            if (len <= 6) return `${value.slice(0, 3)}-${value.slice(3)}`;
            return `${value.slice(0, 3)}-${value.slice(3, 6)}-${value.slice(6)}`;
        }
    </script>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating border border-secondary">
                                        <input type="text" class="form-control" id="project" placeholder="Project">
                                        <label for="project">Your Project</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating border border-secondary">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div> -->
                                <div class="col-12">
                                    <div class="form-floating border border-secondary">
                                        <textarea name="cmsg" class="form-control" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                        <label for="message" class=" text-dark">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                <!-- <input type="send" name="send" class="btn btn-primary w-100 py-3 fs-4 mb-4 rounded-2" value="Send Message" > -->
                                <button type="submit" name="send"class="btn btn-primary w-100 py-3" value="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="contact-map h-100 w-100">
                            <iframe class="h-100 w-100" 
                            style="height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd" 
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="d-inline-flex bg-white w-100 border border-secondary p-4">
                            <i class="fas fa-map-marker-alt fa-2x text-secondary me-4"></i>
                            <div>
                                <h4>Address</h4>
                                <p class="mb-0 text-dark">ABC Road Karachi , Pakistan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="d-inline-flex bg-white w-100 border border-secondary p-4">
                            <i class="fas fa-envelope fa-2x text-secondary me-4"></i>
                            <div>
                                <h4>Mail Us</h4>
                                <p class="mb-0 text-dark">info@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="d-inline-flex bg-white w-100 border border-secondary p-4">
                            <i class="fa fa-phone-alt fa-2x text-secondary me-4"></i>
                            <div>
                                <h4>Telephone</h4>
                                <p class="mb-0 text-dark">(+012) 3456 7890 123</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

    

<?php 
include 'web_footer.php';
?>