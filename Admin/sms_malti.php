<?php

if (isset($_POST['submit'])) {
    $num = $_POST['checkbox'];
    $sms = $_POST['address'];
    $coma = implode(',', $num);
    include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "SELECT * FROM reseller_info WHERE id in ($coma)  ";
        $result = mysqli_query($connection, $query);
        if ($result == true) {
            $number = "";
            while ($row = mysqli_fetch_assoc($result)) {
                $nums = $row['mobile'];
                $number = "$nums,$number";
            }

            $sms = $_POST['address'];

            $url = "http://66.45.237.70/api.php";
            // $number = $num;
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
        }

        header('Location: send_sms.php');}

} else {
    header('Location: send_sms.php');
}