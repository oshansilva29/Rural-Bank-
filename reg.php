<?php
include_once 'dbc.php';

$Username=$_POST['username'];
$Password=sha1($_POST['password']);
$Role=$_POST['role'];


$sql= "INSERT INTO users(Username,Password,Role)VALUES('$Username','$Password','$Role');";

$_result=mysqli_query($connect,$sql);

header("location:CRUD_Table.php?Register is success");

?>
