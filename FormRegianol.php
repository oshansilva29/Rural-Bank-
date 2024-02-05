<?php
require 'check_mainlogin.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Regional Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="./css/reginalform.css">
  <style>
    
  </style>
</head>
<body>
  <div class="container-fluid bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
      <div class="form-container p-5">
        <h2 class="mb-4">Regional Form</h2>
        <form method="POST" action="Regianol.php">
          <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="ID" required>
          </div>
          <div class="form-group">
            <label for="region">Region</label>
            <input type="text" class="form-control" id="region" name="region" placeholder="Region" required>
          </div>
          <button type="submit" class="btn" name="submit" style="background-color: #810b56; color: white;">Submit</button>
          <a href="DisplayRegianol.php" class="btn btn-secondary ml-2">Back</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>