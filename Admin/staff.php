<?php
if (isset($_POST['submit'])) {
    $com_nam = $_POST['com_nam'];
    $ser_typ = $_POST['ser_typ'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $joining_date = $_POST['joining_date'];
    $salary = $_POST['salary'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "INSERT  INTO staff_info (comnam, servnam, nam, mail, mobile, address, joindate, salary)  VALUES  ('$com_nam','$ser_typ','$name','$email','$mobile','$address','$joining_date','$salary') ";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            echo "faild";
        } else {
            header('Location: staff_info.php');
        }
    }
} else {
    header('Location: staff_info.php');
}