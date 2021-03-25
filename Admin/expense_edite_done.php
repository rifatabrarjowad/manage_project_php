<?php
if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $invoice_no = $_POST['invoice_no'];
    $com_nam = $_POST['com_nam'];
    $hand = $_POST['hand'];
    $amount = $_POST['amount'];
    $remarks = $_POST['remarks'];
    $paid_by = $_POST['paid_by'];
    $id = $_REQUEST['hid_id'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "UPDATE income SET date='$date', vou='$invoice_no', line='$com_nam', hand='$hand', money='$amount', remark='$remarks', paidby='$paid_by' WHERE id=$id ";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            echo "faild";
        } else {
            header('Location: expense.php');
        }
    }
} else {
    header('Location: expense.php');
}