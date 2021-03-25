<?php
if (isset($_POST['submit'])) {
    $areanam = $_POST['areanam'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $user_name = $_POST['user_name'];
    $passwords = $_POST['password'];
    $rolea = $_POST['role'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "INSERT  INTO log_in (areanam, fullnam, email, mobile, usernam, password, role)  VALUES('$areanam',  '$full_name','$email','$mobile','$user_name','$passwords','$rolea') ";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            echo "faild";
        } else {
            header('Location: role_setting.php');
        }
    }
} else {
    header('Location: role_setting.php');

}