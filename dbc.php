
<?php
$dbServerName ="localhost";
$dbUserName   ="root";
$dbPassword   ="";
$dbName       ="mobizzdb";

$connect=mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);

/*$dbservername='localhost';
$dbusername='ceylsxft_Coop';
$dbpassword='Mob@2023';
$dbname='ceylsxft_coop';

$connect = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname );*/
if (!$connect) {
    die('Connect Error: ' .mysqli_connect_error());
}
else
{
    //echo "Connected";
}


?>