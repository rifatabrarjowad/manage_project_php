<?php

if (isset($_POST['submit'])) {
    $nam = $_POST['nam'];
    $num = $_POST['num_bar'];
    $sms = $_POST['address'];

    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "INSERT  INTO sms_send (name,number,sms)  VALUES  ('$nam','$num', '$sms') ";
        $result = mysqli_query($connection, $query);

        $num = $_POST['num_bar'];
        $sms = $_POST['address'];

        $url = "http://66.45.237.70/api.php";
        $number = $num;
        $text = $sms;
        $data = array(
            'username' => "alifmorsalin",
            'password' => "alif4200",
            'number' => "$number",
            'message' => "$text",
        );

        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $smsresult = curl_exec($ch);
        $p = explode("|", $smsresult);
        $sendstatus = $p[0];

        header('Location: send_sms.php');}

} else {
    header('Location: send_sms.php');
}