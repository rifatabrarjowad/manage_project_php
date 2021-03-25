<?php
if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $invoice_no = $_POST['invoice_no'];
    $ser_typ = $_POST['ser_typ'];
    $hand = $_POST['hand'];
    $amount = $_POST['amount'];
    $remarks = $_POST['remarks'];
    $paid_by = $_POST['paid_by'];
    $id = $_REQUEST['hid_id'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "UPDATE income SET date='$date', vou='$invoice_no', line='$ser_typ', hand='$hand', money='$amount', remark='$remarks', recivby='$paid_by' WHERE id=$id ";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            echo "faild";
        } else {
            header('Location: income.php');
        }
    }
} else {
    header('Location: income.php');
}