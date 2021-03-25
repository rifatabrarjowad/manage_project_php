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
                    <form id="expense_form" action="expense_edite_done.php" method="post">

                        <div class="box-body">
                            <p style="font-size: 20px; margin: 0px; padding: 0px;
                               color: green; font-weight: bolder; text-align: center;" id="insert_title">
                                Add Expense Info
                            </p>
                            <p style="font-size: 20px; margin: 0px; padding: 0px;
                               color: blue; font-weight: bolder; text-align: center; display: none;" id="edit_title">
                                Edit Expense Info
                            </p>
                            <?php
include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        if (isset($_REQUEST['id'])) {
            $rec_id = $_REQUEST['id'];

            $query = "SELECT * FROM expense WHERE id = $rec_id";
            $show = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($show)) {
                ?>
                            <div class="row">
                                <input type="hidden" name="record_id" id="record_id" class="form-control">
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="date">Date</label>
                                    <input type="text" class="form-control new_datepicker hasDatepicker"
                                        placeholder="Insert Date" value="<?php echo "{$row['date']}" ?> " name="date"
                                        id="date" required="" autocomplete="off">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="invoice_no">Voucher No</label></font>
                                    <input type="text" value="<?php echo "{$row['vou']}" ?> " name="invoice_no"
                                        id="invoice_no" class="form-control" required="">
                                </div>
                                <?php }
        } else {
            header('Location: branch_name.php');
        }
    }
    ?>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="client_reseller">Dish Line / ISP</label></font>
                                    <div>
                                        <select class="form-control" name="com_nam" id="">

                                            <option value="">dish line </option>
                                            <option value="">ISP</option>
                                            <option value="">Other</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 col-xs-12">
                                    <font color="red"><label for="expense_head_id">Expense Head</label></font>
                                    <div>
                                        <select class="form-control" name="hand" id="">
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
                                            <option value="<?php echo "{$row['hand']}" ?>">
                                                <?php echo "{$row['hand']}" ?></option>
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

            $query = "SELECT * FROM expense WHERE id = $rec_id";
            $show = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($show)) {
                ?>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="amount">Amount</label></font>
                                    <input type="text" value="<?php echo "{$row['money']}" ?> " name="amount"
                                        id="amount" class="form-control" required="">
                                </div>
                                <div class="form-group col-sm-3 col-xs-12">
                                    <label for="remarks">Remarks</label>
                                    <input type="text" value="<?php echo "{$row['remark']}" ?> " name="remarks"
                                        id="remarks" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="paid_by">Paid By</label>
                                    <input type="text" value="<?php echo "{$row['paidby']}" ?> " value="" name="paid_by"
                                        class="form-control">
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
                            All Expense Info
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

                        <table id="datatable" class="datatable table table-bordered table-hover">
                            <thead>

                                <tr>
                                    <th style="text-align: center;">SL</th>
                                    <th style="text-align: center;">Date</th>
                                    <th style="text-align: center;">Voucher_No</th>
                                    <th style="text-align: center;">Expense_Head</th>
                                    <th style="text-align: center;">Amount</th>
                                    <th style="text-align: center;">Remarks</th>
                                    <th style="text-align: center;">Paid_By</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
include "conec.php";
    if (!$connection) {
        die("Connect Fail" . mysqli_error($connection));
    } else {
        $query = "SELECT * FROM expense";
        $show = mysqli_query($connection, $query);
        $con = mysqli_num_rows($show);
        if ($con > 0) {
            $num = 0;
            while ($row = mysqli_fetch_assoc($show)) {
                $num++;
                ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $num; ?></td>
                                    <td style="text-align: center;"><?php echo "{$row['date']}" ?></td>
                                    <td style="text-align: center;"><?php echo "{$row['vou']}" ?></td>
                                    <td style="text-align: center;"><?php echo "{$row['hand']}" ?></td>
                                    <td style="text-align: center;"><?php echo "{$row['money']}" ?></td>
                                    <td style="text-align: center;"><?php echo "{$row['remark']}" ?></td>
                                    <td style="text-align: center;"><?php echo "{$row['paidby']}" ?></td>
                                    <td style="text-align: center;">
                                        <a href="expense_edite.php?id= <?php echo "{$row['id']}" ?>">Edite</a>
                                        || <a href="expense_del.php?id=<?php echo "{$row['id']}" ?>">Delete</a>
                                    </td>
                                </tr>
                                <?php }}

    }
    ?>
                            </tbody>
                        </table>
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