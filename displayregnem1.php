<?php
require 'check_mainlogin.php';
?>

<?php 
require_once('dbc.php');
$query="select * from regmember";
mysql_query("set names 'utf8'");
$re=mysqli_query($connect,$query);

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Member Report</title>
  <link rel="stylesheet" type="text/css" href="./css/dc.css">
</head>
<body>
	<div class="search-form">
		<form method="post" action="searchcredit.php">
		  <input type="hidden" name="delete_id">
		  <button type="submit">Search by</button>
		</form>
	  	</div>
	
	<h1>Member Report</h1>
	<table class="credit-table">
  <tr>
  
  </tr>
  <t>		
	<th>Regional</th>
	<th>Membership No</th>
	<th>Membership Dues</th>
	<th>first Name</th>
	<th>Name with initials</th>
	<th>date of birth</th>
	<th>Identity Number</th>
	<th>Address</th>
	<th>phone number</th>
	<th>job</th>
	<th>Name of the place of employment</th>
	<th>Address of place of employment</th>
	<th>Bank name</th>
	<th>Account Number</th>
	<th>F10 No</th>
	<th>An Associate member</th>
	<th>voting member</th>
	<th>Part no</th>
	<th>Shar value</th>
	<th>Share size</th>
	<th>owner real estate</th>
	<th>family mem no</th>
	<th>name family mem</th>
	<th>name of nominee</th>
	<th>addrss of nomine</th>
	<th>number of prt</th>
	<th>num of shares tranfer</th>
</t>
<?php
while ($row= mysqli_fetch_assoc($re))
{
	?>

<tr>
	<td><?php  echo $row['Regional'];?></td>
	<td><?php echo $row['MembershipNo'];?></td>
	<td><?php echo $row['MembershipDues'];?></td>
	<td><?php  echo $row['fName'];?></td>
	<td><?php echo $row['Name_with_initials'];?></td>
	<td><?php echo $row['date_of_birth'];?></td>
	<td><?php  echo $row['Identity_Number'];?></td>
	<td><?php echo $row['Address'];?></td>
	<td><?php echo $row['phone_number'];?></td>
	<td><?php  echo $row['job'];?></td>
	<td><?php echo $row['Name_of_the_place_of_employment'];?></td>
	<td><?php echo $row['Address_of_place_of_employment'];?></td>
	<td><?php  echo $row['Bank_name'];?></td>
	<td><?php echo $row['Account_Number'];?></td>
	<td><?php echo $row['F10_No'];?></td>
	<td><?php echo $row['An_associate_member'];?></td>
	<td><?php echo $row['voting_member'];?></td>
	<td><?php  echo $row['Part_no'];?></td>
	<td><?php echo $row['Share_value'];?></td>
	<td><?php  echo $row['Share_size'];?></td>
	<td><?php echo $row['Owners_real_estate'];?></td>
	<td><?php echo $row['Family_membership_no'];?></td>
	<td><?php echo $row['Name_family_members'];?></td>
	<td><?php echo $row['Name_of_nominee'];?></td>
	<td><?php echo $row['Address_of_nominee'];?></td>
	<td><?php echo $row['Number_of_shares_tobe_transferred'];?></td>
	<td>
		<div class="action-buttons">
			<form method="post" action="deletecredit.php">
				<input type="hidden" name="delete_id" value="<?php echo $row['Credit_Member_Number']; ?>">
					<button type="submit">Delete</button>
			</form>
		</div>
	</td>
	<td>
		<div class="action-buttons">
			<form method="post" action="updatecredit.php">
				<input type="hidden" name="update_id" value="<?php echo $row['Credit_Member_Number']; ?>">
				<button type="submit">Update</button>
			</form>
		</div>
	</td>
</tr>

<?php
}


?>


</table>
	
</body>
</html>