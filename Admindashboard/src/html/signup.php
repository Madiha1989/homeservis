<?php
include 'conn.php';

if(isset($_POST['signup'])){

  $name = $_POST['uname'];
  $email = $_POST['uemail'];
  $contact = $POST['ucontact'];
  $password = $_POST['upass'];

  $query = "INSERT INTO adminn (A_name , A_email , A_contact, A_password) VALUES ('$name' , '$email' , '$contact', '$password')";
  $runn =  mysqli_query($conn , $query);

  if($runn){

    echo "
    
    <script>
    alert('Account created!');
    window.location.href='signin.php';
    </script>
    ";
  
   }
} 
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HR - service website template</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
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
               
                  <!-- <img src="../html/img/carelogo.png" width="180" alt=""> -->
                </a>
                <p class="text-center">Your Social Campaigns</p>
                <form method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="uname" class="form-control" id="exampleInputEmail1"  name="uname" aria-describedby="emailHelp">
                  </div>
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
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="upass" id="exampleInputPassword1" class="form-control" >
                  </div>
                  <div class="mb-4">
                  <label for="phone">Phone Number:</label>
    <input type="text" id="phone" name="ucontact" class="form-control" maxlength="13" placeholder="123-456-78900">
    
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
                  <input type="submit" name="signup" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" value="Sign Up" >
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
