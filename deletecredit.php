<?php
include_once 'dbc.php';

if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    $delete_query = "DELETE FROM credit WHERE Credit_Member_Number = '$delete_id'";
    $delete_result = mysqli_query($connect, $delete_query);
    if ($delete_result) {
        header("location: displaycredit.php?delete_success");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($connect);
    }
}

$sql = "SELECT * FROM credit";
$result = mysqli_query($connect, $sql);

?>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['Credit_Member_Number']; ?></td>
            <td>
                <form method="post" >
                    <input type="hidden" name="delete_id" value="<?php echo $row['Credit_Member_Number']; ?>">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    <?php } 
    ?>
</table>

<?php mysqli_close($connect); ?>
