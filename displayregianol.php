<?php
require 'check_mainlogin.php';
?>

<!DOCTYPE html>
<?php
require_once('dbc.php');
$query = "select * from regionaltb";
$re = mysqli_query($connect, $query);

// Check if the delete button is clicked
if (isset($_POST['delete']) && $_SESSION['userRole'] === 'superadmin') {
    $idToDelete = $_POST['idToDelete'];
    $deleteQuery = "DELETE FROM regionaltb WHERE ID = $idToDelete";
    mysqli_query($connect, $deleteQuery);
}

?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regional Table</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <div class="d-flex justify-content-start mb-2">
        <form method="post" action="FormRegianol.php">
            <button class="btn mr-2" style="background-color: #810b56; color: white;">Add New</button>
        </form>

        <form method="post" action="Dashboard.php">
            <button class="btn btn-secondary">Exit</button>
        </form>
    </div>

    <br>
    <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Regional</th>
            <?php
            // Display the "Action" column and delete button only for superadmin
            if ($_SESSION['userRole'] === 'superadmin') {
                echo '<th>Action</th>';
            }
            ?>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($re)) {
            ?>
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['Regional']; ?></td>
                <?php
                if ($_SESSION['userRole'] === 'superadmin') {
                    echo '<td>';
                    echo '<form method="post">';
                    echo '<input type="hidden" name="idToDelete" value="' . $row['ID'] . '">';
                    echo '<button type="submit" name="delete" class="btn btn-danger">Delete</button>';
                    echo '</form>';
                    echo '</td>';
                }
                ?>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
