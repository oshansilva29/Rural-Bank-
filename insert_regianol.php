<?php
require_once('dbc.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $selectedRegianol = $_POST['reg'];

    if (!empty($selectedRegianol)) {
       
        $selectedRegianol = mysqli_real_escape_string($connect, $selectedRegianol);

        $insertQuery = "INSERT INTO regmember(Regional) VALUES ('$selectedRegianol')";
        
        if (mysqli_query($connect, $insertQuery)) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . mysqli_error($connect);
        }
    } else {
        echo "Please select a Regianol.";
    }
} else {
    echo "Invalid request.";
}
?>
