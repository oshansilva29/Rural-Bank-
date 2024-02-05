<?php
require 'check_mainlogin.php';
require_once('dbc.php');
$query="select * from regmember";
$re=mysqli_query($connect,$query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Member Report</title>
    <link rel="stylesheet" type="text/css" href="./CSS/dc.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>
<body>
	<h1 style="text-align: center;">MEMBER REPORT</h1>
	<div class="d-flex">
        <a href="Dashboard.php">
            <button type="button" class="btn btn-secondary m-3">Back</button>
        </a>
		<div class="search-container m-3">
			<label for="searchInput">Search by Nic or Member No</label>
			<input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search by Nic or Member No">
		</div>
	</div>
	<br>
    <div class="table-responsive" style="max-height: auto; overflow-x: auto;">
        <table id="creditTable" class="table table-bordered table-hover text-center text-md-left" style="width:100%; line-height:100%;">
	<tr></tr>

        <thead>
        <tr>
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">Regional</th>
        <th style="background-color: #810b56; color: rgb(255, 255, 255);">Register_Fees</th>
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">MembershipNo</th>
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">Membership Date</th>
        <th style="background-color: #810b56; color: rgb(255, 255, 255);">firstName</th>
        <th style="background-color: #810b56; color: rgb(255, 255, 255);">Name_with_initials</th>
        <th style="background-color: #810b56; color: rgb(255, 255, 255);">date_of_birth</th>
        <th style="background-color: #810b56; color: rgb(255, 255, 255);">Identity_Number</th>
        <th style="background-color: #810b56; color: rgb(255, 255, 255);">Address</th>
        <th style="background-color: #810b56; color: rgb(255, 255, 255);">phone_number</th>
        <th style="background-color: #810b56; color: rgb(255, 255, 255);">job</th>
        <th style="background-color: #810b56; color: rgb(255, 255, 255);">Name_of_the_place_of_employment</th>
        <th style="background-color: #810b56; color: rgb(255, 255, 255);">Address_of_place_of_employment</th>
        <th style="background-color: #810b56; color: rgb(255, 255, 255);">Bank_name</th>
        <th style="background-color: #810b56; color: rgb(255, 255, 255);">Account_Number</th>
        <th style="background-color: #810b56; color: rgb(255, 255, 255);">F10 No</th>
        <th style="background-color: #810b56; color: rgb(255, 255, 255);">An Associate member</th>
        <th style="background-color: #810b56; color: rgb(255, 255, 255);">voting member</th>
        <th style="background-color: #810b56; color: rgb(255, 255, 255);">Shar value</th>
        <th style="background-color: #810b56; color: rgb(255, 255, 255);">Share size</th>
        <th style="background-color: #810b56; color: rgb(255, 255, 255);">owner real estate</th>
        <th style="background-color: #810b56; color: rgb(255, 255, 255);">family mem no</th>
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">name family mem</th>
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">name of nominee</th>
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">addrss of nomine</th>
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">number of prt</th>
		<th style="background-color: #810b56; color: rgb(255, 255, 255);">num_of_shares_tranfer</th>
	</tr>
		</thead>
		<?php
		while ($row= mysqli_fetch_assoc($re))
		{
		?>
		<tbody>
			<tr>
				<td><?php  echo $row['Regional'];?></td>
				<td><?php  echo $row['Register_Fees'];?></td>
				<td><?php echo $row['MembershipNo'];?></td>
				<td><?php echo $row['MembershipDate'];?></td>
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
				<td><?php echo $row['Share_value'];?></td>
				<td><?php  echo $row['Share_size'];?></td>
				<td><?php echo $row['Owners_real_estate'];?></td>
				<td><?php echo $row['Family_membership_no'];?></td>
				<td><?php echo $row['Name_family_members'];?></td>
				<td><?php echo $row['Name_of_nominee'];?></td>
				<td><?php echo $row['Address_of_nominee'];?></td>
				<td><?php echo $row['Number_of_parts'];?></td>
				<td><?php echo $row['Number_of_shares_tobe_transferred'];?></td>

				<td>
						<?php
							if ($_SESSION['userRole'] === 'superadmin') {
								echo '<form method="post" action="deleteregister.php">';
								echo '<input type="hidden" name="delete_id" value="' . $row['MembershipNo'] . '">';
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
								echo '<form method="post" action="updateRegianol1.php">';
								echo '<input type="hidden" name="update_id" value="' . $row['MembershipNo'] . '">';
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
            var table = $('#creditTable').DataTable();
        });

        function searchTable() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("creditTable");
            tr = table.getElementsByTagName("tr");

            for (i = 1; i < tr.length; i++) {
                var nicTd = tr[i].getElementsByTagName("td")[7]; // Column index 3 corresponds to NIC number
                var membershipTd = tr[i].getElementsByTagName("td")[2]; // Column index 2 corresponds to Membership number
                if (nicTd || membershipTd) {
                    var nicTxtValue = nicTd ? nicTd.textContent || nicTd.innerText : "";
                    var membershipTxtValue = membershipTd ? membershipTd.textContent || membershipTd.innerText : "";

                    // Check if the input matches NIC or membership number
                    if (nicTxtValue.toUpperCase().includes(filter) || membershipTxtValue.toUpperCase().includes(filter)) {
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