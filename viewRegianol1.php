<?php
require 'check_mainlogin.php';
require_once('dbc.php');

$row = array();

if (isset($_GET['MembershipNo'])) {
    $membershipNo = $_GET['MembershipNo'];

    $query = "SELECT * FROM regmember WHERE MembershipNo = '$membershipNo'";
    $result = mysqli_query($connect, $query);

    if (!$result) {
        die("Database query failed: " . mysqli_error($connect));
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Member not found.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Member Details</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .custom-heading {
            text-align: center;
            font-weight:bold;
            font-size:2.5rem;
        }
        .custom-form {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 5px 5px 15px 5px #dcdcdc; 
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="display-4 custom-heading">Member Details</h1>
        <form class="mt-4 custom-form">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="Regional">Region:</label>
                        <input type="text" class="form-control" value="<?php echo $row['Regional']; ?>" disabled>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="MembershipDate">Membership Date:</label>
                        <input type="text" class="form-control" value="<?php echo $row['MembershipDate']; ?>" disabled>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="fname">Full Name:</label>
                        <input type="text" class="form-control" value="<?php echo $row['fName']; ?>" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name_with_ini">Name with Initials:</label>
                        <input type="text" class="form-control" value="<?php echo $row['Name_with_initials']; ?>" disabled>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="date_of_birth">Date of Birth:</label>
                        <input type="text" class="form-control" value="<?php echo $row['date_of_birth']; ?>" disabled>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="id">Identity Number:</label>
                        <input type="text" class="form-control" value="<?php echo $row['Identity_Number']; ?>" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="addrss">Address:</label>
                        <input type="text" class="form-control" value="<?php echo $row['Address']; ?>" disabled>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="phonenmbr">Phone Number:</label>
                        <input type="text" class="form-control" value="<?php echo $row['phone_number']; ?>" disabled>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="job">Job:</label>
                        <input type="text" class="form-control" value="<?php echo $row['job']; ?>" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name_ofplace_employmnt">Name of the Place of Employment:</label>
                        <input type="text" class="form-control" value="<?php echo $row['Name_of_the_place_of_employment']; ?>" disabled>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="addrss_ofplace_employmnt">Address of Place of Employment:</label>
                        <input type="text" class="form-control" value="<?php echo $row['Address_of_place_of_employment']; ?>" disabled>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="bnkname">Bank Name:</label>
                        <input type="text" class="form-control" value="<?php echo $row['Bank_name']; ?>" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="accuntnmbr">Account Number:</label>
                        <input type="text" class="form-control" value="<?php echo $row['Account_Number']; ?>" disabled>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="F10no">F10 No:</label>
                        <input type="text" class="form-control" value="<?php echo $row['F10_No']; ?>" disabled>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="An_associate_membr">Associate Member:</label>
                        <input type="text" class="form-control" value="<?php echo $row['An_associate_member']; ?>" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="votingmembr">Voting Member:</label>
                        <input type="text" class="form-control" value="<?php echo $row['voting_member']; ?>" disabled>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="shre_value">Share Value:</label>
                        <input type="text" class="form-control" value="<?php echo $row['Share_value']; ?>" disabled>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="shre_size">Share Size:</label>
                        <input type="text" class="form-control" value="<?php echo $row['Share_size']; ?>" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="owners_real_state">Owner of Real Estate:</label>
                        <input type="text" class="form-control" value="<?php echo $row['Owners_real_estate']; ?>" disabled>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="family_membrno">Family Membership No:</label>
                        <input type="text" class="form-control" value="<?php echo $row['Family_membership_no']; ?>" disabled>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="family_membrs">Name of Family Members:</label>
                        <input type="text" class="form-control" value="<?php echo $row['Name_family_members']; ?>" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name_of_nomine">Name of Nominees:</label>
                        <input type="text" class="form-control" value="<?php echo $row['Name_of_nominee']; ?>" disabled>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="Addrss_of_nomine">Address:</label>
                        <input type="text" class="form-control" value="<?php echo $row['Address_of_nominee']; ?>" disabled>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="number_of_prts">Number of shares:</label>
                        <input type="text" class="form-control" value="<?php echo $row['Number_of_parts']; ?>" disabled>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="family_membrs">Number of Shares to Transfer:</label>
                        <input type="text" class="form-control" value="<?php echo $row['Number_of_shares_tobe_transferred']; ?>" disabled>
                    </div>
                </div>
            </div>
            <div class="mt-4 text-center">
                <a class="btn" style="background-color: #810b56; color: #fff;" href="SummaryReport.php">Back</a>
            </div>
        </form>
        <p class="mt-5 text-center">© 2023 Various Services Cooperative Society. All rights reserved.</p>
    </div>
    <!-- Include Bootstrap JS (at the bottom of the page for better performance) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
