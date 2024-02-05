<?php
include_once 'dbc.php';

$id=$_POST['id'];
$region=$_POST['region'];


?>


<?php
$sql="INSERT INTO regionaltb(ID,Regional) VALUES('$id','$region');";
mysql_query("set names 'utf8'");
$result=mysqli_query($connect,$sql);

header("location:displayregianol.php?signup=success");

?>
