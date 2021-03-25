<?php
if (isset($_POST['submit'])) {
    $areanam = $_POST['areanam'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $user_name = $_POST['user_name'];
    $passwords = $_POST['password'];
    $rolea = $_POST['role'];
    $id = $_REQUEST['hid_id'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "UPDATE log_in SET areanam='$areanam', fullnam='$full_name', email='$email', mobile='$mobile', usernam='$user_name', password='$passwords', role='$rolea' WHERE id=$id ";
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