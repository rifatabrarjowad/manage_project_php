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
                    <form id="expense_head_form" method="post" action="expens.php">
                        <div class="box-body">
                            <p style="font-size: 20px; margin: 0px; padding: 0px; color: green; font-weight: bolder; text-align: center; display: block;"
                                id="insert_title">
                                Create Expense Name
                            </p>
                            <p style="font-size: 20px; margin: 0px; padding: 0px; color: blue; font-weight: bolder; text-align: center; display: none;"
                                id="edit_title">
                                Edit Expense Name
                            </p>
                            <div class="row">
                                <input type="hidden" name="record_id" id="record_id" class="form-control" value="2">
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label for="expense_head">Expense Head</label>
                                    <input type="text" name="expense_head" id="expense_head" class="form-control"
                                        required="">
                                </div>
                                <div class="form-group col-sm-1 col-xs-12" style="margin-top: 25px; display: block;"
                                    id="insert_btn">
                                    <input type="submit" name="submit" class="pull-left btn btn-success"
                                        value="submit" />
                                </div>
                                <div class="form-group col-sm-1 col-xs-12" style="margin-top: 25px; display: none;"
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
                        <p style="font-size: 20px; margin: 0px; padding: 0px;
                           color: purple; font-weight: bolder; text-align: center;">
                            All Expense Head Info
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
                                                    aria-label="Expense Head: activate to sort column ascending">Expense
                                                    Head</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
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
        $query = "SELECT * FROM expense_head";
        $show = mysqli_query($connection, $query);
        $con = mysqli_num_rows($show);
        if ($con > 0) {
            $num = 0;
            while ($row = mysqli_fetch_assoc($show)) {
                $num++;
                ?>




                                            <tr role="row" class="odd">
                                                <td style="text-align: center;"><?php echo $num; ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['hand']}" ?></td>
                                                <td style="text-align: center;">
                                                    <a
                                                        href="expense_head_edite.php?id= <?php echo "{$row['id']}" ?>">Edite</a>
                                                    || <a
                                                        href="expense_head_del.php?id=<?php echo "{$row['id']}" ?>">Delete</a>
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
                                        Showing 1 to 2 of 2 entries</div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button previous disabled" id="datatable_previous"><a
                                                    href="#" aria-controls="datatable" data-dt-idx="0"
                                                    tabindex="0">Previous</a></li>
                                            <li class="paginate_button active"><a href="#" aria-controls="datatable"
                                                    data-dt-idx="1" tabindex="0">1</a></li>
                                            <li class="paginate_button next disabled" id="datatable_next"><a href="#"
                                                    aria-controls="datatable" data-dt-idx="2" tabindex="0">Next</a></li>
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