<?php
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "INSERT  INTO create_sms (sms_head,sms_details)  VALUES  ('$title', '$body') ";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            echo "faild";
        } else {
            header('Location: create_sms.php');
        }
    }
} else {
    header('Location: create_sms.php');
}