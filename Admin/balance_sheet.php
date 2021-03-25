<?php include "inc/header.php";?>

<aside>
    <section class="content" style="padding: 10px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div style="color: black; background: #a6d7ff; padding: 8px; border: 2px solid #055d9c; margin-bottom:5px;"
                    class="no_print">
                    <form id="balance_sheet_form">
                        <div class="box-body">
                            <p style="font-size: 20px; margin: 0px; padding: 0px;
                               color: green; font-weight: bolder; text-align: center;">
                                Balance Sheet
                            </p>
                            <div class="row">
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="date_from">Date From</label>
                                    <input type="text" class="form-control new_datepicker hasDatepicker"
                                        placeholder="Insert Date" name="date_from" id="date_from" value="2020-10-28"
                                        autocomplete="off">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="date_to">Date To</label>
                                    <input type="text" class="form-control new_datepicker hasDatepicker"
                                        placeholder="Insert Date" name="date_to" id="date_to" value="2020-10-28"
                                        autocomplete="off">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="client_reseller">Dish Line / ISP</label>
                                    <select name="client_reseller" id="client_reseller" class="form-control">
                                        <option value="">All</option>
                                        <option value="Client">Dish Line</option>
                                        <option value="Reseller">ISP</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="income_head">User Wise</label>
                                    <select name="user" id="user" class="form-control">
                                        <option value="">-- Select --</option>
                                        <option value="1">
                                            Admin </option>
                                        <option value="28">
                                            pronob saha </option>
                                        <option value="29">
                                            Milon hosen </option>
                                        <option value="30">
                                            Aliif Morsalin </option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12" style="margin-top: 25px;">
                                    <button type="submit" class="pull-left btn btn-success">Search <i
                                            class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="view_table"></div>
            </section>
        </div>
    </section>
</aside>

<?php include "inc/footer.php";?>