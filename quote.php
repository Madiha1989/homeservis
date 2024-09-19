<?php 
include 'web_header.php';
?>
<?php
include 'conn.php';

if(isset($_POST['submit'])){

  $name = $_POST['qname'];
  $email = $_POST['qemail'];
  $contact = $_POST['qcontact'];
  $service = $_POST['qservice'];
  $address = $_POST['qaddress'];

  $query = "INSERT INTO quote (Q_name , Q_email , 
  Q_contact , Q_service , Q_address ) VALUES ('$name' , '$email' ,  '$contact' , '$service' , '$address')";
  $runn =  mysqli_query($conn , $query);

  if($runn){

    echo "
    
    <script>
    alert('Your service has been found by admin &&& You delete your service after 30 min otherwise your deletion cannot be acceptable.....');
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
        <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-6 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
               
                  <!-- <img src="../html/img/carelogo.png" width="180" alt=""> -->
                </a>
                <p class="text-center text-dark">Your Social Campaigns</p>
                <form method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-dark">Name</label>
                    <input type="uname" class="form-control" id="exampleInputEmail1"  name="qname" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <!-- <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"  name="uemail" aria-describedby="emailHelp"> -->
                    <label for="email" class="text-dark">Email Address</label>
                    <input type="text" id="email" name="qemail" class="form-control"  required>
                 
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
                  <!-- <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label text-dark">Password</label>
                    <input type="password" name="upass" id="exampleInputPassword1" class="form-control" >
                  </div> -->
                  <div class="mb-4">
                
                  
                 
                <label for="phone" class="text-dark">Phone Number:</label>
                <input type="text" id="phone" name="qcontact" class="form-control" maxlength="13" placeholder="123-456-78900">
                
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
                  <!-- <div class="mb-4">
                    <input class="form-control" require name ="qimage" type="file" >
                  </div> -->
                  <!-- <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label text-dark">Services</label>
                    <select class="form-select" aria-label="Default select example" name="qservice">
                    <option selected>Services</option>
                    <option value="1">Plumbing</option>
                    <option value="2">Electrician</option>
                    <option value="3">Woodworking</option>
                </select>  
                </div> -->
                <div class="mb-4">
    <select class="form-control" name="qservice" type="text" placeholder="Services">
        <?php
        $queryy = "select * from services";
        $rows = mysqli_query($conn , $queryy);
        while($dataa = mysqli_fetch_array($rows)){
        echo mysqli_num_rows($rows);
            
        ?>
    <option value="<?php echo $dataa['S_id']?>"><?php echo $dataa['S_name']?></option>

    
     <?php
      }
     ?>
      </select>
    </div>
                <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label text-dark">Address</label>
                    <input type="text" name="qaddress" id="exampleInputPassword1" class="form-control" >
                  </div>
                  
                  
                <br>
                  <input type="submit" name="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" value="Submit" >
                  <div class="d-flex align-items-center justify-content-center">
                    <!-- <p class="fs-4 mb-0 fw-bold text-dark">Already have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="./authentication-login.html">Done</a> -->
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

<?php 
include 'web_footer.php';
?>