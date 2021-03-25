<?php
session_start();
if (isset($_SESSION['user_name'])) {

    ?>
<?php include "inc/header.php";?>
<!--<div class="col-xs-4" style="margin-top: 20px;">
    <div class="small-box bg-green" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 20px;">
                <a style="color: wheat;" href="https://satatacable.greensoftit.com/Dashboard/total_staff">
                    <p style="color: wheat; font-size: 20px;">0</p>
                    <p style="color: white; font-size: 20px;">Staff Qty</p>
                </a>
        </div>
    </div>
</div>-->
<div class="col-xs-4" style="margin-top: 30px;">
    <div class="small-box bg-purple" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 10px;">
            <a style="color: wheat;" href="total_active_client.php">
                <p style="color: wheat; font-size: 20px;">0</p>
                <p style="color: white; font-size: 20px;">Active Dish Client</p>
            </a>
        </div>
    </div>
</div>
<div class="col-xs-4" style="margin-top: 30px;">
    <div class="small-box bg-orange" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 10px;">
            <a style="color: wheat;" href="total_active_reseller.php">
                <p style="color: wheat; font-size: 20px;">22</p>
                <p style="color: white; font-size: 20px;">Active ISP Client</p>
            </a>
        </div>
    </div>
</div>

<div class="col-xs-4" style="margin-top: 30px;">
    <div class="small-box bg-purple" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 10px;">
            <a style="color: wheat;" href="sms_log.php">
                <p style="color: wheat; font-size: 20px;">904</p>
                <p style="color: white; font-size: 20px;">Sent SMS Qty</p>
            </a>
        </div>
    </div>
</div>
<div class="col-xs-4" style="margin-top: 20px;">
    <div class="small-box bg-green" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 10px;">
            <a style="color: wheat;" href="total_bill.php">
                <p style="color: wheat; font-size: 20px;">14400</p>
                <p style="color: white; font-size: 20px;">Total Bill</p>
            </a>
        </div>
    </div>
</div>
<div class="col-xs-4" style="margin-top: 20px;">
    <div class="small-box bg-red" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 10px;">
            <a style="color: wheat;" href="total_collection.php">
                <p style="color: wheat; font-size: 20px;">14900</p>
                <p style="color: white; font-size: 17px;">Total Collection</p>
            </a>
        </div>
    </div>
</div>
<!--<div class="col-xs-4" style="margin-top: 20px;">
    <div class="small-box bg-green" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 20px;">
            <a style="color: wheat;" href="https://satatacable.greensoftit.com/Dashboard/total_discount">
                <p style="color: wheat; font-size: 20px;">100</p>
                <p style="color: white; font-size: 20px;">Total Discount</p>
            </a>
        </div>
    </div>
</div>-->

<div class="col-xs-4" style="margin-top: 20px;">
    <div class="small-box bg-green" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 10px;">
            <a style="color: wheat;" href="total_due.php">
                <p style="color: wheat; font-size: 20px;">-600</p>
                <p style="color: white; font-size: 20px;">Total Due</p>
            </a>
        </div>
    </div>
</div>
<div class="col-xs-4" style="margin-top: 20px;">
    <div class="small-box bg-purple" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 10px;">
            <a style="color: wheat;" href="total_inactive_client.php">
                <p style="color: wheat; font-size: 20px;">0</p>
                <p style="color: white; font-size: 20px;">Inactive Dish Client</p>
            </a>
        </div>
    </div>
</div>
<div class="col-xs-4" style="margin-top: 20px;">
    <div class="small-box bg-orange" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 10px;">
            <a style="color: wheat;" href="total_inactive_reseller.php">
                <p style="color: wheat; font-size: 20px;">1</p>
                <p style="color: white; font-size: 20px;">Inactive ISP Client</p>
            </a>
        </div>
    </div>
</div>
<div class="col-xs-4" style="margin-top: 20px;">
    <div class="small-box bg-purple" style="border-radius: 10px;">
        <div class="inner" style="text-align: center; height: 140px; padding-top: 10px;">
            <a style="color: wheat;" href="total_validity_over.php">
                <p style="color: wheat; font-size: 20px;">23</p>
                <p style="color: white; font-size: 20px;">Total Validity Over</p>
            </a>
        </div>
    </div>
</div>

<div class="footer" style="font-size: 16px; font-weight: bolder; padding-top: 200px;">
    <p style="text-align: center; color: green;">Copyright © 2020. Designed &amp; Developed by
        <a href="http://www.greensoftechbd.com/" target="_blank" style="color: brown;">GREEN SOFTWARE &amp;
            TECHNOLOGY</a>. All rights reserved
    </p>
</div>
<!--<style>
.footer {
   left: 0;
   bottom: 0;
   width: 100%;
   height: 50px;
   background-color: #5a9610;
   color: white;
   text-align: center;
/*   border-radius: 10px 10px 0px 0px;*/
}
</style>
<div class="footer">
    <p style="padding-top: 10px; font-size: 17px;">
        Copyright &copy; 2018. Designed & Developed by <a href="http://greensoftechbd.com/" target="_blank" style="color: yellow;">GREEN SOFTWARE &
            TECHNOLOGY</a>. All rights reserved
    </p>
</div>-->
<!--Datepicker-->
<?php include "inc/footer.php";?>
<?php
} else {
    header('Location: Log_in_out.php');
}
?>