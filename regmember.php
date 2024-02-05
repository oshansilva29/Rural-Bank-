<?php
 include_once 'dbc.php';

$Register_Fees = isset($_POST['Register_Fees']) ? '100/=' : '0/=';
$Regional=$_POST['reg'];
$MembershipNo=$_POST['membr'];
$MembershipDate=$_POST['membership'];
$fName=$_POST['fstname'];
$Name_with_initials=$_POST['nameinitials'];
$date_of_birth=$_POST['dob'];
$Identity_Number=$_POST['id'];
$Address=$_POST['adrs'];
$phone_number=$_POST['phone'];
$job=$_POST['jb'];
$Name_of_the_place_of_employment=$_POST['placename'];
$Address_of_place_of_employment=$_POST['addrss_of_emp'];
$Bank_name=$_POST['bnk'];
$Account_Number=$_POST['accntnum'];
$F10_No=$_POST['f10num'];
$An_associate_member=$_POST['asso_mem'];
$voting_member=$_POST['voting_membr'];
$Share_value=$_POST['shrevalue'];
$Share_size=$_POST['sharesize'];
$owner_real_estate=$_POST['owner_real_estates'];
$family_mem_no=$_POST['family_membership_num'];
$name_family_mem=$_POST['name_family_membr'];
$name_of_nominee=$_POST['name_of_nomine'];
$addrss_of_nomine=$_POST['add_of_nomine'];
$number_of_prt=$_POST['number_of_prts'];
$num_of_shares_tranfer=$_POST['num_of_shre_trnfer'];


$sql= "INSERT INTO regmember(Register_Fees,Regional,MembershipNo,MembershipDate,fName,Name_with_initials,date_of_birth,Identity_Number,Address,phone_number,job,Name_of_the_place_of_employment,Address_of_place_of_employment,Bank_name,Account_Number,F10_No,An_associate_member,voting_member,Share_value,Share_size,Owners_real_estate,Family_membership_no,Name_family_members,Name_of_nominee,Address_of_nominee,Number_of_parts,Number_of_shares_tobe_transferred)VALUES('$Register_Fees','$Regional','$MembershipNo','$MembershipDate','$fName','$Name_with_initials',
	'$date_of_birth','$Identity_Number','$Address','$phone_number','$job','$Name_of_the_place_of_employment',
	'$Address_of_place_of_employment','$Bank_name','$Account_Number','$F10_No',  
	'$An_associate_member','$voting_member','$Share_value','$Share_size',
	'$owner_real_estate','$family_mem_no','$name_family_mem','$name_of_nominee',
	'$addrss_of_nomine','$number_of_prt','$num_of_shares_tranfer');";

$_result=mysqli_query($connect,$sql);

header("location:displayregnem.php?signup is success");

?>
