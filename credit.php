<?php
 include_once 'dbc.php';

$Credit_Member_Numbers=$_POST['credits'];
$Loan_Policy_Number=$_POST['policy'];
$Customer_Number=$_POST['Customer'];
$MembershipNos=$_POST['membership'];
$Date_of_loans=$_POST['Dol'];
$Name_with_initials_of_first_guarantors=$_POST['nme_with_ini'];
$Date_of_birth_of_the_first_guarantors=$_POST['dobfstgen'];
$Address_of_first_guarantors=$_POST['Addres_offirst_gen'];
$Identity_card_number_of_the_first_guarantors=$_POST['idnmbr_secnd'];
$Telephone_number_of_the_first_guarantors=$_POST['Telephone_offirst_gen'];
$Defense_of_the_first_guarantors=$_POST['defnce_offirst_gen'];
$Name_of_the_place_of_employment_of_the_first_suretys=$_POST['name_of_place'];
$Address_of_the_place_of_employment_of_the_first_guarantors=$_POST['Address_offirst_gen'];
$Name_with_initials_of_second_guarantors=$_POST['name_with_initails'];
$Birthday_of_the_second_guarantors=$_POST['bod_scd_gen'];
$Identity_card_number_of_the_second_guarantors=$_POST['id_ofsnd_gen'];
$Address_of_the_second_guarantors=$_POST['addrs_ofscnd_gen'];
$Telephone_number_of_the_second_guarantors=$_POST['tel_of_scnd_gen'];
$job_of_the_second_guarantors=$_POST['sec_of_gua'];
$Name_of_the_place_of_employment_of_the_second_guarantors=$_POST['plce_of_scnd_gua'];
$Address_of_the_place_of_employment_of_the_second_guarantors=$_POST['Address_ofscnd_gua'];
$situations=$_POST['situa'];
$Total_Available_Balance=$_POST['Total_Available_Balance'];
$loan_amounts=$_POST['loanamnt'];
$amount_paids=$_POST['amountpad'];
$Amount_to_be_paids=$_POST['amount_be_paid'];


$sql= "INSERT INTO credit(Credit_Member_Number,Loan_Policy_Number,Customer_Number,MembershipNo,Date_of_loan,Name_with_initials_of_first_guarantor,Date_of_birth_of_the_first_guarantor,Address_of_first_guarantor,Identity_card_number_of_the_first_guarantor,Telephone_number_of_the_first_guarantor,Defense_of_the_first_guarantor,Name_of_the_place_of_employment_of_the_first_surety,Address_of_the_place_of_employment_of_the_first_guarantor,Name_with_initials_of_second_guarantor,Birthday_of_the_second_guarantor,Identity_card_number_of_the_second_guarantor,Address_of_the_second_guarantor,Telephone_number_of_the_second_guarantor,job_of_the_second_guarantor,Name_of_the_place_of_employment_of_the_second_guarantor,Address_of_the_place_of_employment_of_the_second_guarantor,situation,Total_Available_Balance,loan_amount,amount_paid,Amount_to_be_paid) VALUES ('$Credit_Member_Numbers','$Loan_Policy_Number','$Customer_Number','$MembershipNos','$Date_of_loans','$Name_with_initials_of_first_guarantors','$Date_of_birth_of_the_first_guarantors','$Address_of_first_guarantors','$Identity_card_number_of_the_first_guarantors','$Telephone_number_of_the_first_guarantors','$Defense_of_the_first_guarantors','$Name_of_the_place_of_employment_of_the_first_suretys','$Address_of_the_place_of_employment_of_the_first_guarantors','$Name_with_initials_of_second_guarantors','$Birthday_of_the_second_guarantors','$Identity_card_number_of_the_second_guarantors','$Address_of_the_second_guarantors','$Telephone_number_of_the_second_guarantors','$job_of_the_second_guarantors','$Name_of_the_place_of_employment_of_the_second_guarantors','$Address_of_the_place_of_employment_of_the_second_guarantors','$situations','$Total_Available_Balance','$loan_amounts','$amount_paids','$Amount_to_be_paids');";


$_result=mysqli_query($connect,$sql);

header("location:displaycredit.php?signup is success");

?>