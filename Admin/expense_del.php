<?php
include "conec.php";
if (!$connection) {
    die("Connect Fail" . mysqli_error($connection));
} else {
    $rec = $_REQUEST['id'];
    $query = "DELETE FROM `expense` WHERE id =$rec ";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        echo "faild";
    } else {
        header('Location: expense.php');
    }
}