<?php
if (isset($_POST['submit'])) {
    $expense_head = $_POST['expense_head'];

    $id = $_REQUEST['hid_id'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "UPDATE expense_head SET hand='$expense_head' WHERE id=$id ";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            echo "faild";
        } else {
            header('Location: expense_head.php');
        }
    }
} else {
    header('Location: expense_head.php');
}