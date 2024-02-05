<?php
 include_once 'dbc.php';


$adminName=$_POST['adminName'];
$compmynme=$_POST['companyName'];
$telphonbmr=$_POST['telephoneNumber'];
$username=$_POST['username'];
$password=$_POST['Password'];

$sql= "INSERT INTO admin(Name,companyName,Telephonenumber,ID ,Password) VALUES ('$adminName','$compmynme','$telphonbmr','$username','$password');";


$_result=mysqli_query($connect,$sql);































?>