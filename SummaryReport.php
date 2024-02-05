<?php
require 'check_mainlogin.php';
if ($_SESSION['userRole'] === 'superadmin' || $_SESSION['userRole'] === 'admin') {
    $showExportButtons = true;
} else {
    $showExportButtons = false;
}
?>
<!DOCTYPE html>
<?php
include_once 'dbc.php';
?>
<html>
<head>
    <title>Summary Report</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <style>
        .page-title {
            font-size: 42px;
            font-weight: bold;
            text-align: center;
            padding: 20px 0;
            color: #000;
        }
        .back-button {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-1 page-title">Summary Report</h1>
        <?php
        $query = "SELECT
        regmember.MembershipNo,
        credit.Credit_Member_Number,
        regmember.Register_Fees,
        credit.Total_Available_Balance,
        regmember.MembershipDate
        FROM
            regmember
        JOIN
            credit
        ON
            regmember.MembershipNo = credit.MembershipNo";
        $result = mysqli_query($connect, $query);
        $id = 1;
        ?>
        <table class="table table-bordered" id="reportTable">
            <thead style="background-color: #810b56; color: rgb(255, 255, 255);">
                <tr>
                    <th>ID</th>
                    <th>Membership Number</th>
                    <th>Credit Member Number</th>
                    <th>Register Fees</th>
                    <th>Profit (Rs)</th>
                    <th>Status</th>
                    <th>Voting Eligibility</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $fees = $row['Register_Fees'];
                $balance = $row['Total_Available_Balance'];
                $membershipDate = strtotime($row['MembershipDate']);
                $currentDate = strtotime(date('Y-m-d'));
                $monthsDiff = floor(($currentDate - $membershipDate) / (30 * 60 * 60 * 24));

                // Calculate profit (fees + balance) * 10%
                $profit = ($fees + $balance) * 0.10;
            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><a href="viewRegianol1.php?MembershipNo=<?php echo $row['MembershipNo'];?>"><?php echo $row['MembershipNo'];?></a></td>
                    <td><?php  echo $row['Credit_Member_Number'];?></td>
                    <td><?php echo $fees == 100 ? 'Paid' : 'NonPaid'; ?></td> 
                    <td>Rs <?php echo $profit; ?></td>
                    <td>
                        <?php if ($fees == 100): ?>
                            <span class="badge badge-success">Active</span>
                        <?php else: ?>
                            <span class="badge badge-danger">Inactive</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if ($monthsDiff > 6 && $balance > 100): ?>
                            <span class="badge badge-success">Eligible</span>
                        <?php else: ?>
                            <span class="badge badge-danger">Non-Eligible</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php
                $id++;
            }
            ?>
            </tbody>
        </table>
    </div>
            
    <div class="back-button">
        <a href="Dashboard.php" class="btn btn-secondary">Back</a>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <!-- Include DataTables Export Buttons -->
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script>
        $(document).ready(function() {
            var dataTable = $('#reportTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'csv',
                        text: 'Export to CSV',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5],
                        },
                    },
                    {
                        extend: 'excel',
                        text: 'Export to Excel',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5],
                        },
                    },
                ],
            });

            <?php if (!$showExportButtons): ?>
            dataTable.buttons().container().hide();
            <?php endif; ?>
        });
    </script>
</body>
</html>
