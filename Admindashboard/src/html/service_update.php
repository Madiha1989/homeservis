<?php
include 'conn.php';
include 'signin_session.php';

//-------------To Fetch Data----------- 

$id = $_GET['id'];
$query = "SELECT * from services WHERE S_id =  $id ";
$runn = mysqli_query($conn , $query);
$data = mysqli_fetch_array($runn);

//-------------To Update Data-----------

if(isset($_POST['submit'])){

    $sname = $_POST['sname'];
    $queryy = "UPDATE services SET S_name = '$sname' where S_id = $id ";
    $runnn = mysqli_query($conn , $queryy);

    if($runnn){
        echo "
          <script>
            alert  ('Record Updated!!!');
            window.location.href= 'service.php';
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
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
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
              <a class="sidebar-link" href="./speaciality.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Service</span>
              </a>
            </li>

              
            <li class="sidebar-item">
              <a class="sidebar-link" href="./Recievquote.php" aria-expanded="false">
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


      <!-- form start  -->
<h1 class="text-center">Speaciality Update</h1>
<form class="my-4" method="POST">

    <div class="col-6 m-auto py-2">
      <input class="form-control" require name ="sname" type="text" value="<?php echo $data['S_name']?>">
    </div>

    <div class="col-6 m-auto py-2">
      <input class="btn btn-info m-auto" type="submit" name="submit" value="Update">
    </div>
</form>
<!-- form end  -->



      <!-- footer -->

<div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="dashboard.php" target="_blank" class="pe-1 text-primary text-decoration-underline">Care web</a> Distributed by <a href="dashboard.php">Care web team</a></p>
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