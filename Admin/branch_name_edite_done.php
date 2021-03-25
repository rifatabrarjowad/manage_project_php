<?php
if (isset($_POST['submit'])) {
    $nam = $_POST['branch_name'];
    $add = $_POST['address'];
    $id = $_REQUEST['hid_id'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "UPDATE company_name SET name='$nam', address='$add' WHERE id=$id ";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            echo "faild";
        } else {
            header('Location: branch_name.php');
        }
    }
} else {
    header('Location: branch_name.php');
}