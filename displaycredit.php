<?php
require 'check_mainlogin.php';
?>

<?php 
require_once('dbc.php');
$query = "select * from credit";
$re = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Credit Form Report</title>
    <link rel="stylesheet" type="text/css" href="./CSS/dc.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>
<body>
	<h1 style="text-align: center;">CREDIT REPORT</h1>
    <div class="d-flex">
        <a href="Dashboard.php">
            <button type="button" class="btn btn-secondary m-3">Back</button>
        </a>
		<div class="search-container m-3">
			<label for="searchInput">Search by membership number</label>
			<input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search membership numbers">
		</div>
	</div>
    <div class="table-responsive" style="max-height: auto; overflow-x: auto;">
        <table id="creditTable" class="table table-bordered table-hover text-center text-md-left" style="width:100%; line-height:100%;">
	<tr></tr>

	<thead>
	<tr>
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">Credit Member Number</th>
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">Loan Policy Number</th>
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">Customer Number</th>
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">Membership Number</th>
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">Date of loan</th>
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">Name with initials of first guarantor</th>
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">Date of birth of the first guarantor</th>
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">Address of first guarantor</th>
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">Identity card number of the first guarantor</th>
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
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">Total Available Balance</th>
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">loan amount</th>
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">amount paid</th>
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">Amount to be paid</th>
		</tr>
		</thead>
		<?php
		while ($row= mysqli_fetch_assoc($re))
		{
		?>
		<tbody>
		<tr>
		<td><?php  echo $row['Credit_Member_Number'];?></td>
		<td><?php echo $row['Loan_Policy_Number'];?></td>
		<td><?php echo $row['Customer_Number'];?></td>
		<td><?php echo $row['MembershipNo'];?></td>
		<td><?php echo $row['Date_of_loan'];?></td>
		<td><?php echo $row['Name_with_initials_of_first_guarantor'];?></td>
		<td><?php echo $row['Date_of_birth_of_the_first_guarantor'];?></td>
		<td><?php echo $row['Address_of_first_guarantor'];?></td>
		<td><?php echo $row['Identity_card_number_of_the_first_guarantor'];?></td>
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
		<td><?php echo $row['Total_Available_Balance'];?></td>
		<td><?php echo $row['loan_amount'];?></td>
		<td><?php echo $row['amount_paid'];?></td>
		<td><?php echo $row['Amount_to_be_paid'];?></td>
		<td>
			<?php
				if ($_SESSION['userRole'] === 'superadmin') {
					echo '<form method="post" action="deletecredit.php">';
					echo '<input type="hidden" name="delete_id" value="' . $row['Credit_Member_Number'] . '">';
					echo '<button type="submit" class="btn btn-danger">Delete</button>';
					echo '</form>';
				} else {
					echo '<button class="btn btn-danger" disabled>Delete</button>';
				}
			?>
		</td>

		<td>
			<?php
				if ($_SESSION['userRole'] === 'superadmin' || $_SESSION['userRole'] === 'admin') {
					echo '<form method="post" action="updatecredit1.php">';
					echo '<input type="hidden" name="update_id" value="' . $row['Credit_Member_Number'] . '">';
					echo '<button type="submit" class="btn btn-primary">Update</button>';
					echo '</form>';
				} else {
					echo '<button class="btn btn-primary" disabled>Update</button>';
				}
			?>
		</td>
	</tr>
	</tbody>
			
	<?php
	}
	
	?>
	 </table>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
		<script>
		$(document).ready(function() {
			$('#creditTable').DataTable();
		});
		</script>
		 <script>
			$(document).ready(function() {
				var table = $('#creditTable').DataTable();
			});
	
			function searchTable() {
				var input, filter, table, tr, td, i, txtValue;
				input = document.getElementById("searchInput");
				filter = input.value.toUpperCase();
				table = document.getElementById("creditTable");
				tr = table.getElementsByTagName("tr");
				
				for (i = 1; i < tr.length; i++) { 
					td = tr[i].getElementsByTagName("td")[3];
					if (td) {
						txtValue = td.textContent || td.innerText;
						if (txtValue.toUpperCase().indexOf(filter) > -1) {
							tr[i].style.display = "";
						} else {
							tr[i].style.display = "none";
						}
					}
				}
			}
		</script>
	</body>
	</html>