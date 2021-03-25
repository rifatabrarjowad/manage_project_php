<?php
if (isset($_POST['submit'])) {
    $com_nam = $_POST['com_nam'];
    $ser_typ = $_POST['ser_typ'];
    $pack_nam = $_POST['pack_nam'];
    $band_nam = $_POST['band_nam'];
    $id = $_REQUEST['hid_id'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        //$query = "UPDATE package_info SET comnam='$com_nam', servnam=$ser_typ', packnam='$pack_nam', band='$band_nam' WHERE id=$id ";
        $query = "UPDATE package_info SET comnam='$com_nam', servnam='$ser_typ', packnam='$pack_nam', band='$band_nam' WHERE id=$id ";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            echo "faild";
        } else {
            header('Location: package_info.php');
        }
    }
} else {
    header('Location: package_info.php');

}