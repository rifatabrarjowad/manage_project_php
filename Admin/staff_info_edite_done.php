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
    $id = $_REQUEST['hid_id'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "UPDATE staff_info SET comnam='$com_nam', servnam='$ser_typ', nam='$name', mail='$email', mobile='$mobile', address='$address', joindate='$joining_date', address='$salary' WHERE id=$id ";
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