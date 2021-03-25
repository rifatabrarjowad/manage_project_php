<?php
if (isset($_POST['submit'])) {
    $com_nam = $_POST['com_nam'];
    $ser_typ = $_POST['ser_typ'];
    $area_name = $_POST['area_name'];
    $id = $_REQUEST['hid_id'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "UPDATE area_info SET comnam='$com_nam', servnam='$ser_typ', areanam='$area_name' WHERE id=$id ";
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