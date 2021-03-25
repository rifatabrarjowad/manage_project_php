<?php include "inc/header.php";?>
<aside>
    <section class="content" style="padding: 10px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div style="color: black; background: #a6d7ff; padding: 8px; border: 2px solid #055d9c; margin-bottom:5px;"
                    class="no_print">
                    <form id="role_setting_form" action="role_setting_edite_done.php" method="post">
                        <div class="box-body">
                            <p style="font-size: 20px; margin: 0px; padding: 0px;
                               color: green; font-weight: bolder; text-align: center;" id="insert_title">
                                User Setting
                            </p>
                            <p style="font-size: 20px; margin: 0px; padding: 0px;
                               color: blue; font-weight: bolder; text-align: center; display: none;" id="edit_title">
                                Edit User Setting
                            </p>
                            <div class="row">
                                <input type="hidden" name="record_id" id="record_id" class="form-control">
                                <div class="form-group col-sm-3 col-xs-12">
                                    <font color="red"><label for="area">Area</label></font>
                                    <div>
                                        <select class="form-control" name="areanam" id="">
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
                                <?php
include "conec.php";
if (!$connection) {
    die("Connect Fail" . mysqli_error($connection));
} else {
    if (isset($_REQUEST['id'])) {
        $rec_id = $_REQUEST['id'];

        $query = "SELECT * FROM log_in WHERE id = $rec_id";
        $show = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($show)) {
            ?>
                                <div class="form-group col-sm-3 col-xs-12">
                                    <label for="full_name">Full Name</label>
                                    <input type="text" value="<?php echo "{$row['fullnam']}" ?> " name="full_name"
                                        id="full_name" class="form-control">
                                </div>
                                <div class="form-group col-sm-3 col-xs-12">
                                    <label for="email">E-mail</label>
                                    <input type="text" value="<?php echo "{$row['email']}" ?> " name="email" id="email"
                                        class="form-control">
                                </div>
                                <div class="form-group col-sm-3 col-xs-12">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" value="<?php echo "{$row['mobile']}" ?> " name="mobile"
                                        id="mobile" class="form-control">
                                </div>
                                <div class="form-group col-sm-3 col-xs-12">
                                    <font color="red"><label for="user_name">Username</label></font>
                                    <input type="text" value="<?php echo "{$row['usernam']}" ?> " name="user_name"
                                        id="user_name" class="form-control" required="">
                                </div>
                                <div class="form-group col-sm-3 col-xs-12">
                                    <font color="red"><label for="password">Password</label></font>
                                    <input type="text" value="<?php echo "{$row['password']}" ?> " name="password"
                                        id="password" class="form-control" required="">
                                </div>
                                <?php
}
    } else {
        header('Location: branch_name.php');
    }
}
?>
                                <div class="form-group col-sm-3 col-xs-12">
                                    <font color="red"><label for="view_menu">View Menu</label></font>
                                    <input type="text" readonly="" value="all" name="role" id="paid_by"
                                        class="form-control">
                                </div>

                                <div class="form-group col-sm-3 col-xs-12" style="display: none;">
                                    <label for="edit_menu">Edit Menu</label>
                                    <div class="dropdown bootstrap-select show-tick form-control"><select
                                            name="edit_menu[]" id="edit_menu" class="form-control selectpicker"
                                            data-live-search="true" multiple="" tabindex="-98">
                                            <option value="">-- Select --</option>
                                            <option value="all">All</option>
                                            <option value="1">
                                                Dashboard </option>
                                            <option value="2">
                                                Company Name </option>
                                            <option value="3">
                                                Service Type </option>
                                            <option value="4">
                                                Package Info </option>
                                            <option value="5">
                                                Area Info </option>
                                            <option value="6">
                                                Expense Head </option>
                                            <option value="7">
                                                Income Head </option>
                                            <option value="8">
                                                Dish Client Info </option>
                                            <option value="9">
                                                ISP Client Info </option>
                                            <option value="10">
                                                Staff Info </option>
                                            <option value="11">
                                                Expense Entry </option>
                                            <option value="12">
                                                Income Entry </option>
                                            <option value="13">
                                                Bill Generate </option>
                                            <option value="14">
                                                Due Bill Info. </option>
                                            <option value="15">
                                                Bill Collection </option>
                                            <option value="16">
                                                Balance Sheet </option>
                                            <option value="17">
                                                Total Cash Report </option>
                                            <option value="18">
                                                Create SMS </option>
                                            <option value="19">
                                                Send SMS </option>
                                            <option value="20">
                                                User </option>
                                            <option value="21">
                                                Commission Info </option>
                                        </select><button type="button"
                                            class="btn dropdown-toggle bs-placeholder btn-default"
                                            data-toggle="dropdown" role="button" data-id="edit_menu"
                                            title="Nothing selected">
                                            <div class="filter-option">
                                                <div class="filter-option-inner">
                                                    <div class="filter-option-inner-inner">Nothing selected</div>
                                                </div>
                                            </div><span class="bs-caret"><span class="caret"></span></span>
                                        </button>
                                        <div class="dropdown-menu open" role="combobox">
                                            <div class="bs-searchbox"><input type="text" class="form-control"
                                                    autocomplete="off" role="textbox" aria-label="Search"></div>
                                            <div class="inner open" role="listbox" aria-expanded="false" tabindex="-1">
                                                <ul class="dropdown-menu inner "></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-3 col-xs-12" style="display: none;">
                                    <label for="delete_menu">Delete Menu</label>
                                    <div class="dropdown bootstrap-select show-tick form-control"><select
                                            name="delete_menu[]" id="delete_menu" class="form-control selectpicker"
                                            data-live-search="true" multiple="" tabindex="-98">
                                            <option value="">-- Select --</option>
                                            <option value="all">All</option>
                                            <option value="1">
                                                Dashboard </option>
                                            <option value="2">
                                                Company Name </option>
                                            <option value="3">
                                                Service Type </option>
                                            <option value="4">
                                                Package Info </option>
                                            <option value="5">
                                                Area Info </option>
                                            <option value="6">
                                                Expense Head </option>
                                            <option value="7">
                                                Income Head </option>
                                            <option value="8">
                                                Dish Client Info </option>
                                            <option value="9">
                                                ISP Client Info </option>
                                            <option value="10">
                                                Staff Info </option>
                                            <option value="11">
                                                Expense Entry </option>
                                            <option value="12">
                                                Income Entry </option>
                                            <option value="13">
                                                Bill Generate </option>
                                            <option value="14">
                                                Due Bill Info. </option>
                                            <option value="15">
                                                Bill Collection </option>
                                            <option value="16">
                                                Balance Sheet </option>
                                            <option value="17">
                                                Total Cash Report </option>
                                            <option value="18">
                                                Create SMS </option>
                                            <option value="19">
                                                Send SMS </option>
                                            <option value="20">
                                                User </option>
                                            <option value="21">
                                                Commission Info </option>
                                        </select><button type="button"
                                            class="btn dropdown-toggle bs-placeholder btn-default"
                                            data-toggle="dropdown" role="button" data-id="delete_menu"
                                            title="Nothing selected">
                                            <div class="filter-option">
                                                <div class="filter-option-inner">
                                                    <div class="filter-option-inner-inner">Nothing selected</div>
                                                </div>
                                            </div><span class="bs-caret"><span class="caret"></span></span>
                                        </button>
                                        <div class="dropdown-menu open" role="combobox">
                                            <div class="bs-searchbox"><input type="text" class="form-control"
                                                    autocomplete="off" role="textbox" aria-label="Search"></div>
                                            <div class="inner open" role="listbox" aria-expanded="false" tabindex="-1">
                                                <ul class="dropdown-menu inner "></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                        <p style="font-size: 20px; margin: 0px; padding: 0px;
                           color: purple; font-weight: bolder; text-align: center;">
                            All User Info
                        </p>
                    </div>

                    <div class="box-body table-responsive" id="view_table"
                        style="width: 100%; height: 300px; overflow-x: scroll; color: black;">
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
                                                    aria-label="Full Name: activate to sort column ascending">Full Name
                                                </th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="E-mail: activate to sort column ascending">E-mail</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Mobile: activate to sort column ascending">Mobile</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Username: activate to sort column ascending">Username
                                                </th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Areas: activate to sort column ascending">Password</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Areas: activate to sort column ascending">Areas</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="View Menu: activate to sort column ascending">View Menu
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
    $query = "SELECT * FROM log_in";
    $show = mysqli_query($connection, $query);
    $con = mysqli_num_rows($show);
    if ($con > 0) {
        $num = 0;
        while ($row = mysqli_fetch_assoc($show)) {
            $num++;
            ?>


                                            <tr role="row" class="odd">
                                                <td style="text-align: center;"><?php echo $num; ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['fullnam']}" ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['email']}" ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['mobile']}" ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['usernam']}" ?></td>
                                                <td style="text-align: center;"><?php echo "{$row['password']}" ?> </td>
                                                <!--<td style="text-align: center;">01733284510</td>-->
                                                <td style="text-align: center;"><?php echo "{$row['areanam']}" ?> </td>
                                                <td style="text-align: center;"><?php echo "{$row['role']}" ?> </td>

                                                <td style="text-align: center;">
                                                    <a
                                                        href="role_setting_edite.php?id= <?php echo "{$row['id']}" ?>">Edite</a>
                                                    || <a
                                                        href="role_setting_del.php?id=<?php echo "{$row['id']}" ?>">Delete</a>
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
                                        Showing 1 to 3 of 3 entries</div>
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