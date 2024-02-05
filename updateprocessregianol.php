<?php
require 'check_mainlogin.php';
?>
<?php
require_once('dbc.php');
include 'displayregnem.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update_id'])) {
        $update_id = $_POST['update_id'];
        
        $new_Regional = $_POST['new_Regional'];
        $new_MembershipDate =$_POST['new_MembershipDate'];
        $new_fname =$_POST['new_fname'];
        $new_name_with_ini=$_POST['new_name_with_ini'];
        $new_date_of_birth=$_POST['new_date_of_birth'];
        $new_id=$_POST['new_id'];
        $new_addrss=$_POST['new_addrss'];
        $new_phonenmbr=$_POST['new_phonenmbr'];
        $new_job=$_POST['new_job'];
        $new_name_ofplace_employmnt=$_POST['new_name_ofplace_employmnt'];
        $new_addrss_ofplace_employmnt=$_POST['new_addrss_ofplace_employmnt'];
        $new_bnkname=$_POST['new_bnkname'];
        $new_accuntnmbr=$_POST['new_accuntnmbr'];
        $new_F10no=$_POST['new_F10no'];
        $new_An_associate_membr=$_POST['new_An_associate_membr'];
        $new_votingmembr=$_POST['new_votingmembr'];
        $new_shre_value=$_POST['new_shre_value'];
        $new_shre_size=$_POST['new_shre_size'];
        $new_owners_real_state=$_POST['new_owners_real_state'];
        $new_family_membrno=$_POST['new_family_membrno'];
        $new_family_membrs=$_POST['new_family_membrs'];
        $new_name_of_nomine=$_POST['new_name_of_nomine'];
        $new_Addrss_of_nomine=$_POST['new_Addrss_of_nomine'];
        $new_number_of_prts=$_POST['new_number_of_prts'];
        $new_nmbr_of_shrestobe_tranfer=$_POST['new_nmbr_of_shrestobe_tranfer'];
        $new_Register_Fees = isset($_POST['new_Register_Fees']) ? '100/=' : '0/=';

        $query = "UPDATE regmember
                  SET Regional = '$new_Regional',
                  Register_Fees = '$new_Register_Fees',
                  MembershipDate='$new_MembershipDate',
                  fName='$new_fname',
                  Name_with_initials='$new_name_with_ini',
                  date_of_birth ='$new_date_of_birth',
                  Identity_Number='$new_id',
                  Address='$new_addrss',
                  phone_number='$new_phonenmbr',
                  job  ='$new_job',
                  Name_of_the_place_of_employment='$new_name_ofplace_employmnt',
                  Address_of_place_of_employment ='$new_addrss_ofplace_employmnt',
                  Bank_name='$new_bnkname',
                  Account_Number='$new_accuntnmbr',
                  F10_No='$new_F10no',
                  An_associate_member='$new_An_associate_membr',
                  voting_member='$new_votingmembr',
                  Share_value='$new_shre_value',
                  Share_size='$new_shre_size',
                  Owners_real_estate='$new_owners_real_state',
                  Family_membership_no='$new_family_membrno',
                  Name_family_members='$new_family_membrs',
                  Name_of_nominee='$new_name_of_nomine',
                  Address_of_nominee='$new_Addrss_of_nomine',
                  Number_of_parts='$new_number_of_prts',
                  Number_of_shares_tobe_transferred='$new_nmbr_of_shrestobe_tranfer'
                  WHERE MembershipNo  = '$update_id'";

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
