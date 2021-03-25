<?php include "inc/header.php";?>
<aside>
    <section class="content" style="padding: 10px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable" id="view_invoice">
                <div id="overlay" style="display: none;">
                    <div id="img">
                        <img src="https://satatacable.greensoftit.com/assets/img/loading.gif" alt="">
                    </div>
                </div>
                <div style="color: black; background: #a6d7ff; padding: 8px; border: 2px solid #055d9c; margin-bottom:5px;"
                    class="no_print">
                    <form id="invoice_form">
                        <div class="box-body">
                            <p style="font-size: 20px; margin: 0px; padding: 0px;
                               color: green; font-weight: bolder; text-align: center;">
                                Bill Collection
                            </p>
                            <div class="row">
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="date">Date</label>
                                    <input type="text" class="form-control new_datepicker hasDatepicker"
                                        placeholder="Insert Date" name="date" id="date" value="2020-10-27"
                                        autocomplete="off">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12" style="display: none;">
                                    <label for="branch_name">Branch Name</label>
                                    <div class="dropdown bootstrap-select form-control"><select name="branch_name"
                                            id="branch_name" class="form-control selectpicker" data-live-search="true"
                                            tabindex="-98">
                                            <!-- <option value="">-- Select --</option> -->
                                            <option value="8">
                                                সততা ক্যাবল নেটওয়ার্ক </option>
                                            <option value="9">
                                                পাপিয়া ওয়াইফাই </option>
                                            <option value="10">
                                                GreenNet </option>
                                        </select><button type="button" class="btn dropdown-toggle btn-default"
                                            data-toggle="dropdown" role="button" data-id="branch_name"
                                            title="সততা ক্যাবল নেটওয়ার্ক">
                                            <div class="filter-option">
                                                <div class="filter-option-inner">
                                                    <div class="filter-option-inner-inner">সততা ক্যাবল নেটওয়ার্ক</div>
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
                                <div class="form-group col-sm-2 col-xs-12" style="display: none;">
                                    <label for="service_type">Service Type</label>
                                    <div class="dropdown bootstrap-select form-control"><select name="service_type"
                                            id="service_type" class="form-control selectpicker" data-live-search="true"
                                            tabindex="-98">
                                            <!-- <option value="">-- Select --</option> -->
                                            <option value="8">ডিস লাইন</option>
                                            <option value="9">ISP</option>
                                        </select><button type="button" class="btn dropdown-toggle btn-default"
                                            data-toggle="dropdown" role="button" data-id="service_type"
                                            title="ডিস লাইন">
                                            <div class="filter-option">
                                                <div class="filter-option-inner">
                                                    <div class="filter-option-inner-inner">ডিস লাইন</div>
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
                                <div class="form-group col-sm-2 col-xs-12" style="display: none;">
                                    <label for="area">Area</label>
                                    <div class="dropdown bootstrap-select form-control"><select name="area" id="area"
                                            class="form-control selectpicker" data-live-search="true" tabindex="-98">
                                            <option value="56">
                                                শিবপুর বাজার </option>
                                            <option value="62">
                                                সোনাপুর </option>
                                            <option value="63">
                                                কড়ই বাড়ি </option>
                                            <option value="64">
                                                ঢেকা পাড়া </option>
                                            <option value="65">
                                                বাজকোলা আদিবাসী পাড়া </option>
                                            <option value="66">
                                                বাজকোলা </option>
                                            <option value="67">
                                                ঠে্ংগাহার </option>
                                            <option value="68">
                                                Shibpur bajar </option>
                                            <option value="69">
                                                Degepara </option>
                                            <option value="70">
                                                শাশল বাজার </option>
                                            <option value="71">
                                                sisa bazar </option>
                                            <option value="72">
                                                sisa mollapara </option>
                                            <option value="73">
                                                sisa sahu para </option>
                                            <option value="74">
                                                douash </option>
                                            <option value="75">
                                                vobanipur </option>
                                            <option value="76">
                                                soriala para </option>
                                            <option value="77">
                                                tilna </option>
                                            <option value="78">
                                                nosnahar </option>
                                            <option value="79">
                                                Chakla para </option>
                                            <option value="80">
                                                Tokipur </option>
                                            <option value="81">
                                                Bamoil Bazar </option>
                                            <option value="82">
                                                Bajitpur </option>
                                            <option value="83">
                                                rohima pur </option>
                                            <option value="84">
                                                noshahar </option>
                                            <option value="85">
                                                buram baja </option>
                                            <option value="86">
                                                sorealla </option>
                                            <option value="87">
                                                sata </option>
                                            <option value="88">
                                                bajkola </option>
                                            <option value="89">
                                                Nazipur </option>
                                        </select><button type="button" class="btn dropdown-toggle btn-default"
                                            data-toggle="dropdown" role="button" data-id="area" title="শিবপুর বাজার">
                                            <div class="filter-option">
                                                <div class="filter-option-inner">
                                                    <div class="filter-option-inner-inner">শিবপুর বাজার</div>
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
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="client_reseller">Dish/ISP Client</label></font>
                                    <div class="dropdown bootstrap-select form-control"><select name="client_reseller"
                                            id="client_reseller" class="form-control selectpicker" required=""
                                            tabindex="-98">
                                            <option value="">-- Select --</option>
                                            <option value="Client">Dish Client</option>
                                            <option value="Reseller">ISP Client</option>
                                        </select><button type="button"
                                            class="btn dropdown-toggle bs-placeholder btn-default"
                                            data-toggle="dropdown" role="button" data-id="client_reseller"
                                            title="-- Select --">
                                            <div class="filter-option">
                                                <div class="filter-option-inner">
                                                    <div class="filter-option-inner-inner">-- Select --</div>
                                                </div>
                                            </div><span class="bs-caret"><span class="caret"></span></span>
                                        </button>
                                        <div class="dropdown-menu open" role="combobox">
                                            <div class="inner open" role="listbox" aria-expanded="false" tabindex="-1">
                                                <ul class="dropdown-menu inner "></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12" id="client_field" style="display: none;">
                                    <font color="red"><label for="client_list">Dish Client</label></font>
                                    <div class="dropdown bootstrap-select form-control"><select name="client_list"
                                            id="client_list" class="form-control selectpicker" data-live-search="true"
                                            tabindex="-98">
                                            <option value="">-- Select --</option>
                                        </select><button type="button"
                                            class="btn dropdown-toggle bs-placeholder btn-default"
                                            data-toggle="dropdown" role="button" data-id="client_list"
                                            title="-- Select --">
                                            <div class="filter-option">
                                                <div class="filter-option-inner">
                                                    <div class="filter-option-inner-inner">-- Select --</div>
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

                                <div class="form-group col-sm-2 col-xs-12" id="reseller_field" style="display: none;">
                                    <font color="red"><label for="reseller_list">ISP Client</label></font>
                                    <div class="dropdown bootstrap-select form-control"><select name="reseller_list"
                                            id="reseller_list" class="form-control selectpicker" data-live-search="true"
                                            tabindex="-98">
                                            <option value="">-- Select --</option>
                                            <option value="222122">
                                                Alif (222122) </option>
                                            <option value="1022">
                                                arman (1022) </option>
                                            <option value="1021">
                                                masud (1021) </option>
                                            <option value="1020">
                                                kolil (1020) </option>
                                            <option value="1019">
                                                shibly (1019) </option>
                                            <option value="1018">
                                                sisa hi school (1018) </option>
                                            <option value="1017">
                                                korsed (1017) </option>
                                            <option value="1016">
                                                rasal 2 (1016) </option>
                                            <option value="1015">
                                                anwar (1015) </option>
                                            <option value="1014">
                                                rayhan (1014) </option>
                                            <option value="1013">
                                                santo (1013) </option>
                                            <option value="1012">
                                                hatam (1012) </option>
                                            <option value="1011">
                                                rasel 1 (1011) </option>
                                            <option value="1010">
                                                sahen (1010) </option>
                                            <option value="1009">
                                                moshidpur cabal (1009) </option>
                                            <option value="1008">
                                                hosain (1008) </option>
                                            <option value="1007">
                                                alamgir (1007) </option>
                                            <option value="1006">
                                                ajadul (1006) </option>
                                            <option value="1005">
                                                imran (1005) </option>
                                            <option value="1004">
                                                baser sahu (1004) </option>
                                            <option value="1003">
                                                prodan (1003) </option>
                                            <option value="1001">
                                                utsav (1001) </option>
                                            <option value="1000">
                                                moshiur (1000) </option>
                                        </select><button type="button"
                                            class="btn dropdown-toggle bs-placeholder btn-default"
                                            data-toggle="dropdown" role="button" data-id="reseller_list"
                                            title="-- Select --">
                                            <div class="filter-option">
                                                <div class="filter-option-inner">
                                                    <div class="filter-option-inner-inner">-- Select --</div>
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

                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" readonly="" name="mobile" id="mobile" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="address">Address</label>
                                    <input type="text" readonly="" name="address" id="address" class="form-control">
                                </div>

                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="due_mon_amount">Payable</label></font>
                                    <input type="text" readonly="" name="due_mon_amount" id="due_mon_amount" value="0"
                                        class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="discount">Discount</label>
                                    <input type="text" name="discount" id="discount" value="0" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="remarks">Remarks</label>
                                    <div class="dropdown bootstrap-select form-control"><select name="remarks"
                                            id="remarks" class="form-control selectpicker" data-live-search="true"
                                            tabindex="-98">
                                            <option value="">-- Select --</option>
                                            <option value="VIP Client">VIP Client</option>
                                            <option value="Client Demand Discount">Client Demand Discount</option>
                                            <option value="Client Family Issue">Client Family Issue</option>
                                            <option value="Accident/Dead Issue">Accident/Dead Issue</option>
                                            <option value="Others">Others</option>
                                        </select><button type="button"
                                            class="btn dropdown-toggle bs-placeholder btn-default"
                                            data-toggle="dropdown" role="button" data-id="remarks" title="-- Select --">
                                            <div class="filter-option">
                                                <div class="filter-option-inner">
                                                    <div class="filter-option-inner-inner">-- Select --</div>
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
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="sub_total">Sub Total</label></font>
                                    <input type="text" readonly="" name="sub_total" id="sub_total" value="0"
                                        class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="paid_amount">Paid Amount</label></font>
                                    <input type="text" name="paid_amount" id="paid_amount" value="0"
                                        class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="commission_amount">Commission</label></font>
                                    <input type="text" name="commission_amount" id="commission_amount" value="0"
                                        class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="due">Rest Amount</label>
                                    <input type="text" readonly="" name="due" id="due" value="0" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="advance">Advance Pay</label>
                                    <input type="text" readonly="" name="advance" value="0" id="advance"
                                        class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="collect_by">Collect By</label>
                                    <input type="text" readonly="" value="Admin" name="collect_by" id="collect_by"
                                        class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="receipt_no">Receipt No.</label>
                                    <input type="text" name="receipt_no" id="receipt_no" class="form-control">
                                </div>
                                <div class="form-group col-sm-2 col-xs-12" style="margin-top: 25px;">
                                    <button type="submit" class="pull-left btn btn-success">Insert <i
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
                            Collected All Bill Info
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
                                                    aria-label="Invoice: activate to sort column ascending">Invoice</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Paid_Date: activate to sort column ascending">Paid_Date
                                                </th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Dish/ISP_Client: activate to sort column ascending">
                                                    Dish/ISP_Client</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Mobile: activate to sort column ascending">Mobile</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Payable: activate to sort column ascending">Payable</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Discount: activate to sort column ascending">Discount
                                                </th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Sub_Total: activate to sort column ascending">Sub_Total
                                                </th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Paid: activate to sort column ascending">Paid</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Due: activate to sort column ascending">Due</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Advance: activate to sort column ascending">Advance</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Remarks: activate to sort column ascending">Remarks</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="User: activate to sort column ascending">User</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Receipt No.: activate to sort column ascending">Receipt
                                                    No.</th>
                                                <th style="text-align: center;" class="no_print sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Action: activate to sort column ascending">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr role="row" class="odd">
                                                <td style="text-align: center;">1</td>
                                                <td style="text-align: center;">
                                                    <button class="btn btn-info no_print" onclick="show_invoice(23)">
                                                        <i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
                                                    </button>
                                                    INV23
                                                </td>
                                                <td style="text-align: center;">2020-10-22</td>


                                                <td style="text-align: center;">
                                                    arman (1022) </td>

                                                <td style="text-align: center;">01312153735</td>
                                                <!-- <td style="text-align: center;">bajidpur</td> -->
                                                <td style="text-align: center;">0</td>
                                                <td style="text-align: center;">100</td>
                                                <td style="text-align: center;">-100</td>
                                                <td style="text-align: center;">500</td>
                                                <td style="text-align: center;">0</td>
                                                <td style="text-align: center;">600</td>
                                                <td style="text-align: center;"></td>
                                                <td style="text-align: center;">Admin</td>
                                                <td style="text-align: center;"></td>
                                                <td style="text-align: center;" class="no_print">
                                                    <button class="btn btn-info" onclick="edit_data(23)">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-danger" onclick="delete_data(23)">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td style="text-align: center;">01764735178</td>
                                                <!-- <td style="text-align: center;"></td> -->
                                                <td style="text-align: center;">900</td>
                                                <td style="text-align: center;">0</td>
                                                <td style="text-align: center;">900</td>
                                                <td style="text-align: center;">900</td>
                                                <td style="text-align: center;">0</td>
                                                <td style="text-align: center;">0</td>
                                                <td style="text-align: center;"></td>
                                                <td style="text-align: center;">Admin</td>
                                                <td style="text-align: center;">pronob saha </td>
                                                <td style="text-align: center;" class="no_print">
                                                    <button class="btn btn-info" onclick="edit_data(14)">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-danger" onclick="delete_data(14)">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </td>
                                            </tr>
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