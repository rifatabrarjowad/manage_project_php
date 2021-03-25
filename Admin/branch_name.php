<?php
session_start();
if (isset($_SESSION['user_name'])) {

    ?>
<?php include "inc/header.php";?>

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

<script>
$(document).ready(function() {
    datatable();

    function datatable() {
        $('#datatable').dataTable({
            //"info":false,
            "autoWidth": false,
            "order": false,
            "lengthMenu": [
                [25, 50, 100, -1],
                [25, 50, 100, "All"]
            ],
            "oSearch": {
                "bSmart": false
            }
        });
    }
});
</script>
<aside>
    <section class="content" style="padding: 10px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <style>
                @media print {
                    @page {
                        size: A4 landscape;
                        /* auto is the current printer page size */
                        margin: -5mm 0mm 0mm 10mm;
                    }

                    textarea {
                        height: auto;
                        overflow: visible !important;
                        page-break-inside: avoid !important;
                    }

                    html {
                        background-color: #FFFFFF;
                        margin: 0px;
                        /* this affects the margin on the html before sending to printer */
                    }

                    .no_print {
                        display: none;
                    }

                    .dataTables_filter {
                        display: none;
                    }

                    .dataTables_paginate {
                        display: none;
                    }

                    .dataTables_info {
                        display: none;
                    }

                    .dataTables_length {
                        display: none;
                    }

                    .dataTables_orderable {
                        display: none;
                    }

                    table.dataTable thead .sorting:after,
                    table.dataTable thead .sorting_asc:after,
                    table.dataTable thead .sorting_desc:after {
                        display: none;
                    }
                }
                </style>

                <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div style="color: black; background: #a6d7ff; padding: 8px; border: 2px solid #055d9c; margin-bottom:5px;"
                        class="no_print">


                        <form id="branch_form" action="branch.php" method="post">
                            <div class="box-body">
                                <p style="font-size: 20px; margin: 0px; padding: 0px;
                               color: green; font-weight: bolder; text-align: center;">
                                    Create Company Name
                                    <!--<b id="msg" style="text-align: right;"></b>-->
                                </p>
                                <div class="row">
                                    <div class="form-group col-sm-3 col-xs-12">
                                        <font color="red"><label for="branch_name">Company Name</label></font>
                                        <input type="text" name="branch_name" id="branch_name" class="form-control"
                                            required="">
                                    </div>
                                    <div class="form-group col-sm-6 col-xs-12">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" id="address" class="form-control">
                                    </div>
                                    <div class="form-group col-sm-3 col-xs-12" style="margin-top: 25px;">
                                        <input type="submit" value="submit " name="submit"
                                            class="pull-left btn btn-success" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="box-header">
                        <p style="font-size: 20px; margin: 0px; padding: 0px;
                           color: purple; font-weight: bolder; text-align: center;">
                            Company Info
                        </p>
                    </div>
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
                                            aria-label="Invoice: activate to sort column ascending">Company</th>
                                        <th style="text-align: center;" class="sorting" tabindex="0"
                                            aria-controls="datatable" rowspan="1" colspan="1"
                                            aria-label="Paid_Date: activate to sort column ascending">Service</th>
                                        <th style="text-align: center;" class="sorting" tabindex="0"
                                            aria-controls="datatable" rowspan="1" colspan="1"
                                            aria-label="Paid_Date: activate to sort column ascending">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
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

                                    <tr role="row" class="odd">
                                        <td style="text-align: center;"><?php echo $num; ?></td>
                                        <td style="text-align: center;">

                                            <?php echo "{$row['name']}" ?> </td>
                                        <td style="text-align: center;"> <?php echo "{$row['address']}" ?></td>
                                        <td style="text-align: center;"> <a
                                                href="branch_name_edite.php?id= <?php echo "{$row['id']}" ?>">Edite</a>
                                            || <a href="branch_name_del.php?id= <?php echo "{$row['id']}" ?>">Delete</a>
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
                            <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1
                                to 24 of 24 entries</div>
                        </div>
                        <div class="col-sm-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button previous disabled" id="datatable_previous"><a href="#"
                                            aria-controls="datatable" data-dt-idx="0" tabindex="0">Previous</a></li>
                                    <li class="paginate_button active"><a href="#" aria-controls="datatable"
                                            data-dt-idx="1" tabindex="0">1</a></li>
                                    <li class="paginate_button next disabled" id="datatable_next"><a href="#"
                                            aria-controls="datatable" data-dt-idx="2" tabindex="0">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

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