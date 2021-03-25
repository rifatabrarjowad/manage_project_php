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
                    <form id="area_form" method="post" action="area_info_edite_done.php">
                        <div class="box-body">
                            <p style="font-size: 20px; margin: 0px; padding: 0px;
                               color: green; font-weight: bolder; text-align: center;" id="insert_title">
                                Create Area Name
                            </p>
                            <p style="font-size: 20px; margin: 0px; padding: 0px;
                               color: blue; font-weight: bolder; text-align: center; display: none;" id="edit_title">
                                Edit Area Name
                            </p>
                            <div class="row">
                                <input type="hidden" name="record_id" id="record_id" class="form-control">
                                <div class="form-group col-sm-3 col-xs-12">
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

            $query = "SELECT * FROM area_info WHERE id = $rec_id";
            $show = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($show)) {
                ?>
                                <div class="form-group col-sm-4 col-xs-12">
                                    <label for="area_name">Area Name</label>
                                    <input type="text" name="area_name" id="area_name"
                                        value="<?php echo "{$row['areanam']}" ?> " class="form-control" required="">
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
                            </div>
                        </div>
                    </form>
                </div>

                <div>
                    <div class="box-header">
                        <p style="font-size: 20px; margin: 0px; padding: 0px;
                           color: purple; font-weight: bolder; text-align: center;">
                            All Area Info
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
                                                    aria-label="Company Name: activate to sort column ascending">Company
                                                    Name</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Service Type: activate to sort column ascending">Service
                                                    Type</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Area Name: activate to sort column ascending">Area Name
                                                </th>
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
        $query = "SELECT * FROM area_info";
        $show = mysqli_query($connection, $query);
        $con = mysqli_num_rows($show);
        if ($con > 0) {
            $num = 0;
            while ($row = mysqli_fetch_assoc($show)) {
                $num++;
                ?>




                                            <tr role="row" class="odd">
                                                <td style="text-align: center;"><?php echo $num; ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['comnam']}" ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['servnam']}" ?></td>
                                                <!--<td style="text-align: center;"></td>-->
                                                <td style="text-align: center;"><?php echo "{$row['areanam']}" ?></td>

                                                <td style="text-align: center;"><a
                                                        href="area_info_edite.php?id= <?php echo "{$row['id']}" ?>">Edite</a>
                                                    ||
                                                    <a
                                                        href="area_info_del.php?id=<?php echo "{$row['id']}" ?>">Delete</a>
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
                                        Showing 1 to 10 of 29 entries</div>
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