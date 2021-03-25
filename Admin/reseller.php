<?php
if (isset($_POST['submit'])) {
    $com_nam = $_POST['com_nam'];
    $ser_typ = $_POST['ser_typ'];
    $name = $_POST['name'];
    $code_no = $_POST['code_no'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $area_info = $_POST['area_info'];
    $package_info = $_POST['package_info'];
    $package_price = $_POST['package_price'];
    $date = $_POST['date'];
    $connection_charge = $_POST['connection_charge'];
    $issue_pin = $_POST['issue_pin'];

    $card_no = $_POST['card_no'];
    $validity_date = $_POST['validity_date'];
    $user_ip = $_POST['user_ip'];
    $password = $_POST['password'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "INSERT  INTO reseller_info (comnam,servnam,nam,code,mobile,address,house,areanam,packnam, mbill,condate,concha,ipqty,card,validdata,userip,passs)  VALUES  ('$com_nam','$ser_typ','$name','$code_no','$mobile','$address','$email','$area_info','$package_info','$package_price','$date','$connection_charge','$issue_pin','$card_no','$validity_date','$user_ip','$password') ";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            echo "faild";
        } else {
            header('Location: reseller_info.php');
        }
    }
} else {
    header('Location: reseller_info.php');
}