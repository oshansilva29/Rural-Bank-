<?php
require 'check_mainlogin.php';
?>
<?php
require_once('dbc.php');

if (isset($_POST['update_id'])) {
    $update_id = $_POST['update_id'];

    $query = "SELECT * FROM credit WHERE Credit_Member_Number = '$update_id'";
    $result = mysqli_query($connect, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Record not found.";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Debt Form Data</title>
    <link rel="stylesheet" type="text/css" href="./css/updatecredit1.css">
    <style>
    .custom-btn-primary {
      border: none;
      text-decoration: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
      padding: 12px;
      font-size: 1rem;
      width: 6%;
      text-align: center;
      align-items: center;
      display: inline-block;
    }
</style>
</head>
<body class="App">
    <h1 class="title">Update Debt Form Data</h1>
    <div class="centered-container">
    <form class="form" action="updateprocesscredit.php" method="post">
        <input type="hidden" name="update_id" value="<?php echo $row['Credit_Member_Number']; ?>">
        
        <p>FIRST GUARANTOR</p>

        <div class="horizontal-fields">
            <div class="field">
                <label for="new_name">New Name with Initials:</label>
                <input type="text" id="new_name" name="new_name" value="<?php echo $row['Name_with_initials_of_first_guarantor']; ?>"><br><br>
            </div>

            <div class="field">
                <label for="new_dob">New Date of Birth:</label>
                <input type="text" id="new_Date_of_birth" name="new_Date_of_birth" value="<?php echo $row['Date_of_birth_of_the_first_guarantor']; ?>"><br><br>
            </div>
            
            <div class="field">
                <label for="new_idsnd">New Identity Card Number:</label>
                <input type="text" id="new_id" name="new_id" value="<?php echo $row['Identity_card_number_of_the_first_guarantor']; ?>"><br><br>
            </div>

            <div class="field">
                <label for="new_addrss">New Address:</label>
                <input type="text" id="new_Address" name="new_Address" value="<?php echo $row['Address_of_first_guarantor']; ?>"><br><br>
            </div>            
        </div>

        <div class="horizontal-fields">
            <div class="field">
                <label for="new_tel">New Telephone Number:</label>
                <input type="text" id="new_Tel" name="new_Tel" value="<?php echo $row['Telephone_number_of_the_first_guarantor']; ?>"><br><br>
            </div>

            <div class="field">
                <label for="new_defence">New Occupation:</label>
                <input type="text" id="new_defence" name="new_defence" value="<?php echo $row['Defense_of_the_first_guarantor']; ?>"><br><br>
            </div>

            <div class="field">
                <label for="new_place">New Name of place of employment:
                    :</label>
                <input type="text" id="new_place" name="new_place" value="<?php echo $row['Name_of_the_place_of_employment_of_the_first_surety']; ?>"><br><br>
            </div>

            <div class="field">
                <label for="new_addofplce">New Address of the Employment:
                    :</label>
                <input type="text" id="new_addrsofplace" name="new_addrsofplace" value="<?php echo $row['Address_of_the_place_of_employment_of_the_first_guarantor']; ?>"><br><br>
            </div>
        </div>

        <p>SECOND GUARANTOR</p>

        <div class="horizontal-fields">
            <div class="field">
                <label for="new_namescnd">New Name with Initials:</label>
                <input type="text" id="new_name_second" name="new_name_second" value="<?php echo $row['Name_with_initials_of_second_guarantor']; ?>"><br><br>
            </div>

            <div class="field">
                <label for="new_bdy_of_secnd">New Birthday:</label>
                <input type="text" id="new_bdy" name="new_bdy" value="<?php echo $row['Birthday_of_the_second_guarantor']; ?>"><br><br>
            </div>

            <div class="field">
                <label for="new_idsnd">New Identity Card Number:</label>
                <input type="text" id="new_id2" name="new_id2" value="<?php echo $row['Identity_card_number_of_the_second_guarantor']; ?>"><br><br>
            </div>

            <div class="field">
                <label for="new_adrssscnd">New Address:</label>
                <input type="text" id="new_Addsecnd" name="new_Addsecnd" value="<?php echo $row['Address_of_the_second_guarantor']; ?>"><br><br>
            </div>
        </div>

        <div class="horizontal-fields">
            <div class="field">
                <label for="new_telpne">New Telephone Number:</label>
                <input type="text" id="new_telpne" name="new_telpne" value="<?php echo $row['Telephone_number_of_the_second_guarantor']; ?>"><br><br>
            </div>
    
            <div class="field">
                <label for="new_jobe">New Occupation:</label>
                <input type="text" id="new_jb" name="new_jb" value="<?php echo $row['job_of_the_second_guarantor']; ?>"><br><br>
            </div>

                <div class="field">
                <label for="new_place">New Name of the Employment:</label>
                <input type="text" id="new_plce" name="new_plce" value="<?php echo $row['Name_of_the_place_of_employment_of_the_second_guarantor']; ?>"><br><br>
            </div>

                <div class="field">
                <label for="new_addrsses">New Address of Employment:</label>
                <input type="text" id="new_Addrsses" name="new_Addrsses" value="<?php echo $row['Address_of_the_place_of_employment_of_the_second_guarantor']; ?>"><br><br>
            </div>            
        </div>
            
        <p>Other Details</p>

        <div class="horizontal-fields">
            <div class="field">
                <label for="new_situation">New Reason:</label>
                <input type="text" id="new_situa" name="new_situa" value="<?php echo $row['situation']; ?>"><br><br>
            </div>
            
            <div class="field">
                <label for="new_Total_Available_Balance">New Total Available Balance:</label>
                <input type="text" id="new_Total_Available_Balance" name="new_Total_Available_Balance" value="<?php echo $row['Total_Available_Balance']; ?>"><br><br>
            </div>

            <div class="field">
                <label for="new_loan">New Loan Amount:</label>
                <input type="text" id="new_loan" name="new_loan" value="<?php echo $row['loan_amount']; ?>"><br><br>
            </div>

            <div class="field">
                <label for="new_amount">New Amount Paid:</label>
                <input type="text" id="new_amount" name="new_amount" value="<?php echo $row['amount_paid']; ?>"><br><br>
            </div>
        </div>

        <div class="horizontal-fields">
            <div class="field">
                <label for="new_amountpaid">New Amount to be Paid:</label>
                <input type="text" id="new_amountpaid" name="new_amountpaid" value="<?php echo $row['Amount_to_be_paid']; ?>"><br><br>
            </div>
            <div class="field">
                <label for="new_Loan_Policy_Number">New Loan Policy Number:</label>
                <input type="text" id="new_Loan_Policy_Number" name="new_Loan_Policy_Number" value="<?php echo $row['Loan_Policy_Number']; ?>"><br><br>
            </div>
            <div class="field">
                <label for="new_Customer_Number">New Customer Number:</label>
                <input type="text" id="new_Customer_Number" name="new_Customer_Number" value="<?php echo $row['Customer_Number']; ?>"><br><br>
            </div>
        </div>

        <div class="btn">            			
            <form>
            <a class="btn custom-btn-primary" style="background-color: #810b56; color: rgb(255, 255, 255);" href="displaycredit.php">Back</a>
                <button type="submit" name="submit" id="Update">Update</button>
            </form>
        </div>
    </form>
</div>
<p class="copyright-text">© 2023 Various Services Cooperative Society. All rights reserved.</p>
</body>
</html>