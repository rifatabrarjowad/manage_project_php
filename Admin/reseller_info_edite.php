<?php
session_start();
if (isset($_SESSION['user_name'])) {

    ?>
<?php include "inc/header.php";?>
<aside>
    <section class="content" style="padding: 10px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div style="color: black; background: #a6d7ff; padding: 8px; border: 2px solid #055d9c; margin-bottom:5px;"
                    class="no_print">
                    <form id="reseller_form" action="reseller.php" method="post">
                        <div class="box-body">
                            <p style="font-size: 20px; margin: 0px; padding: 0px;
                               color: green; font-weight: bolder; text-align: center;" id="insert_title">
                                ISP Client Info
                            </p>
                            <p style="font-size: 20px; margin: 0px; padding: 0px;
                               color: blue; font-weight: bolder; text-align: center; display: none;" id="edit_title">
                                Edit ISP Client Info
                            </p>
                            <div class="row">
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="branch_name">Company Name</label></font>
                                    <div>
                                        <select class="form-control" name="com_nam" id="">
                                            <?php
include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "SELECT * FROM company_name";
        $show = mysqli_query($connection, $query);
        $con = mysqli_num_rows($show);
        if ($con > 0) {
            $num = 0;
            while ($row = mysqli_fetch_assoc($show)) {
                $num++;
                ?>
                                            <option value="<?php echo "{$row['name']}" ?>">
                                                <?php echo "{$row['name']}" ?></option>
                                            <?php }}

    }
    ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="service_type">Service Type</label></font>
                                    <div>
                                        <select class="form-control" name="ser_typ" id="">

                                            <?php
include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "SELECT * FROM service_type";
        $show = mysqli_query($connection, $query);
        $con = mysqli_num_rows($show);
        if ($con > 0) {
            $num = 0;
            while ($row = mysqli_fetch_assoc($show)) {
                $num++;
                ?>
                                            <option value="<?php echo "{$row['ser']}" ?>"><?php echo "{$row['ser']}" ?>
                                            </option>
                                            <?php }}

    }
    ?>

                                        </select>
                                    </div>
                                </div>
                                <?php
include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        if (isset($_REQUEST['id'])) {
            $rec_id = $_REQUEST['id'];

            $query = "SELECT * FROM reseller_info WHERE id = $rec_id";
            $show = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($show)) {
                ?>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="name">Name</label></font>
                                    <input type="text" value="<?php echo "{$row['nam']}" ?>" name=" name" id="name"
                                        class="form-control" required="">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="code_no">Code No.</label></font>
                                    <input type="text" value="<?php echo "{$row['code']}" ?>" name=" code_no"
                                        id="code_no" class="form-control" required="">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="mobile">Mobile</label></font>
                                    <input type="text" value="<?php echo "{$row['mobile']}" ?>" name=" mobile"
                                        id="mobile" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="address">Address</label>
                                    <input type="text" value="<?php echo "{$row['address']}" ?>" name=" address"
                                        id="address" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="email">House No</label>
                                    <input type="text" value="<?php echo "{$row['house']}" ?>" name=" email" id="email"
                                        class="form-control">
                                </div>
                                <?php
}
        } else {
            header('Location: branch_name.php');
        }
    }
    ?>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="area">Area</label></font>
                                    <div>
                                        <select class="form-control" name="area_info" id="">

                                            <?php
include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "SELECT * FROM area_info";
        $show = mysqli_query($connection, $query);
        $con = mysqli_num_rows($show);
        if ($con > 0) {
            $num = 0;
            while ($row = mysqli_fetch_assoc($show)) {
                $num++;
                ?>
                                            <option value="<?php echo "{$row['areanam']}" ?>">
                                                <?php echo "{$row['areanam']}" ?>
                                            </option>
                                            <?php }}

    }
    ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="package">Package</label></font>
                                    <div>
                                        <select class="form-control" name="package_info" id="">

                                            <?php
include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "SELECT * FROM package_info";
        $show = mysqli_query($connection, $query);
        $con = mysqli_num_rows($show);
        if ($con > 0) {
            $num = 0;
            while ($row = mysqli_fetch_assoc($show)) {
                $num++;
                ?>
                                            <option value="<?php echo "{$row['packnam']}" ?>">
                                                <?php echo "{$row['packnam']}" ?>
                                            </option>
                                            <?php }}

    }
    ?>

                                        </select>
                                    </div>
                                </div>
                                <?php
include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        if (isset($_REQUEST['id'])) {
            $rec_id = $_REQUEST['id'];

            $query = "SELECT * FROM reseller_info WHERE id = $rec_id";
            $show = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($show)) {
                ?>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="package_price">Monthly Bill</label></font>
                                    <input type="text" value="<?php echo "{$row['mbill']}" ?>" name="package_price"
                                        id="package_price" class="form-control" required="">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="date">Connection Date</label>
                                    <input type="text" value="<?php echo "{$row['condate']}" ?>"
                                        class="form-control new_datepicker hasDatepicker" placeholder="Insert Date"
                                        name="date" id="date" autocomplete="off">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="connection_charge">Connection Charge</label>
                                    <input type="text" value="<?php echo "{$row['concha']}" ?>" name="connection_charge"
                                        id="connection_charge" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="issue_pin">IP Qty</label></font>
                                    <input type="text" value="<?php echo "{$row['ipqty']}" ?>" name="issue_pin"
                                        id="issue_pin" class="form-control" required="">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12" style="display: none;">
                                    <label for="use_pin">Use Pin</label>
                                    <input type="text" value="<?php echo "{$row['card']}" ?>" name="use_pin"
                                        id="address" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="card_no">Card No.</label>
                                    <input type="text" value="<?php echo "{$row['card']}" ?>" name="card_no"
                                        id="card_no" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="validity_date">Validity Date</label>
                                    <input type="text" value="<?php echo "{$row['validdata']}" ?>"
                                        class="form-control new_datepicker hasDatepicker" placeholder="Insert Date"
                                        name="validity_date" id="validity_date" autocomplete="off">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="validity_date">User IP</label>
                                    <input type="text" value="<?php echo "{$row['userip']}" ?>" class="form-control"
                                        placeholder="Insert User IP" name="user_ip" id="user_ip" autocomplete="off">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="validity_date">Password</label>
                                    <input type="text" value="<?php echo "{$row['passs']}" ?>" class="form-control"
                                        placeholder="Insert Password" name="password" id="password" autocomplete="off">
                                </div>
                                <?php
}
        } else {
            header('Location: branch_name.php');
        }
    }
    ?>

                                <div class="form-group col-sm-3 col-xs-12" style="margin-top: 25px;">
                                    <input type="submit" value="Insert " name="submit"
                                        class="pull-left btn btn-success" />
                                </div>
                                <input type="hidden" value="<?php echo $rec_id; ?> " name="hid_id" />
                                <div class="form-group col-sm-1 col-xs-12" style="margin-top: 25px; display:none;"
                                    id="edit_btn">
                                    <button type="button" class="pull-left btn btn-info" id="click_edit">Edit <i
                                            class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div>
                    <div class="box-header">
                        <div style="text-align: right; padding-right: 27px;" class="no_print">
                            <button id="print" onclick="window.print()"
                                class="btn btn-warning waves-effect waves-light">
                                <i class="fa fa-print"></i>
                            </button>
                        </div>
                        <p style="font-size: 20px; margin: 0px; padding: 0px;
                           color: purple; font-weight: bolder; text-align: center;">
                            ISP Client Info
                        </p>
                    </div>

                    <div class="box-body table-responsive" id="view_table"
                        style="width: 98%; overflow-x: scroll; color: black;">
                        <style>
                        table.table-bordered {
                            border: grey 1px solid !important;
                            font-weight: bold !important;
                            color: black !important;
                            font-size: 13px !important;
                        }

                        table.table-bordered>thead>tr>th {
                            border: grey 1px solid !important;
                            font-weight: bold !important;
                            color: white !important;
                            font-size: 13px !important;
                            background: #0aad87 !important;
                        }

                        table.table-bordered>tbody>tr>td {
                            border: grey 1px solid !important;
                            font-weight: bold !important;
                            color: black !important;
                            font-size: 13px !important;
                        }
                        </style>

                        <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dataTables_length" id="datatable_length"><label>Show <select
                                                name="datatable_length" aria-controls="datatable"
                                                class="form-control input-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-6">
                                    <div id="datatable_filter" class="dataTables_filter"><label>Search:<input
                                                type="search" class="form-control input-sm" placeholder=""
                                                aria-controls="datatable"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="datatable"
                                        class="datatable table table-bordered table-hover dataTable no-footer"
                                        role="grid" aria-describedby="datatable_info">
                                        <thead>
                                            <tr role="row">
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="SL: activate to sort column ascending">SL</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Company: activate to sort column ascending">Company</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Service: activate to sort column ascending">Service</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Name(Code): activate to sort column ascending">
                                                    Name(Code)</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Mobile: activate to sort column ascending">Mobile</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Address: activate to sort column ascending">Address</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="House: activate to sort column ascending">House</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Area: activate to sort column ascending">Area</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Package: activate to sort column ascending">Package</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="C.Date: activate to sort column ascending">C.Date</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="C.Charge: activate to sort column ascending">C.Charge
                                                </th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="IP_Qty: activate to sort column ascending">IP_Qty</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Card_No.: activate to sort column ascending">Card_No.
                                                </th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="V.Date: activate to sort column ascending">V.Date</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="User IP: activate to sort column ascending">User IP</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Password: activate to sort column ascending">Password
                                                </th>
                                                <th style="text-align: center;" class="no_print sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Action: activate to sort column ascending">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "SELECT * FROM reseller_info";
        $show = mysqli_query($connection, $query);
        $con = mysqli_num_rows($show);
        if ($con > 0) {
            $num = 0;
            while ($row = mysqli_fetch_assoc($show)) {
                $num++;
                ?>


                                            <tr role="row" class="odd">
                                                <td style="text-align: center;"><?php echo $num; ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['comnam']}" ?> </td>
                                                <td style="text-align: center;"><?php echo "{$row['servnam']}" ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['nam']}" ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['mobile']}" ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['address']}" ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['house']}" ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['areanam']}" ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['packnam']}" ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['condate']}" ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['concha']}" ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['ipqty']}" ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['card']}" ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['validdata']}" ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['userip']}" ?>
                                                <td style="text-align: center;"><?php echo "{$row['passs']}" ?>
                                                </td>
                                                <!--<td style="text-align: center;"></td>-->
                                                <td style="text-align: center;">
                                                    <a
                                                        href="reseller_info_edite.php?id= <?php echo "{$row['id']}" ?>">Edite</a>
                                                    || <a
                                                        href="reseller_info_del.php?id=<?php echo "{$row['id']}" ?>">Delete</a>
                                                </td>

                                            </tr>
                                            <?php }}

    }
    ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">
                                        Showing 1 to 10 of 23 entries</div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button previous disabled" id="datatable_previous"><a
                                                    href="#" aria-controls="datatable" data-dt-idx="0"
                                                    tabindex="0">Previous</a></li>
                                            <li class="paginate_button active"><a href="#" aria-controls="datatable"
                                                    data-dt-idx="1" tabindex="0">1</a></li>
                                            <li class="paginate_button "><a href="#" aria-controls="datatable"
                                                    data-dt-idx="2" tabindex="0">2</a></li>
                                            <li class="paginate_button "><a href="#" aria-controls="datatable"
                                                    data-dt-idx="3" tabindex="0">3</a></li>
                                            <li class="paginate_button next" id="datatable_next"><a href="#"
                                                    aria-controls="datatable" data-dt-idx="4" tabindex="0">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</aside>
<?php include "inc/footer.php";?>
<?php
} else {
    header('Location: Log_in_out.php');
}
?>