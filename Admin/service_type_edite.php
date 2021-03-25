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
                <div style="color: black; background: #a6d7ff; padding: 8px; border: 2px solid #055d9c; margin-bottom:5px;"
                    class="no_print">
                    <?php
include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        if (isset($_REQUEST['id'])) {
            $rec_id = $_REQUEST['id'];

            $query = "SELECT * FROM service_type WHERE id = $rec_id";
            $show = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($show)) {
                ?>

                    <form id="branch_form" action="service_type_edite_done.php" method="post">
                        <div class="box-body">
                            <p style="font-size: 20px; margin: 0px; padding: 0px;
                                color: green; font-weight: bolder; text-align: center;">
                                Create Service Type
                                <!--<b id="msg" style="text-align: right;"></b>-->
                            </p>
                            <div class="row">
                                <div class="form-group col-sm-3 col-xs-12">

                                </div>
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="address">Service Type</label>
                                    <input type="text" name="address" value=" <?php echo "{$row['ser']}" ?>"
                                        id="address" required class="form-control">
                                </div>
                                <div class="form-group col-sm-3 col-xs-12" style="margin-top: 25px;">
                                    <input type="submit" value="Insert " name="submit"
                                        class="pull-left btn btn-success" />
                                </div>
                                <input type="hidden" value="<?php echo $rec_id; ?> " name="hid_id" />
                            </div>
                        </div>
                    </form>
                    <?php
}
        } else {
            header('Location: branch_name.php');
        }
    }
    ?>
                </div>
                <div class="box-header">
                    <p style="font-size: 20px; margin: 0px; padding: 0px;
                           color: purple; font-weight: bolder; text-align: center;">
                        All Service Info
                    </p>
                </div>
                <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
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
                                            aria-label="Invoice: activate to sort column ascending">Service Type</th>
                                        <th style="text-align: center;" class="sorting" tabindex="0"
                                            aria-controls="datatable" rowspan="1" colspan="1"
                                            aria-label="Invoice: activate to sort column ascending">Action Type</th>
                                    </tr>
                                </thead>
                                <tbody>

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

                                    <tr role="row" class="odd">
                                        <td style="text-align: center;"><?php echo $num; ?></td>
                                        <td style="text-align: center;"> <?php echo "{$row['ser']}" ?></td>
                                        <td style="text-align: center;"><a
                                                href="service_type_edite.php?id= <?php echo "{$row['id']}" ?>">Edite</a>
                                            || <a href="service_type_del.php?id=<?php echo "{$row['id']}" ?>">Delete</a>
                                        </td>
                                    </tr>
                                    <?php }}

    }
    ?>

                                </tbody>
                            </table>
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