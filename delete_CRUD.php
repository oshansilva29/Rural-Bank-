<?php
include_once 'dbc.php';

if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    $delete_query = "DELETE FROM users WHERE id = '$delete_id'";
    $delete_result = mysqli_query($connect, $delete_query);
    if ($delete_result) {
        header("location: CRUD_Table.php?delete_success");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($connect);
    }
}

$sql = "SELECT * FROM users ";
$result = mysqli_query($connect, $sql);

?>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td>
                <form method="post" >
                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    <?php } ?>
</table>

<?php mysqli_close($connect); ?>
