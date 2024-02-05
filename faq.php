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

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed navbar-white navbar-light">
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
      <li class="nav-item">
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
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FAQ</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">FAQ</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12" id="accordion">
              <div class="card card-primary card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            1. What services does your cooperative society offer?
                        </h4>
                    </div>
                </a>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                        We offer a wide range of services including banking, grocery supply, agricultural support, and more. Our aim is to serve the diverse needs of our community.
                    </div>
                </div>
            </div>

            <div class="card card-primary card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            2. How can I become a member?
                        </h4>
                    </div>
                </a>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        To become a member, you need to fill out a membership application form available at our office. You'll also need to meet certain eligibility criteria outlined in our membership policy.
                    </div>
                </div>
            </div>

            <div class="card card-primary card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            3. What are the benefits of being a member?
                        </h4>
                    </div>
                </a>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        As a member, you can access our services at discounted rates. Additionally, you'll have the opportunity to participate in decision-making processes and share in any profits earned by the cooperative society.
                    </div>
                </div>
            </div>

            <div class="card card-primary card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseFour">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            4. How do I apply for a loan?
                        </h4>
                    </div>
                </a>
                <div id="collapseFour" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Loan applications can be submitted to our loan department. The application will be reviewed based on certain criteria such as repayment ability and purpose of the loan.
                    </div>
                </div>
            </div>

            <div class="card card-primary card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseFive">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            5. Can non-members also use your services?
                        </h4>
                    </div>
                </a>
                <div id="collapseFive" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Yes, some of our services are available to non-members as well, though members often receive preferential rates and benefits.
                    </div>
                </div>
            </div>

            <div class="card card-primary card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseSix">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            6. How do I update my contact information?
                        </h4>
                    </div>
                </a>
                <div id="collapseSix" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        You can update your contact information by visiting our office and filling out an information update form. Alternatively, you can also contact our customer service for assistance.
                    </div>
                </div>
            </div>

            <div class="card card-primary card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseSeven">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            7. What happens if I miss a loan repayment?
                        </h4>
                    </div>
                </a>
                <div id="collapseSeven" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        If you miss a loan repayment, there may be late fees or penalties. It's important to communicate with our loan department as soon as possible if you're facing difficulties to explore possible solutions.
                    </div>
                </div>
            </div>

            <div class="card card-primary card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseEight">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            8. How can I provide feedback or suggestions?
                        </h4>
                    </div>
                </a>
                <div id="collapseEight" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        We welcome your feedback and suggestions. You can submit them through our website's contact form, email, or by attending our regular member meetings.
                    </div>
                </div>
            </div>

            <div class="card card-primary card-outline">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseNine">
                    <div class="card-header">
                        <h4 class="card-title w-100">
                            9. What is the process for applying for a scholarship?
                        </h4>
                    </div>
                </a>
                <div id="collapseNine" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Scholarship applications are typically announced and distributed to members' families through our communication channels. The application process involves submitting relevant documents and meeting eligibility criteria.
                    </div>
                </div>
            </div>

            <div class="card card-primary card-outline">
              <a class="d-block w-100" data-toggle="collapse" href="#collapseTen">
                  <div class="card-header">
                    <h4 class="card-title w-100">
                        10. How can I volunteer for community projects?
                    </h4>
                  </div>
              </a>
            <div id="collapseTen" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    We encourage members to participate in community projects. You can express your interest by contacting our community outreach department or by attending community project meetings.
                </div>
            </div>
          </div>
        </div>
              <div class="col-12 mt-3 text-center">
                <p class="lead text-center">
                    <a href="CompanyProfile.php">Contact us</a>,
                    If you found not the right anwser or you have a other question?<br />
                </p>
              </div>
      </div>
    </div>
  </section>
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
</body>
</html>
