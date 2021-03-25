<?php
if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $invoice_no = $_POST['invoice_no'];
    $ser_typ = $_POST['ser_typ'];
    $hand = $_POST['hand'];
    $amount = $_POST['amount'];
    $remarks = $_POST['remarks'];
    $paid_by = $_POST['paid_by'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "INSERT  INTO income(date, vou, line, hand, money, remark, recivby)  VALUES  ('$date','$invoice_no','$ser_typ','$hand','$amount','$remarks','$paid_by') ";
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