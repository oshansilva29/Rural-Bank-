<?php
require 'check_mainlogin.php';
?>
<!DOCTYPE html>  
<html>  
<head>  
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">  
    <link rel="stylesheet" type="text/css" href="reg.css">  
    
</head>  
<body class="App">  
  <h1 class="title">Membership Form</h1>  
  <div class="centered-container">  
    <form class="form" method="POST" action="regmember.php" onsubmit="return validateForm()">  
    <div class="horizontal-fields">  
      <div class="field">  
        <label for="membr">Membership No:</label>  
          <input type="text" name="membr" id="membr" required>  
          <span id="error-message" style="color: red; font-size:0.8rem" ></span> 
        </div>  
         
        <div class="field">  
          <label for="membership">Membership Date:</label>  
          <input type="Date" name="membership" id="membership" required>  
        </div>  
        <div class="field">  
          <label for="dob">Date of Birth:</label>  
          <input type="Date" name="dob" id="dob" required>  
        </div>  
          
        <div class="form-group">  
          <label htmlFor="regional">Regional:</label>  
          <select  
            name="reg"  
            id="reg"  
            required>  
            <option value="">Select Regional</option>  
            <option value="Battaramulla">Battaramulla</option>
            <option value="Jayanthipura">Jayanthipura</option>
            <option value="Pelawaththa">Pelawaththa</option>
            <option value="Talawatugoda">Talawatugoda</option>
            <option value="Batapotha">Batapotha</option>
            <option value="Subhutipura">Subhutipura</option>
            <option value="North Talangama">North Talangama</option>
            <option value="North Thalangama (Urban Area)">North Thalangama (Urban Area)</option>
            <option value="Hinatikumbura">Hinatikumbura</option>
            <option value="Walpola">Walpola</option>
            <option value="Kalapaluwawa">Kalapaluwawa</option>
            <option value="Kalapaluwawa No. 01">Kalapaluwawa No. 01</option>
            <option value="Kotuwegoda">Kotuwegoda</option>
            <option value="Siripura">Siripura</option>
            <option value="Pothuarawa">Pothuarawa</option>
            <option value="Kalalgoda">Kalalgoda</option>
            <option value="Akuregoda">Akuregoda</option>
            <option value="Jayawadanagama">Jayawadanagama</option>
            <option value="Awarihena">Awarihena</option>
          </select>  
        </div>  
      </div>    
  
      <div class="horizontal-fields">  
        <div class="field">    
          <label for="fstname">Full Name:</label>  
          <input type="text" name="fstname" id="fstname" required>  
        </div>  
        <div class="field">    
          <label for="nameinitials">Name with initials:</label>  
          <input type="text" name="nameinitials" id="nameinitials" required>  
        </div>  
      </div>  
      <div class="horizontal-fields">  
        <div class="field">    
          <label for="id">Identity Number:</label>  
          <input type="text" name="id" id="id" required>  
        </div>  
        <div class="field">    
          <label for="adrs">Address:</label>  
          <input type="text" name="adrs" id="adrs" required>  
        </div>  
        <div class="field">    
          <label for="phone">Phone Number:</label>  
          <input type="text" name="phone" id="phone" required>  
          <span id="phone-error" style="color: red; font-size:0.8rem"></span> 
        </div>  
      </div>  
        
      <div class="horizontal-fields">  
        <div class="field">    
          <label for="jb">Job:</label>  
          <input type="text" name="jb" id="jb" required>  
        </div>  
        <div class="field">    
          <label for="placename">Name of the Place of Employment:</label>  
          <input type="text" name="placename" id="placename" required> 
          <span id="placename-error" style="color: red; font-size:0.8rem"></span>   
        </div>  
        <div class="field">
        <label for="addrss_of_emp">Address of Place of Employment:</label>  
          <input type="text" name="addrss_of_emp" id="addrss_of_emp" required>  
        </div>  
      </div>  
        
      <div class="horizontal-fields">  
        <div class="field">    
          <label for="f10num">F10 No:</label>  
          <input type="text" name="f10num" id="f10num" required>  
          <span id="f10-error" style="color: red; font-size:0.8rem"></span>  
        </div>  
  
        <div class="field">    
          <label for="accntnum">Account Number:</label>  
          <input type="text" name="accntnum" id="accntnum" >    
        </div>  
  
        <div class="form-group" form="">  
          <label htmlFor="bankName">Bank Name:</label>  
          <select  
          name="bnk"  
          id="bnk"  
          required>  
          <option value="Battaramulla">Battaramulla</option>
          <option value="Talawatugoda">Talawatugoda</option>
          <option value="Pelawaththa">Pelawaththa</option>
          <option value="Batapotha">Batapotha</option>
          <option value="North Talangama">North Talangama</option>
          <option value="Pothuarawa">Pothuarawa</option>
          <option value="Jayawadanagama">Jayawadanagama</option>
          <option value="Hokandara North">Hokandara North</option>
          <option value="Walpola">Walpola</option>
          <option value="Kotuwegoda">Kotuwegoda</option>
          <option value="Kalapaluwawa">Kalapaluwawa</option>
          <option value="Kalalgoda">Kalalgoda</option>
          <option value="Koswaththa">Koswaththa</option>
          </select>  
        </div>  
      </div>  
        
      <div class="horizontal-fields">  
        <div class="field">  
            <label for="asso_mem">A associate member:</label>  
            <input type="text" name="asso_mem" id="asso_mem" required>  
            <span id="asso_mem-error" style="color: red; font-size:0.8rem"></span> 
          </div>  
  
          <div class="field">  
            <label for="voting_membr">A voting member:</label>  
            <input type="text" name="voting_membr" id="voting_membr" required>  
            <span id="voting_membr-error" style="color: red; font-size:0.8rem"></span> 
          </div>  
  
          <div class="field"> 
            <label for="shrevalue">Share Value:</label> 
            <input type="text" name="shrevalue" id="shrevalue" required> 
            <span id="shrevalue-error" style="color: red; font-size:0.8rem"></span> 
        </div> 
 
        <div class="field"> 
            <label for="sharesize">Share Size:</label> 
            <input type="text" name="sharesize" id="sharesize" required> 
            <span id="sharesize-error" style="color: red; font-size:0.8rem"></span> 
        </div> 
      </div>  
        
      <div class="horizontal-fields">  
        <div class="field">    
          <label for="owner_real_estates">Owner of Real Estate:</label>  
          <input type="text" name="owner_real_estates" id="owner_real_estates" required>  
        </div>  
  
        <div class="field">    
          <label for="family_membership_num">Family Membership No:</label>  
          <input type="text" name="family_membership_num" id="family_membership_num" required>  
          <span id="familynoerror-message" style="color: red; font-size:0.8rem"></span> 
        </div>  
  
        <div class="field">    
          <label for="name_family_membr">Name of Family Member:</label>  
          <input type="text" name="name_family_membr" id="name_family_membr" required> 
          <span id="name_family_membr-error" style="color: red; font-size:0.8rem"></span>  
        </div>  
  
        <div class="field">    
          <label for="name_of_nomine">Name of Nominee:</label>  
          <input type="text" name="name_of_nomine" id="name_of_nomine" required> 
          <span id="name_of_nomine-error" style="color: red; font-size:0.8rem"></span> 
        </div>  
      </div>  
  
      <div class="horizontal-fields">      
        <div class="field">
          <label for="add_of_nomine">Address of Nominee:</label>  
          <input type="text" name="add_of_nomine" id="add_of_nomine" required>  
        </div>  
        <div class="field">    
          <label for="number_of_prts">Number of Parts:</label>  
          <input type="text" name="number_of_prts" id="number_of_prts" required>  
          <span id="number_of_prts-error" style="color: red; font-size:0.8rem"></span> 
        </div>  
        <div class="field">    
          <label for="num_of_shre_trnfer">Number of Shares to Transfer:</label>  
          <input type="text" name="num_of_shre_trnfer" id="num_of_shre_trnfer" required>  
          <span id="transfsharesize-error" style="color: red; font-size:0.8rem"></span> 
        </div>  
      </div>  
      <div class="btn horizontal-fields"> 
        <div class="field">
            <input type="checkbox" name="Register_Fees" id="Register_Fees" value="Register_Fees"><strong>This Member pay the Register Fees 100/=</strong></input>
        </div>
        <div class="field">   
            <button type="submit" name="backButton" id="backButton">Back</button>   
            <button type="submit" name="submit">Register</button>
        </div>   
      </form>   
    </div>
<p class="copyright-text">© 2023 Your Company. All rights reserved.</p>   
<script>  
    function validateForm() { 
        var membershipId = document.getElementById("membr").value; 
        var familymembershipId = document.getElementById("family_membership_num").value; 
        var f10num = document.getElementById("f10num").value; 
        var shrevalue = document.getElementById("shrevalue").value; 
        var sharesize = document.getElementById("sharesize").value; 
        var transfsharesize = document.getElementById("num_of_shre_trnfer").value; 
        var numofparts = document.getElementById("number_of_prts").value; 
        var nameField = document.getElementById("name_of_nomine").value;         
        var nameField2 = document.getElementById("name_family_membr").value; 
        var nameField3 = document.getElementById("placename").value; 
        var phone = document.getElementById("phone").value; 
        var assoMemInput = document.getElementById("asso_mem").value.trim().toLowerCase(); 
        var votingMemInput = document.getElementById("voting_membr").value.trim().toLowerCase(); 
 
        var errorMessage = document.getElementById("error-message"); 
        var shrevalueError = document.getElementById("shrevalue-error"); 
        var sharesizeError = document.getElementById("sharesize-error"); 
        var transfsharesizeError = document.getElementById("transfsharesize-error"); 
        var numofpartError = document.getElementById("number_of_prts-error"); 
        var nameFieldErrors = document.getElementById("name_of_nomine-error"); 
        var nameFieldErrors2 = document.getElementById("name_family_membr-error"); 
        var nameFieldErrors3 = document.getElementById("placename-error"); 
        var phoneError = document.getElementById("phone-error"); 
        var familynoerrorMessage = document.getElementById("familynoerror-message");         
        var f10error = document.getElementById("f10-error"); 
        var assoMemError = document.getElementById("asso_mem-error"); 
        var votingMemError = document.getElementById("voting_membr-error"); 
 
        var integerPattern = /^\d+$/; 
 
        if (!integerPattern.test(membershipId)) { 
            errorMessage.innerHTML = "Membership ID must be an integer."; 
            return false; 
        } else { 
            errorMessage.innerHTML = ""; 
        } 
 
        if (!integerPattern.test(familymembershipId)) { 
          familynoerrorMessage.innerHTML = "Family Membership No must be an integer."; 
            return false; 
        } else { 
          familynoerrorMessage.innerHTML = ""; 
        } 
 
        if (!integerPattern.test(f10num)) { 
          f10error.innerHTML = "F10 No must be an integer."; 
            return false; 
        } else { 
          f10error.innerHTML = ""; 
        } 
 
        if (!/^\d+(\.\d{1,2})?$/.test(shrevalue)) { 
            shrevalueError.innerHTML = "Share Value must be a number with up to 2 decimal places."; 
            return false; 
        } else {
shrevalueError.innerHTML = ""; 
        } 
 
        if (!/^\d+(\.\d{1,2})?$/.test(sharesize)) { 
            sharesizeError.innerHTML = "Share Size must be a number with up to 2 decimal places."; 
            return false; 
        } else { 
            sharesizeError.innerHTML = ""; 
        } 
 
        if (!/^\d+(\.\d{1,2})?$/.test(transfsharesize)) { 
          transfsharesizeError.innerHTML = "Number of Shares to Transfer number with up to 2 decimal places."; 
            return false; 
        } else { 
          transfsharesizeError.innerHTML = ""; 
        } 
 
        if (!/^\d+(\.\d{1,2})?$/.test(numofparts)) { 
          numofpartError.innerHTML = "Num of Part Size must be a number with up to 2 decimal places."; 
            return false; 
        } else { 
          numofpartError.innerHTML = ""; 
        } 
 
        if (!/^[A-Za-z\s]+$/.test(nameField)) { 
          nameFieldErrors.innerHTML = "Name must be String"; 
          return false; 
        }else { 
          nameFieldErrors.innerHTML = ""; 
        } 
 
        if (!/^[A-Za-z\s]+$/.test(nameField2)) { 
          nameFieldErrors2.innerHTML = "Name must be String"; 
          return false; 
        }else { 
          nameFieldErrors2.innerHTML = ""; 
        } 
 
        if (!/^[A-Za-z\s]+$/.test(nameField3)) { 
          nameFieldErrors3.innerHTML = "Name must be String"; 
          return false; 
        }else { 
          nameFieldErrors3.innerHTML = ""; 
        } 
 
        var cleanPhone = phone.replace(/[^0-9]/g, ""); 
 
        if (cleanPhone.length !== 10) { 
          phoneError.innerHTML = "Phone number must have exactly 10 digits."; 
          return false; 
        } else { 
          phoneError.innerHTML = ""; 
        } 
         
        if (assoMemInput !== "yes" && assoMemInput !== "no") { 
          assoMemError.innerHTML = "Input must be 'yes' or 'no'."; 
          return false; 
        } else { 
          assoMemError.innerHTML = ""; 
        } 
 
        if (votingMemInput !== "yes" && votingMemInput !== "no") { 
          votingMemError.innerHTML = "Input must be 'yes' or 'no'."; 
          return false; 
        } else { 
          votingMemError.innerHTML = ""; 
        } 
 
    } 
 
    const backButton = document.getElementById('backButton'); 
 
    backButton.addEventListener('click', (event) => { 
        event.preventDefault(); 
        window.location.href = 'Dashboard.php'; 
    }); 
</script>  
</body>  
</html>