<?php
if (isset($_POST['submit'])) {
    $user_name = $_POST['username'];
    $passwords = $_POST['password'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "SELECT * FROM log_in WHERE usernam ='$user_name' && password = '$passwords'";
        $result = mysqli_query($connection, $query);
        $last = mysqli_num_rows($result);
        session_start();
        if (!$last) {
            header('Location: Log_in_out.php');
        } else {
            $_SESSION['user_name'] = $user_name;
            header('Location: index.php');
        }
    }
} else {
    echo "index.php";

}