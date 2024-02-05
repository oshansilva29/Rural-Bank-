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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional User Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .header {
            background-color: #810b56;
            color: white;
            padding: 20px 0;
        }
        .user-info {
            text-align: center;
            margin-top: 20px;
        }
        .profile-image {
            max-width: 150px;
            border-radius: 50%;
        }
        .role-info {
            margin-top: 30px;
        }
        .role-info h2 {
            margin-bottom: 20px;
        }
        .contact-info {
            margin-top: 30px;
        }
        .contact-info h2 {
            margin-bottom: 20px;
        }
        .btn-back {
            margin-top: 30px;
        }
        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        .role-info {
            background-color: #f5f5f5;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .role-details ul {
            list-style: disc;
            margin-left: 20px;
        }

    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="Img/user.png" alt="Company Logo" class="rounded-circle profile-image">
                </div>
                <div class="col-md-8 user-info">
                    <h1 class="display-4">Welcome  <?= $username ?></h1>
                    <p class="lead">Role: <?= $roleName ?></p>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="role-info">
                        <h2>About Role: </h2>
                        <div class="role-details">
                            <?php
                            if ($userRole === 'superadmin') {
                                echo "<p>You have superadmin privileges, which include:</p>";
                                echo "<ul>";
                                echo "<li>Creating, updating, and deleting records (CRUD operations)</li>";
                                echo "<li>Managing users and admins</li>";
                                echo "</ul>";
                            } elseif ($userRole === 'admin') {
                                echo "<p>You have admin privileges, which include:</p>";
                                echo "<ul>";
                                echo "<li>Creating, updating, and deleting records (CRUD operations)</li>";
                                echo "</ul>";
                            } elseif ($userRole === 'user') {
                                echo "<p>You have user privileges, which include:</p>";
                                echo "<ul>";
                                echo "<li>Creating and reading records (CR operations)</li>";
                                echo "</ul>";
                            } else {
                                echo "<p>Your role information is not available.</p>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 contact-info">
                    <h2>Contact Information</h2>
                    <p><i class="fas fa-building"></i> Company Number: 00001</p>
                    <p><i class="fas fa-building"></i> Company Name: Battaramulla Various Services Cooperative Society</p>
                    <p><i class="fas fa-map-marker-alt"></i> Address: Ganahena, Battaramulla</p>
                    <p><i class="fas fa-phone"></i> Phone: 0112-86266</p>
                    <p><i class="fas fa-fax"></i> Fax: 0112-86266</p>
                    <p><i class="fas fa-envelope"></i> Email: <a href="mailto:mpcsbattaramulla.1@gmail.com">mpcsbattaramulla.1@gmail.com</a></p>
                </div>
            </div>
        </div>
        <div class="text-center btn-back">
            <a href="Dashboard.php" class="btn" style="background-color: #810b56; color: rgb(255, 255, 255);">Back to Dashboard</a>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
