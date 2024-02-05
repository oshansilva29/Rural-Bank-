<?php
session_start();
require_once('dbc.php');

if (isset($_SESSION['userRole'])) {
    $userRole = $_SESSION['userRole'];
    $username = $_SESSION['Username'];

    $roleNames = [
        'superadmin' => 'Super Admin',
        'admin' => 'Admin',
        'user' => 'User',
    ];

    if (isset($roleNames[$userRole])) {
        $roleName = $roleNames[$userRole];
    } else {
        $roleName = 'User';
    }
} else {
    header('Location: Login.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Various Services Cooperative Society | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed navbar-white navbar-light">
<div class="wrapper">
  
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="Img/user.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  
  <nav class="main-header navbar navbar-expand navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="Dashboard.php" class="nav-link">Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="CompanyProfile.php" class="nav-link">Company Profile</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="FAQ.php" class="nav-link">FAQ</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      </li><li class="nav-item">
        <a class="nav-link" href="#" id="darkModeToggle" role="button">
          <i class="fas fa-moon"></i> 
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mainlogout.php" role="button">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="user.php" class="brand-link">
      <img src="Img/user.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?= $username ?></span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="Img/protect.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="user.php" class="d-block"><?= $roleName ?></a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-file-pdf"></i>
              <p>
                User Forms
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="creditform.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Credit Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="regmemberform.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="FormRegianol.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Region Form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="BankDetailform.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bank Form</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                User Tables
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="displaycredit.php" class="nav-link">
                  <i class="far fa-square nav-icon"></i>
                  <p>Credit Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="displayregnem.php" class="nav-link">
                  <i class="far fa-square nav-icon"></i>
                  <p>Register Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="displayregianol.php" class="nav-link">
                  <i class="far fa-square nav-icon"></i>
                  <p>Region Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="BankDetailDisplay.php" class="nav-link">
                  <i class="far fa-square nav-icon"></i>
                  <p>Bank Report</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Summery Report
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="SummaryReport.php" class="nav-link">
                  <i class="far fa-square nav-icon"></i>
                  <p>Summary Report</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Company Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Company Profile</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    
    <header class="bg-dark text-white text-center py-4">
      <h1>Various Services Cooperative Society</h1>
      <p>Providing Quality Services</p>
    </header>
    <div class="container mt-4">
      <h2 class="about-title text-center"><strong>About Us</strong></h2>
      <div class="about-us">
        <p>At Various Services Cooperative Societies, our core objectives encompass bridging the gap between government initiatives and the cooperative sector. We facilitate effective communication, propelling cooperative businesses, and upholding principles of good governance. Our role extends to guiding cooperative policies, fostering collaborations, and contributing to development projects. With a legacy of ethical practices, we stand as a catalyst for shared growth and sustainable progress within the cooperative landscape.</p>
      </div>
    </div>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-6">
          <div class="bg-dark p-4 mb-4">
            <h2 class="vm-title text-center"><strong>Vision</strong></h2>
            <div class="vision">
              <div class="icon text-center">
                <img src="img/vision.png" alt="Vision Icon">
              </div>
              <p class="text-center"> Cooperation for business sustainable development as a people entrepreneurship.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="bg-dark p-4 mb-4">
            <h2 class="vm-title text-center"><strong>Mission</strong></h2>
            <div class="mission">
              <div class="icon text-center">
                <img src="img/mission.png" alt="Mission Icon">
              </div>
              <p class="text-center"> Enabling abundant intervention for cohesive good governance, fostering cooperative business.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-4">
      <h2 class="mb-3 text-primary">Contact Information</h2>
      <div class="contact-info">
        <p class="contact-info-details"><strong>Company Number:</strong> 00001</p>
        <p class="contact-info-details"><strong>Company Name:</strong> Battaramulla Various Services Cooperative Society</p>
        <p class="contact-info-details"><strong>Address:</strong> Homagama</p>
        <p class="contact-info-details"><strong>Phone:</strong> 0112-86266</p>
        <p class="contact-info-details"><strong>Fax:</strong> 0112-86266</p>
        <p class="contact-info-details"><strong>Email:</strong> mpcsbattaramulla.1@gmail.com</p>
      </div>
    </div>
  </div>
  <footer class="main-footer text-center">
    <strong>Copyright &copy; 2023 Various Services Cooperative Society.</strong>
    All rights reserved.
  </footer>
</div>
<script>
  // Get the dark mode toggle icon element
  const darkModeToggle = document.getElementById('darkModeToggle');

  // Function to enable dark mode
  function enableDarkMode() {
    document.body.classList.add('dark-mode');
    localStorage.setItem('darkMode', 'enabled');
  }

  // Function to disable dark mode
  function disableDarkMode() {
    document.body.classList.remove('dark-mode');
    localStorage.setItem('darkMode', 'disabled');
  }

  // Toggle dark mode when the icon is clicked
  darkModeToggle.addEventListener('click', () => {
    if (document.body.classList.contains('dark-mode')) {
      disableDarkMode();
    } else {
      enableDarkMode();
    }
  });

  // Set initial dark mode state
  if (localStorage.getItem('darkMode') === 'enabled') {
    enableDarkMode();
  }
</script>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/pages/dashboard2.js"></script>
<script src="plugins/moment/moment.min.js"></script>
</body>
</html>
