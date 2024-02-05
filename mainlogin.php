<?php
session_start();
require_once('dbc.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    // Verify the username and password against your database
    $query = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {

        $user = mysqli_fetch_assoc($result);
        $userRole = $user['role'];
        $_SESSION['userRole'] = $userRole;
        $_SESSION['Username'] = $username;

        if ($userRole === 'Admin') {
            $_SESSION['user_id'] = $user['user_id'] = 2;
            $_SESSION['Username'];
        } elseif ($userRole === 'Super Admin') {
            $_SESSION['user_id'] = $user['user_id'] = 1; 
            $_SESSION['Username'];
        } else {
            $_SESSION['user_id'] = $user['user_id'] = 3;
            $_SESSION['Username'];
        }

        header('Location: Dashboard.php');
        exit();
    } else {
        echo '<script>alert("Invalid username or password. Please try again.");</script>';
    }
}
?>
