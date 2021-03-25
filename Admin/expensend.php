<?php
if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $invoice_no = $_POST['invoice_no'];
    $com_nam = $_POST['com_nam'];
    $hand = $_POST['hand'];
    $amount = $_POST['amount'];
    $remarks = $_POST['remarks'];
    $paid_by = $_POST['paid_by'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "INSERT  INTO expense(date, vou, line, hand, money, remark, paidby)  VALUES  ('$date','$invoice_no','$com_nam','$hand','$amount','$remarks','$paid_by') ";
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