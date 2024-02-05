<?php
session_start();
require_once('dbc.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $position = $_POST['position'];
    $username = $_POST['username'];
    $password = $_POST['password'];
}

if(($position === "manager" && $username === "manager@123" && $password === "m@123") ||
($position === "chairman" && $username === "chairman@123" && $password === "c@123") ||
($position === "project_manager" && $username === "project_manager@123" && $password === "pm@123") ||
($position === "assistant_manager" && $username === "assistant_manager@123" && $password === "am@123") ||
($position === "CEO" && $username === "ceo@123" && $password === "ceo@123")) {
    $_SESSION['user_id'] = 1; 
    header('Location: CRUD_Table.php');
    exit();
} else {
    echo "Invalid username or password. Please try again.";
}
?>