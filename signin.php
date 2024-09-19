<?php
include 'conn.php';
session_start();

if(isset($_POST['signin'])){

    $email = $_POST['uemail'];
    $password = $_POST['upass'];

    $query= "SELECT * FROM signup WHERE U_email = '$email' && U_password = '$password'";

    $runn =  mysqli_query($conn , $query);

  if(mysqli_num_rows($runn) > 0){

    $data = mysqli_fetch_array($runn);

    $_SESSION['dbLogin'] = $data['U_id'];
    
    header('location:index.php');

  }

    else{
        echo "
         <script>
        alert('Wrong username or password!');
        
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
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                  
                </a>
                <p class="text-center">Your Social Campaigns</p>
                <form method="POST">
                
                  <div class="mb-3">
                  <label for="email">Email Address</label>
                    <input type="text" id="email" name="uemail" class="form-control"  required>
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
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="upass" id="exampleInputPassword1" class="form-control" >
                  </div>
                  <input type="submit" name="signin" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" value="Sign In" >

                  
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="./authentication-login.html">Sign In</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>