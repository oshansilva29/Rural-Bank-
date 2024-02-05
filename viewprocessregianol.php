<?php
require 'check_mainlogin.php';
?>
<?php
require_once('dbc.php');
include 'displayregnem.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update_id'])) {
        $update_id = $_POST['update_id'];
        
        $Regional = $_POST['Regional'];
        $MembershipDate =$_POST['MembershipDate'];
        $fname =$_POST['fname'];
        $name_with_ini=$_POST['name_with_ini'];
        $date_of_birth=$_POST['date_of_birth'];
        $id=$_POST['id'];
        $addrss=$_POST['addrss'];
        $phonenmbr=$_POST['phonenmbr'];
        $job=$_POST['job'];
        $name_ofplace_employmnt=$_POST['name_ofplace_employmnt'];
        $addrss_ofplace_employmnt=$_POST['addrss_ofplace_employmnt'];
        $bnkname=$_POST['bnkname'];
        $accuntnmbr=$_POST['accuntnmbr'];
        $F10no=$_POST['F10no'];
        $An_associate_membr=$_POST['An_associate_membr'];
        $votingmembr=$_POST['votingmembr'];
        $shre_value=$_POST['shre_value'];
        $shre_size=$_POST['shre_size'];
        $owners_real_state=$_POST['owners_real_state'];
        $family_membrno=$_POST['family_membrno'];
        $family_membrs=$_POST['family_membrs'];
        $name_of_nomine=$_POST['name_of_nomine'];
        $Addrss_of_nomine=$_POST['Addrss_of_nomine'];
        $number_of_prts=$_POST['number_of_prts'];
        $nmbr_of_shrestobe_tranfer=$_POST['nmbr_of_shrestobe_tranfer'];
        $Register_Fees = isset($_POST['Register_Fees']) ? '100/=' : '0/=';
        
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
