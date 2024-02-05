<?php
require 'check_login.php';
?>

<?php
require_once('dbc.php');
$query = "SELECT * FROM users";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registration Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .scrollable-table {
            max-height: 500px;
            overflow-y: auto;
        }

    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">User Registration Table</h1>
        <div class="d-flex mb-3">
            <a href="registration.php">
                <button type="button" class="btn mr-3" style="background-color: #810b56; color: rgb(255, 255, 255);">Add</button>
            </a>
            <form method="post" action="logout.php">
                <button type="submit" class="btn btn-secondary" name="logout">Log Out</button>
            </form>
        </div>
        <div class="scrollable-table"> 
            <table class="table table-bordered table-hover text-center">
                <thead style="background-color: #810b56; color: white">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $row_count = 0; // Initialize a row count variable

                    while ($row = mysqli_fetch_assoc($result)) {
                        $row_count++; // Increment the row count for each row

                        if ($row_count > 5) {
                    ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['username'];?></td>
                        <td><?php echo $row['role'];?></td>
                        <td class="d-flex justify-content-center"> <!-- Center the buttons -->
                            <form method="post" action="delete_CRUD.php" class="d-flex mr-3">
                                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                        }
                        else {
                    ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['username'];?></td>
                        <td><?php echo $row['role'];?></td>
                        <td></td> <!-- Leave the "Actions" column empty for the first 5 rows -->
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
