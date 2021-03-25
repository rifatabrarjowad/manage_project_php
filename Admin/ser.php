<?php
if (isset($_POST['submit'])) {
    $add = $_POST['address'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "INSERT  INTO service_type (ser)  VALUES  ('$add') ";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            echo "faild";
        } else {
            header('Location: service_type.php');
        }
    }
} else {
    header('Location: service_type.php');
}