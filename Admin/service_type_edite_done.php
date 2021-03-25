<?php
if (isset($_POST['submit'])) {
    $add = $_POST['address'];
    $id = $_REQUEST['hid_id'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "UPDATE service_type SET ser='$add' WHERE id=$id ";
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