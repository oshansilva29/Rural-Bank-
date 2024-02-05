<?php
require 'check_mainlogin.php';
?>
<?php 
require_once('dbc.php'); 
 
if (isset($_POST['update_id'])) { 
    $update_id = $_POST['update_id']; 
 
    $query = "SELECT * FROM regmember WHERE MembershipNo  = '$update_id'"; 
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
    <title>Update Registration Form Data</title> 
    <link rel="stylesheet" type="text/css" href="reg.css"> 
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
    <h1 class="title">Update Registration Form Data</h1> 
    <div class="centered-container"> 
    <form class="form" action="updateprocessRegianol.php" method="post"> 
        <input type="hidden" name="update_id" value="<?php echo $row['MembershipNo']; ?>"> 
         
        <div class="horizontal-fields"> 
            <div class="field"> 
                <label for="new_Regional">New Region:</label> 
                <input type="text" id="new_Regional" name="new_Regional" value="<?php echo $row['Regional']; ?>"> 
            </div> 
            <div class="field"> 
                <label for="new_MembershipDate">New membership Date:</label> 
                <input type="text" id="new_MembershipDate" name="new_MembershipDate" value="<?php echo $row['MembershipDate']; ?>"> 
            </div> 
            <div class="field"> 
                <label for="new_fname">New Full Name:</label> 
                <input type="text" id="new_fname" name="new_fname" value="<?php echo $row['fName']; ?>"> 
            </div> 
            <div class="field"> 
                <label for="new_name_with_ini">New name with ini:</label> 
                <input type="text" id="new_name_with_ini" name="new_name_with_ini" value="<?php echo $row['Name_with_initials']; ?>"> 
            </div>    
        </div> 
        <div class="horizontal-fields"> 
            <div class="field"> 
                <label for="new_date_of_birth">New Date of Birth:</label> 
                <input type="text" id="new_date_of_birth" name="new_date_of_birth" value="<?php echo $row['date_of_birth']; ?>"> 
            </div> 
            <div class="field"> 
                <label for="new_id">New Identity Number:</label> 
                <input type="text" id="new_id" name="new_id" value="<?php echo $row['Identity_Number']; ?>"> 
            </div>   
            <div class="field"> 
                <label for="new_addrss">New Addrss:</label> 
                <input type="text" id="new_addrss" name="new_addrss" value="<?php echo $row['Address']; ?>"> 
            </div>   
            <div class="field"> 
                <label for="new_phonenmbr">New Phone Number:</label> 
                <input type="text" id="new_phonenmbr" name="new_phonenmbr" value="<?php echo $row['phone_number']; ?>"> 
            </div>  
        </div> 
 
        <div class="horizontal-fields"> 
          <div class="field"> 
              <label for="job">New Job:</label> 
              <input type="text" id="" name="new_job" value="<?php echo $row['job']; ?>"> 
          </div> 
          <div class="field"> 
              <label for="new_name_ofplace_employmnt">New Name of the Place of Employment:</label> 
              <input type="text" id="new_name_ofplace_employmnt" name="new_name_ofplace_employmnt" value="<?php echo $row['Name_of_the_place_of_employment']; ?>"> 
          </div> 
          <div class="field"> 
              <label for="new_addrss_ofplace_employmnt">New Address of Place of Employment:</label> 
              <input type="text" id="new_addrss_ofplace_employmnt" name="new_addrss_ofplace_employmnt" value="<?php echo $row['Address_of_place_of_employment']; ?>"> 
          </div> 
          <div class="field"> 
              <label for="">New Bank Name:</label> 
              <input type="text" id="new_bnkname" name="new_bnkname" value="<?php echo $row['Bank_name']; ?>"> 
          </div>  
        </div> 
         
        <div class="horizontal-fields"> 
          <div class="field"> 
              <label for="Account_Number">New Account Number:</label> 
              <input type="text" id="new_accuntnmbr" name="new_accuntnmbr" value="<?php echo $row['Account_Number']; ?>"> 
          </div> 
 
          <div class="field"> 
              <label for="new_F10no">New F10 No:</label> 
              <input type="text" id="new_F10no" name="new_F10no" value="<?php echo $row['F10_No']; ?>"> 
          </div> 
 
          <div class="field"> 
              <label for="new_An_associate_membr">New associate member:</label> 
              <input type="text" id="new_An_associate_membr" name="new_An_associate_membr" value="<?php echo $row['An_associate_member']; ?>"> 
          </div> 
 
          <div class="field">   
              <label for="new_votingmembr">New voting member:</label> 
              <input type="text" id="new_votingmembr" name="new_votingmembr" value="<?php echo $row['voting_member']; ?>"> 
          </div> 
        </div> 
 
        <div class="horizontal-fields"> 
          <div class="field"> 
              <label for="new_shre_value">New Share Value:</label> 
              <input type="text" id="new_shre_value" name="new_shre_value" value="<?php echo $row['Share_value']; ?>"> 
          </div> 
          <div class="field"> 
              <label for="new_shre_size">New Share Size:</label> 
              <input type="text" id="new_shre_size" name="new_shre_size" value="<?php echo $row['Share_value']; ?>"> 
          </div> 
          <div class="field"> 
              <label for="new_owners_real_state">New Owner of Real Estate:</label> 
              <input type="text" id="new_owners_real_state" name="new_owners_real_state" value="<?php echo $row['Owners_real_estate']; ?>"> 
          </div> 
          <div class="field"> 
              <label for="new_family_membrno">New Family Membership No:</label> 
              <input type="text" id="new_family_membrno" name="new_family_membrno" value="<?php echo $row['Family_membership_no']; ?>"> 
          </div> 
        </div> 
 
        <div class="horizontal-fields"> 
            <div class="field"> 
                <label for="new_family_membrs">New Name of Family Members:</label> 
                <input type="text" id="new_family_membrs" name="new_family_membrs" value="<?php echo $row['Name_family_members']; ?>"> 
            </div> 
            <div class="field"> 
                <label for="new_name_of_nomine">New Name of Nominees:</label> 
                <input type="text" id="new_name_of_nomine" name="new_name_of_nomine" value="<?php echo $row['Name_of_nominee']; ?>"> 
            </div> 
            <div class="field"> 
                <label for="new_Addrss_of_nomine">New addrss:</label> 
                <input type="text" id="new_Addrss_of_nomine" name="new_Addrss_of_nomine" value="<?php echo $row['Address_of_nominee']; ?>"> 
            </div>    
        </div> 
 
        <div class="horizontal-fields">  
            <div class="field"> 
                <label for="new_number_of_prts">New Number of shares:</label> 
                <input type="text" id="new_number_of_prts" name="new_number_of_prts" value="<?php echo $row['Number_of_parts']; ?>"> 
            </div>    
            <div class="field"> 
                <label for="new_family_membrs">New Number of Shares to Transfer::</label> 
                <input type="text" id="new_nmbr_of_shrestobe_tranfer" name="new_nmbr_of_shrestobe_tranfer" value="<?php echo $row['Number_of_shares_tobe_transferred']; ?>"> 
            </div> 
        </div> 
     
        <div class="btn horizontal-fields"> 
        <div class="field">
            <input type="checkbox" name="new_Register_Fees" id="new_Register_Fees" value="<?php echo $row['Register_Fees']; ?>"><strong>This Member pay the Register Fees 100/=</strong></input>
        </div>
        <div class="field">   
            <a class="btn custom-btn-primary" style="background-color: #810b56; color: rgb(255, 255, 255);" href="displayregnem.php">Back</a>
            <button type="submit" name="submit">Update</button>
        </div>   
      </form>   
    </div>
    </form> 
</div> 
<p class="copyright-text">© 2023 Various Services Cooperative Society. All rights reserved.</p> 
</body> 
</html>