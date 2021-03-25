<?php include "inc/header.php";?>
<aside>
    <section class="content" style="padding: 10px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div style="color: black; background: #a6d7ff; padding: 8px; border: 2px solid #055d9c; margin-bottom:5px;"
                    class="no_print">



                    <form id="client_form" method="POST" action="client_in.php">
                        <div class="box-body" style="height: 71%;">
                            <p style="font-size: 20px; margin: 0px; padding: 0px;
                               color: green; font-weight: bolder; text-align: center;" id="insert_title">
                                Dish Client Info
                            </p>
                            <p style="font-size: 20px; margin: 0px; padding: 0px;
                               color: blue; font-weight: bolder; text-align: center; display: none;" id="edit_title">
                                Edit Dish Client Info
                            </p>
                            <div class="row">
                                <div class="form-group col-sm-3 col-xs-12">
                                    <font color="red"><label for="branch_name">Company Name</label></font>
                                    <div>
                                        <select class="form-control" name="comnam" id="">
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
                                                <?php echo "{$row['areanam']}" ?></option>
                                            <?php }}

}
?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="service_type">Service Type</label></font>
                                    <div>
                                        <select class="form-control" name="sernam" id="">
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
                                                <?php echo "{$row['areanam']}" ?></option>
                                            <?php }}

}
?>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="form-group col-sm-2 col-xs-12">
                                    <label for="image">Photo</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div> -->
                                <div class="form-group col-sm-3 col-xs-12">
                                    <font color="red"><label for="name">Name</label></font>
                                    <input type="text" name="name" id="name" class="form-control" required="">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="code_no">Code No.</label></font>
                                    <input type="text" name="code_no" id="code_no" class="form-control" required="">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="mobile">Mobile</label></font>
                                    <input type="text" name="mobile" id="mobile" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="nid">NID</label>
                                    <input type="text" name="nid" id="nid" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address" class="form-control">
                                </div>
                                <div class="form-group col-sm-3 col-xs-12">
                                    <label for="email">House No</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                                <div class="form-group col-sm-3 col-xs-12">
                                    <font color="red"><label for="area">Area</label></font>
                                    <div>
                                        <select class="form-control" name="area" id="">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                    <div class="dropdown-menu open" role="combobox">
                                        <div class="bs-searchbox"><input type="text" class="form-control"
                                                autocomplete="off" role="textbox" aria-label="Search"></div>
                                        <div class="inner open" role="listbox" aria-expanded="false" tabindex="-1">
                                            <ul class="dropdown-menu inner "></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <front color="red"><label for="package">Package</label></front>
                                <div>
                                    <select class="form-control" name="pack" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <font color="red"><label for="package_price">Monthly Bill</label></font>
                                <input type="text" name="pack_price" id="package_price" class="form-control"
                                    required="">
                            </div>

                            <!-- <div class="form-group col-sm-2 col-xs-12">
                                <label for="date">Connection Date</label>
                                <input type="text" class="form-control new_datepicker hasDatepicker"
                                    placeholder="Insert Date" name="date" id="date" autocomplete="off">
                            </div>-->
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="connection_charge">Connection Charge</label>
                                <input type="text" name="connection_charge" id="connection_charge" class="form-control">
                            </div>
                            <div class="form-group col-sm-2 col-xs-12">
                                <label for="box_id">Box ID</label>
                                <input type="text" name="box_id" id="box_id" class="form-control">
                            </div>
                            <div class="form-group col-sm-1 col-xs-12" style="margin-top: 25px;" id="insert_btn">
                                <input name="submit" type="submit" class="pull-left btn btn-success">
                            </div>

                        </div>
                </div>
                </form>
        </div>

        <div>
            <div class="box-header">
                <div style="text-align: right; padding-right: 27px;" class="no_print">
                    <button id="print" onclick="window.print()" class="btn btn-warning waves-effect waves-light">
                        <i class="fa fa-print"></i>
                    </button>
                </div>
                <p style="font-size: 20px; margin: 0px; padding: 0px;
                           color: purple; font-weight: bolder; text-align: center;">
                    Dish Client Info
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
                                        name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-6">
                            <div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                        class="form-control input-sm" placeholder="" aria-controls="datatable"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="datatable" class="datatable table table-bordered table-hover dataTable no-footer"
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
                                            aria-label="Image: activate to sort column ascending">Image</th>
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
                                            aria-label="Bill: activate to sort column ascending">Bill</th>
                                        <th style="text-align: center;" class="sorting" tabindex="0"
                                            aria-controls="datatable" rowspan="1" colspan="1"
                                            aria-label="C.Date: activate to sort column ascending">C.Date</th>
                                        <th style="text-align: center;" class="sorting" tabindex="0"
                                            aria-controls="datatable" rowspan="1" colspan="1"
                                            aria-label="C.Charge: activate to sort column ascending">C.Charge
                                        </th>
                                        <th style="text-align: center;" class="sorting" tabindex="0"
                                            aria-controls="datatable" rowspan="1" colspan="1"
                                            aria-label="Box ID: activate to sort column ascending">Box ID</th>
                                        <th style="text-align: center;" class="sorting" tabindex="0"
                                            aria-controls="datatable" rowspan="1" colspan="1"
                                            aria-label="Status: activate to sort column ascending">Status</th>
                                        <th style="text-align: center;" class="no_print sorting" tabindex="0"
                                            aria-controls="datatable" rowspan="1" colspan="1"
                                            aria-label="Action: activate to sort column ascending">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td valign="top" colspan="16" class="dataTables_empty">No data available
                                            in table</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">
                                Showing 0 to 0 of 0 entries</div>
                        </div>
                        <div class="col-sm-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button previous disabled" id="datatable_previous"><a href="#"
                                            aria-controls="datatable" data-dt-idx="0" tabindex="0">Previous</a></li>
                                    <li class="paginate_button next disabled" id="datatable_next"><a href="#"
                                            aria-controls="datatable" data-dt-idx="1" tabindex="0">Next</a></li>
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