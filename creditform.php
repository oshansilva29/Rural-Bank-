<?php
require 'check_mainlogin.php';
?>
<!DOCTYPE html> 
<html> 
<head> 
 <meta charset="utf-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
   <link rel="stylesheet" type="text/css" href="./css/creditform.css"> 
  
</head> 
<body class="App"> 
  <h1 class="title">Credit Form</h1> 
  <div class="centered-container"> 
    <form class="form" method="POST" action="credit.php" onsubmit="return validateForm()"> 
    <div class="horizontal-fields"> 
        <div class="field"> 
          <label for="credits">Credit Number:</label> 
          <input type="text" name="credits" id="credits" required> 
          <span id="credit-error-message" style="color: red; font-size:0.8rem" ></span> 
      </div> 

      <div class="field"> 
        <label for="policy">Loan Policy Number:</label> 
        <input type="int" name="policy" id="policy" required> 
        <span id="error-message" style="color: red; font-size:0.8rem" ></span> 
      </div>

      <div class="field"> 
        <label for="Customer">Customer Number:</label> 
        <input type="int" name="Customer" id="Customer" required> 
        <span id="error-message" style="color: red; font-size:0.8rem" ></span> 
      </div>
    </div>

    <div class="horizontal-fields"> 
      <div class="field"> 
        <label for="membership">Membership No:</label> 
        <input type="int" name="membership" id="membership" required> 
        <span id="error-message" style="color: red; font-size:0.8rem" ></span> 
      </div> 
      
      <div class="field"> 
        <label for="Dol">Date Of Loan:</label> 
        <input type="Date" name="Dol" id="Dol" required> 
      </div> 
        
      <div class="form-group"> 
        <label for="situa">Situation:</label> 
        <select 
          name="situa" 
          id="situa" 
          required> 
          <option value="">Select situation</option> 
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
    <label for="Total_Available_Balance">Total Available Balance:</label> 
    <input type="text" name="Total_Available_Balance" id="Total_Available_Balance" required> 
    <span id="loanamount-error-message" style="color: red; font-size:0.8rem" ></span> 
   </div> 
    
   <div class="field"> 
    <label for="loanamnt">Loan Amount:</label> 
    <input type="text" name="loanamnt" id="loanamnt" required> 
    <span id="loanamount-error-message" style="color: red; font-size:0.8rem" ></span> 
   </div> 

   <div class="field"> 
    <label for="amountpad">Amount Paid:</label> 
    <input type="text" name="amountpad" id="amountpad" required> 
    <span id="amountpaid-error-message" style="color: red; font-size:0.8rem" ></span> 
   </div> 
   
   <div class="field"> 
    <label for="amount_be_paid">Amount to Be Paid:</label> 
    <input type="text" name="amount_be_paid" id="amount_be_paid" required> 
    <span id="amountbepaid-error-message" style="color: red; font-size:0.8rem" ></span> 
   </div> 
  </div> 

  <div> 
   <h1>First Guarantor</h1>   
  </div>    
  <div class="horizontal-fields"> 
   <div class="field">   
    <label for="nme_with_ini">Name with Initials:</label> 
    <input type="text" name="nme_with_ini" id="nme_with_ini" required> 
   </div> 
   
   <div class="field"> 
    <label for="dobfstgen">Date of Birth:</label> 
    <input type="Date" name="dobfstgen" id="dobfstgen" required> 
   </div> 
    
   <div class="field"> 
    <label for="idnmbr_secnd">Identity Number:</label> 
    <input type="text" name="idnmbr_secnd" id="idnmbr_secnd" required> 
   </div> 
  </div> 
   
  <div class="horizontal-fields"> 
   <div class="field"> 
    <label for="Addres_offirst_gen">Address:</label> 
    <input type="text" name="Addres_offirst_gen" id="Addres_offirst_gen" required> 
   </div> 
   
   <div class="field">  
    <label for="Telephone_offirst_gen">Telephone Number:</label> 
    <input type="text" name="Telephone_offirst_gen" id="Telephone_offirst_gen" required> 
    <span id="telfir-error-message" style="color: red; font-size:0.8rem" ></span> 
   </div> 
   
   <div class="field">  
    <label for="defnce_offirst_gen">Defense:</label> 
    <input type="text" name="defnce_offirst_gen" id="defnce_offirst_gen" required> 
   </div> 
  </div> 
   
  <div class="horizontal-fields"> 
   <div class="field"> 
    <label for="name_of_place">Name of the Place of Employment of the First Surety:</label> 
    <input type="text" name="name_of_place" id="name_of_place" required> 
   </div> 
     
   <div class="field"> 
    <label for="Address_offirst_gen">Address of the Place of Employment:</label> 
    <input type="text" name="Address_offirst_gen" id="Address_offirst_gen" required> 
   </div> 
  </div> 
  <div> 
   <h1>Second Guarantor</h1>   
  </div>    
  <div class="horizontal-fields"> 
   <div class="field"> 
    <label for="name_with_initails">Name with Initials:</label> 
    <input type="text" name="name_with_initails" id="name_with_initails" required> 
   </div> 
   
   <div class="field"> 
    <label for="bod_scd_gen">Birthday:</label> 
    <input type="Date" name="bod_scd_gen" id="bod_scd_gen" required> 
   </div> 
    
   <div class="field"> 
    <label for="id_ofsnd_gen">Identity Card Number:</label> 
    <input type="text" name="id_ofsnd_gen" id="id_ofsnd_gen" required> 
   </div> 
  </div> 
   
  <div class="horizontal-fields"> 
   <div class="field"> 
    <label for="addrs_ofscnd_gen">Address:</label> 
    <input type="text" name="addrs_ofscnd_gen" id="addrs_ofscnd_gen" required> 
   </div> 
 
   <div class="field"> 
    <label for="tel_of_scnd_gen">Telephone Number:</label> 
    <input type="text" name="tel_of_scnd_gen" id="tel_of_scnd_gen" required> 
    <span id="telsec-error-message" style="color: red; font-size:0.8rem" ></span> 
   </div> 
 
   <div class="field"> 
    <label for="sec_of_gua">Security:</label> 
    <input type="text" name="sec_of_gua" id="sec_of_gua" required> 
   </div> 
  </div> 
   
  <div class="horizontal-fields"> 
   <div class="field"> 
    <label for="plce_of_scnd_gua">Name of the Place of Employment:</label> 
    <input type="text" name="plce_of_scnd_gua" id="plce_of_scnd_gua" required> 
   </div> 
   <div class="field"> 
    <label for="Address_ofscnd_gua">Address of the Place of Employment:</label> 
    <input type="text" name="Address_ofscnd_gua" id="Address_ofscnd_gua" required> 
   </div> 
  </div> 
  <div class="btn">                  
    <form>   
        <button type="submit" name="backButton" id="backButton" style="background-color: #810b56; color: rgb(255, 255, 255);">Back</button>
        <button type="submit" name="submit" style="background-color: #810b56; color: rgb(255, 255, 255);">Register</button>   
    </form>
</div> 
<p className="copyright-text">© 2023 Your Company. All rights reserved.</p> 
<script> 
 function validateForm() { 
  var membershipId = document.getElementById("membership").value; 
  var creditId = document.getElementById("credits").value; 
  var loanamnt = document.getElementById("loanamnt").value; 
  var amountpaid = document.getElementById("amountpad").value; 
  var amountbepaid = document.getElementById("amount_be_paid").value; 
  var firstphone = document.getElementById("Telephone_offirst_gen").value; 
  var secondphone = document.getElementById("tel_of_scnd_gen").value; 
 
  var errorMessage = document.getElementById("error-message"); 
  var crediterrorMessage = document.getElementById("credit-error-message"); 
  var loanerrorMessage = document.getElementById("loanamount-error-message"); 
  var loanpaiderrorMessage = document.getElementById("amountpaid-error-message");   
  var loanbepaiderrorMessage = document.getElementById("amountbepaid-error-message"); 
  var telfirphoneError = document.getElementById("telfir-error-message"); 
  var telsecphoneError = document.getElementById("telsec-error-message"); 
 
  var integerPattern = /^\d+$/; 
 
  if (!integerPattern.test(membershipId)) { 
   errorMessage.inn

erHTML = "Membership ID must be an integer."; 
   return false; 
  } else { 
   errorMessage.innerHTML = ""; 
  } 
 
  if (!integerPattern.test(creditId)) { 
   crediterrorMessage.innerHTML = "Credit Number must be an integer."; 
   return false; 
  } else { 
   crediterrorMessage.innerHTML = ""; 
  } 
 
  if (!/^\d+(\.\d{1,2})?$/.test(loanamnt)) { 
   loanerrorMessage.innerHTML = "Number of Loan Amount with up to 2 decimal places."; 
   return false; 
  } else { 
   loanerrorMessage.innerHTML = ""; 
  } 
 
  if (!/^\d+(\.\d{1,2})?$/.test(amountpaid)) { 
   loanpaiderrorMessage.innerHTML = "Loan Paid must be a number with up to 2 decimal places."; 
   return false; 
  } else { 
   loanpaiderrorMessage.innerHTML = ""; 
  } 
 
  if (!/^\d+(\.\d{1,2})?$/.test(amountbepaid)) { 
   loanbepaiderrorMessage.innerHTML = "Loan Be Paid must be a number with up to 2 decimal places."; 
   return false; 
  } else { 
   loanbepaiderrorMessage.innerHTML = ""; 
  } 
 
  var cleanPhone = firstphone.replace(/[^0-9]/g, ""); 
 
  if (cleanPhone.length !== 10) { 
   telfirphoneError.innerHTML = "Phone number must have exactly 10 digits."; 
  return false; 
  } else { 
   telfirphoneError.innerHTML = ""; 
  } 
 
  var cleanPhone = secondphone.replace(/[^0-9]/g, ""); 
 
  if (cleanPhone.length !== 10) { 
   telsecphoneError.innerHTML = "Phone number must have exactly 10 digits."; 
  return false; 
  } else { 
   telsecphoneError.innerHTML = ""; 
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