<?php
if (isset($_POST['submit'])) {
    $comnam = $_POST['comnam'];
    $sernam = $_POST['sernam'];
    $name = $_POST['name'];

    $code = $_POST['code_no'];
    $mobile = $_POST['mobile'];
    $nid = $_POST['nid'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $area = $_POST['area'];
    $pack = $_POST['pack'];
    $pack_price = $_POST['pack_price'];
    $connection_charge = $_POST['connection_charge'];

    $box_id = $_POST['box_id'];
    // $file = $_FILES['image'];
    // $file_name = $file['name'];
    // $file_tmp = $file['tmp_name'];
    // if ($file_name) {
    //     $loc = "profile_pic/";

    //     move_uploaded_file($file_tmp, $loc . $file_name);
    // } else {
    //     echo "file is empty";
    // }

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {

        $query = "INSERT INTO client_info(com_nam, ser_typ, name, code_no, mo_num, nid, add, hou_no, area, pack, mont_bill,  con_cha, box_id) VALUES ('$comnam', '$sernam',  '$name', '$code', '$mobile', '$nid','$address', '$email', '$area', '$pack', '$pack_price', '$connection_charge', '$box_id')";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            echo "faild";
        } else {
            header('Location: branch_name.php');
        }
    }

} else {
    header('Location: client_info.php');
}