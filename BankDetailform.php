<?php
require 'check_mainlogin.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bank Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/reginalform.css">
  <style>
    
  </style>
</head>
<body>
  <div class="container-fluid bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
      <div class="form-container p-5">
        <h2 class="mb-4">Bank Form</h2>
        <form method="POST" action="Bank.php">
          <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="ID" required>
          </div>
          <div class="form-group">
            <label for="Region_id">Branch No</label>
            <input type="text" class="form-control" id="branch" name="Branch" placeholder="branch" required>
          </div>
          <button type="submit" class="btn" style="background-color: #810b56; color: white;" name="submit">Submit</button>
          <a href="BankDetailDisplay.php" class="btn btn-secondary ml-2">Back</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>