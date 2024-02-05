<?php
require 'check_mainlogin.php';
?>
<?php
require_once('dbc.php');
include 'displaycredit.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update_id'])) {
        $update_id = $_POST['update_id'];

        $new_name = $_POST['new_name'];
        $new_dob =$_POST['new_Date_of_birth'];
        $new_id=$_POST['new_id'];
        $new_addrss =$_POST['new_Address'];
        $new_tel =$_POST['new_Tel'];
        $new_defence=$_POST['new_defence'];
        $new_place=$_POST['new_place'];
        $new_addofplce=$_POST['new_addrsofplace'];
        $new_namescnd=$_POST['new_name_second'];
        $new_bdy_of_secnd=$_POST['new_bdy'];
        $new_idsnd=$_POST['new_id2'];
        $new_adrssscnd=$_POST['new_Addsecnd'];
        $new_telpne=$_POST['new_telpne'];
        $new_jobe=$_POST['new_jb'];
        $new_place=$_POST['new_plce'];
        $new_addrsses=$_POST['new_Addrsses'];
        $new_situation=$_POST['new_situa'];
        $new_Total_Available_Balance=$_POST['new_Total_Available_Balance'];
        $new_loan=$_POST['new_loan'];
        $new_amount=$_POST['new_amount'];
        $new_amountpaid=$_POST['new_amountpaid'];
        $new_customer_number=$_POST['new_Customer_Number'];

        $query = "UPDATE credit 
                  SET Name_with_initials_of_first_guarantor = '$new_name',Date_of_birth_of_the_first_guarantor='$new_dob',
                  Address_of_first_guarantor='$new_addrss',Telephone_number_of_the_first_guarantor='$new_tel',
                  Defense_of_the_first_guarantor='$new_defence',Name_of_the_place_of_employment_of_the_first_surety='$new_place',
                  Address_of_the_place_of_employment_of_the_first_guarantor='$new_addofplce',
                  Name_with_initials_of_second_guarantor='$new_namescnd',
                  Birthday_of_the_second_guarantor='$new_bdy_of_secnd',
                  Identity_card_number_of_the_second_guarantor='$new_idsnd',
                  Address_of_the_second_guarantor='$new_adrssscnd',
                  Telephone_number_of_the_second_guarantor='$new_telpne',
                  job_of_the_second_guarantor='$new_jobe',
                  Name_of_the_place_of_employment_of_the_second_guarantor='$new_place',
                  Address_of_the_place_of_employment_of_the_second_guarantor='$new_addrsses',
                  situation='$new_situation',Total_Available_Balance='$new_Total_Available_Balance',loan_amount='$new_loan',amount_paid ='$new_amount',Amount_to_be_paid='$new_amountpaid',Customer_Number='$new_customer_number'
                  WHERE Credit_Member_Number = '$update_id'";

        $result = mysqli_query($connect, $query);

        if ($result) {
            echo "Record updated successfully!";
        } else {
            echo "Error updating record: " . mysqli_error($connect);
        }
    } else {
        echo "Invalid request.";
    }
} else {
    echo "Form not submitted.";
}
?>
