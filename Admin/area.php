<?php
if (isset($_POST['submit'])) {
    $com_nam = $_POST['com_nam'];
    $ser_typ = $_POST['ser_typ'];
    $area_name = $_POST['area_name'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "INSERT  INTO area_info (comnam,servnam,areanam)  VALUES  ('$com_nam', '$ser_typ', '$area_name') ";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            echo "faild";
        } else {
            header('Location: area_info.php');
        }
    }
} else {
    header('Location: area_info.php');
}