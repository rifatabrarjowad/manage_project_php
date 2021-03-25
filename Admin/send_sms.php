<?php include "inc/header.php";?>

<aside>
    <section class="content" style="padding: 10px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div id="overlay" style="display: none;">

                </div>
                <div style="color: black; background: #a6d7ff; padding: 8px; border: 2px solid #055d9c; margin-bottom:5px;"
                    class="no_print">
                    <form id="branch_form" action="sms.php" method="post">
                        <div class="box-body">
                            <p style="font-size: 20px; margin: 0px; padding: 0px;
                               color: green; font-weight: bolder; text-align: center;">
                                Singel Send SMS
                                <!--<b id="msg" style="text-align: right;"></b>-->
                            </p>
                            <div class="row">
                                <div class="form-group col-sm-3 col-xs-12">
                                    <font color="red"><label for="branch_name">Name</label></font>
                                    <input type="text" name="nam" id="branch_name" class="form-control" required="">
                                </div>
                                <div class="form-group col-sm-3 col-xs-12">
                                    <font color="red"><label for="branch_name">Number</label></font>
                                    <input type="text" name="num_bar" id="branch_name" class="form-control" required="">
                                </div>
                                <div class="form-group col-sm-3 col-xs-12">
                                    <label for="address">SMS</label>
                                    <input type="text" name="address" id="address" class="form-control">
                                </div>
                                <div class="form-group col-sm-3 col-xs-12" style="margin-top: 25px;">
                                    <input type="submit" value="Sent " name="submit"
                                        class="pull-left btn btn-success" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div style="color: black; background: #a6d7ff; padding: 8px; border: 2px solid #055d9c; margin-bottom:5px;"
                    class="no_print">
                    <form id="branch_form" action="sms_malti.php" method="post">
                        <div class="box-body">
                            <p style="font-size: 20px; margin: 0px; padding: 0px;
                               color: green; font-weight: bolder; text-align: center;">
                                Multipel Send SMS
                                <!--<b id="msg" style="text-align: right;"></b>-->
                            </p>
                            <div class="row">

                                <div class="form-group col-sm-3 col-xs-12">
                                    <label for="address">SMS</label>
                                    <input type="text" name="address" id="address" class="form-control">
                                </div>
                                <div class="form-group col-sm-3 col-xs-12" style="margin-top: 25px;">
                                    <input type="submit" value="Sent " name="submit"
                                        class="pull-left btn btn-success" />
                                </div>
                            </div>
                        </div>
                        <div>
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

                                <div class="box-header">

                                    <div style="text-align: right; padding-right: 27px;" class="no_print">
                                        <button id="print" onclick="window.print()"
                                            class="btn btn-warning waves-effect waves-light">
                                            <i class="fa fa-print"></i>
                                        </button>
                                    </div>
                                    <p style="font-size: 20px; margin: 0px; padding: 0px;
       color: purple; font-weight: bolder; text-align: center;">
                                        SMS History
                                    </p>
                                </div>
                                <div id="datatable_wrapper"
                                    class="dataTables_wrapper form-inline dt-bootstrap no-footer">
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
                                                            aria-label="Date: activate to sort column ascending">List
                                                        </th>
                                                        <th style="text-align: center;" class="sorting" tabindex="0"
                                                            aria-controls="datatable" rowspan="1" colspan="1"
                                                            aria-label="SMS Title: activate to sort column ascending">
                                                            Name
                                                        </th>
                                                        <th style="text-align: center;" class="sorting" tabindex="0"
                                                            aria-controls="datatable" rowspan="1" colspan="1"
                                                            aria-label="SMS Content: activate to sort column ascending">
                                                            Area </th>
                                                        <th style="text-align: center;" class="sorting" tabindex="0"
                                                            aria-controls="datatable" rowspan="1" colspan="1"
                                                            aria-label="Sent to Person: activate to sort column ascending">
                                                            Numbar</th>
                                                        <th style="text-align: center;" class="sorting" tabindex="0"
                                                            aria-controls="datatable" rowspan="1" colspan="1"
                                                            aria-label="Sent Total SMS: activate to sort column ascending">
                                                            checkbox</th>
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
                                                        <td style="text-align: center;">
                                                            <?php echo $num; ?></td>
                                                        <td style="text-align: center;">
                                                            <?php echo "{$row['nam']}" ?></td>
                                                        <td style="text-align: justify;">
                                                            <?php echo "{$row['areanam']}" ?></td>
                                                        <td style="text-align: justify;">
                                                            <?php echo "{$row['mobile']}" ?></td>

                                                        <td style="text-align: center;"> <input type="checkbox"
                                                                name="checkbox[]" value="<?php echo "{$row['id']}" ?>"
                                                                id=""> </td>
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
                                            <div class="dataTables_info" id="datatable_info" role="status"
                                                aria-live="polite">
                                                Showing 1 to 10 of 24 entries</div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="datatable_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button previous disabled"
                                                        id="datatable_previous"><a href="#" aria-controls="datatable"
                                                            data-dt-idx="0" tabindex="0">Previous</a></li>
                                                    <li class="paginate_button active"><a href="#"
                                                            aria-controls="datatable" data-dt-idx="1" tabindex="0">1</a>
                                                    </li>
                                                    <li class="paginate_button "><a href="#" aria-controls="datatable"
                                                            data-dt-idx="2" tabindex="0">2</a></li>
                                                    <li class="paginate_button "><a href="#" aria-controls="datatable"
                                                            data-dt-idx="3" tabindex="0">3</a></li>
                                                    <li class="paginate_button next" id="datatable_next"><a href="#"
                                                            aria-controls="datatable" data-dt-idx="4"
                                                            tabindex="0">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </section>
        </div>
    </section>
</aside>

<?php include "inc/footer.php";?>