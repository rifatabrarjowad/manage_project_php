<?php
if (isset($_POST['submit'])) {
    $nam = $_POST['branch_name'];
    $add = $_POST['address'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "INSERT  INTO company_name (name,address)  VALUES  ('$nam', '$add') ";
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