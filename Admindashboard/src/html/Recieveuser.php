<?php
include 'conn.php';
include 'signin_session.php';

if(isset($_POST['submit'])){

  $name = $_POST['uname'];
  $email = $_POST['uemail'];
  $password = $_POST['upassword'];


  $query = "INSERT INTO signup (U_name , U_email , 
  Q_password) VALUES ('$name' , '$email' ,  '$password')";
  $runn =  mysqli_query($conn , $query);

//   if($runn){

//     echo "
    
//     <script>
//     alert('Your service has been found by admin!!!');
//     window.location.href='index.php';
//     </script>
//     ";
  
//    }
} 
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HR - service website template</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../assets/css/styles.min.css" />
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
  <div  class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside style="background-image: url(../html/img/dashwall.jpg); background-repeat :no-repeat;background-size :cover;"  class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./cities.php" class="text-nowrap logo-img">
            <!-- <img src="../html/img/carelogo.png" width="180" alt="" /> -->
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">
              <h4>Welcome Sir <?php echo $name;?>!</h4>
              </span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./cities.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
           
            <!-- <li class="sidebar-item">
              <a class="sidebar-link" href="./cities.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Cities</span>
              </a>
            </li> -->

            <li class="sidebar-item">
              <a class="sidebar-link" href="./service.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Service</span>
              </a>
            </li>

           <li class="sidebar-item">
              <a class="sidebar-link" href="./Recievequote.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Recievquote</span>
              </a>
            </li>
            
                          
            <li class="sidebar-item">
              <a class="sidebar-link" href="./Recieveuser.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Recieveuser</span>
              </a>
            </li> 
            <li class="sidebar-item">
              <a class="sidebar-link" href="./Recievecontact.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Recievecontact</span>
              </a>
            </li>
            

            

            <li class="sidebar-item">
              <a class="sidebar-link" href="./logout.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
            </li>
            
        
          </ul>
          
          
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a>
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <div class="container-fluid">
      <!--  Header End -->


<h2 style="padding:20px; text-align:center;" class="text-danger">User_Login Recieving Table</h2>
<!-- table start -->
<table class="table text-center">
    <thead>
        <tr>
            <th>S No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
    </thead>

    <tbody>
        <?php
      $queryy = "SELECT * from signup";
      $runn = mysqli_query($conn , $queryy) ;  
      $sno = 0;

      if(mysqli_num_rows($runn)){
        while($rows = mysqli_fetch_array($runn)){
        ?>

        <tr>
            <td><?php echo ++$sno; ?></td>
            <td><?php echo $rows ['U_name']?></td>
            <td><?php echo $rows ['U_email']?></td>
            <td><?php echo $rows ['U_password']?></td>
            <td>
             <a href="deleteuser.php?id=<?php echo $rows['U_id']?>"> <button class="btn btn-primary m-1">Delete</button></a>
            </td>
        </tr>
        <?php
           }
        }
        ?>
    </tbody>
</table>

<!-- table start -->

<!-- footer -->

<div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="dashboard.php" target="_blank" class="pe-1 text-primary text-decoration-underline">HR Service</a> Distributed by <a href="dashboard.php">HR Service team</a></p>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

</html>
