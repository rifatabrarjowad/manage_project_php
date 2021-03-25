<?php
if (isset($_POST['submit'])) {
    $expense_head = $_POST['expense_head'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "INSERT  INTO expense_head (hand)  VALUES  ('$expense_head') ";
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