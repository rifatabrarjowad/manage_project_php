<?php
if (!isset($_POST['submit'])) {
    $com_nam = $_POST['com_nam'];
    $ser_typ = $_POST['ser_typ'];
    $pack_nam = $_POST['pack_nam'];
    $band_nam = $_POST['band_nam'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "INSERT  INTO package_info (comnam,servnam,packnam,band)  VALUES  ('$com_nam', '$ser_typ','$pack_nam','$band_nam') ";
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