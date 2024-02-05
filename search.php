<?php
require 'check_mainlogin.php';
?>
<!DOCTYPE html>
<?php
require_once('dbc.php');
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Data by ID</title>
	<link rel="stylesheet" type="text/css" href="./css/dc.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<h1 style="text-align: center;">CREDIT REPORT</h1>

<form action="" method="POST" style="margin-left:1rem;">
    <input type="text" name="MembershipNo" placeholder="Membership Number">
    <button type="submit" class="btn btn-warning text-center text-md-left" name="search">Search</button>
</form>
<a href="displaycredit.php">
    <button type="button" class="btn btn-secondary text-center text-md-left" style="margin-left:1rem;">Back</button>
</a>
<div class="table-responsive" style="max-height: 400px; overflow-x: auto;">
	<table class="table table-bordered table-hover text-center text-md-left" style="width:100%; line-height:100%;">
		<tr>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Credit Member Number</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Loan Policy Number</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Customer Number</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Membership Number</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Date of loan</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Name with initials of first guarantor</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Date of birth of the first guarantor</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Address of first guarantor</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Telephone number of the first guarantor</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Defense of the first guarantor</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Name of the place of employment of the first surety</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Address of the place of employment of the first guarantor</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Name with initials of second guarantor</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Birthday of the second guarantor</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Identity card number of the second guarantor</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Address of the second guarantor</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Telephone number of the second guarantor</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Security of the second guarantor</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Name of the place of employment of the second guarantor</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Address of the place of employment of the second guarantor</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">situation</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">loan amount</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">amount paid</th>
			<th style="background-color: #810b56; color: rgb(255, 255, 255);">Amount to be paid</th>	
		</tr>
		<br>
		<?php
		if(isset($_POST['search']))
		{
			$MembershipNo = $_POST['MembershipNo'];
			$query = "SELECT * FROM credit WHERE MembershipNo='$MembershipNo'";
			$query_run = mysqli_query($connect, $query);

			while ($row = mysqli_fetch_array($query_run)) {
				?>
			<tr>
				<td><?php echo $row['Credit_Member_Number'];?></td>
				<td><?php echo $row['Loan_Policy_Number'];?></td>
				<td><?php echo $row['Customer_Number'];?></td>
				<td><?php echo $row['MembershipNo'];?></td>
				<td><?php echo $row['Date_of_loan'];?></td>
				<td><?php echo $row['Name_with_initials_of_first_guarantor'];?></td>
				<td><?php echo $row['Date_of_birth_of_the_first_guarantor'];?></td>
				<td><?php echo $row['Address_of_first_guarantor'];?></td>
				<td><?php echo $row['Telephone_number_of_the_first_guarantor'];?></td>
				<td><?php echo $row['Defense_of_the_first_guarantor'];?></td>
				<td><?php echo $row['Name_of_the_place_of_employment_of_the_first_surety'];?></td>
				<td><?php echo $row['Address_of_the_place_of_employment_of_the_first_guarantor'];?></td>
				<td><?php echo $row['Name_with_initials_of_second_guarantor'];?></td>
				<td><?php echo $row['Birthday_of_the_second_guarantor'];?></td>
				<td><?php echo $row['Identity_card_number_of_the_second_guarantor'];?></td>
				<td><?php echo $row['Address_of_the_second_guarantor'];?></td>
				<td><?php echo $row['Telephone_number_of_the_second_guarantor'];?></td>
				<td><?php echo $row['job_of_the_second_guarantor'];?></td>
				<td><?php echo $row['Name_of_the_place_of_employment_of_the_second_guarantor'];?></td>
				<td><?php echo $row['Address_of_the_place_of_employment_of_the_second_guarantor'];?></td>
				<td><?php echo $row['situation'];?></td>
				<td><?php echo $row['loan_amount'];?></td>
				<td><?php echo $row['amount_paid'];?></td>
				<td><?php echo $row['Amount_to_be_paid'];?></td>
			</tr>
			<?php
			}
		} 
		?>
	</table>
</div>
<script>
        function validateForm() {
            var membershipNo = document.getElementsByName("MembershipNo")[0].value;
            
            if (membershipNo.trim() === "") {
                alert("Enter MembershipNo");
                return false; // Prevent form submission
            }
            
            return true; // Allow form submission
        }
    </script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>