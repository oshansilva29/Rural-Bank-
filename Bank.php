<?php
include_once 'dbc.php';

$id=$_POST['id'];
$Branch=$_POST['Branch'];
?>


<?php
$sql="INSERT INTO bank_details(BankNo,Branch) VALUES('$id','$Branch');";
$result=mysqli_query($connect,$sql);

header("location:BankDetailDisplay.php?signup=success");

?>
