<?php include "inc/header.php";?>
<aside>
    <section class="content" style="padding: 10px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div id="overlay" style="display: none;">
                    <div id="img">
                        <img src="https://satatacable.greensoftit.com/assets/img/loading.gif" alt="">
                    </div>
                </div>
                <div style="color: black; background: #a6d7ff; padding: 8px; border: 2px solid #055d9c; margin-bottom:5px;"
                    class="no_print">
                    <form id="bill_form">
                        <div class="box-body">
                            <p style="font-size: 20px; margin: 0px; padding: 0px;
                               color: green; font-weight: bolder; text-align: center;">
                                Bill Generate
                            </p>
                            <div class="row">
                                <div class="form-group col-sm-2 col-xs-12" style="display: none;">
                                    <label for="branch_name">Branch Name</label>
                                    <div class="dropdown bootstrap-select form-control"><select name="branch_name"
                                            id="branch_name" class="form-control selectpicker" data-live-search="true"
                                            tabindex="-98">
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
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="client_reseller">Dish/ISP Client</label></font>
                                    <div class="dropdown bootstrap-select form-control"><select name="client_reseller"
                                            id="client_reseller" class="form-control selectpicker"
                                            data-live-search="true" tabindex="-98">
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
                                            <div class="bs-searchbox"><input type="text" class="form-control"
                                                    autocomplete="off" role="textbox" aria-label="Search"></div>
                                            <div class="inner open" role="listbox" aria-expanded="false" tabindex="-1">
                                                <ul class="dropdown-menu inner "></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-sm-1 col-xs-12" style="margin-top: 30px; display: none;"
                                    id="s_all_dish">
                                    <input type="radio" id="s_all_dish_btn">
                                    <label>Select All</label>
                                </div>
                                <div class="form-group col-sm-1 col-xs-12" style="margin-top: 30px; display: none;"
                                    id="s_all_isp">
                                    <input type="radio" id="s_all_isp_btn">
                                    <label>Select All</label>
                                </div>
                                <div class="form-group col-sm-3 col-xs-12" id="client_field" style="display: none;">
                                    <font color="red"><label for="client_list">Dish Client</label></font>
                                    <div class="dropdown bootstrap-select show-tick form-control"><select
                                            name="client_list[]" id="client_list" class="form-control selectpicker"
                                            data-live-search="true" multiple="" tabindex="-98">
                                        </select><button type="button"
                                            class="btn dropdown-toggle bs-placeholder btn-default"
                                            data-toggle="dropdown" role="button" data-id="client_list"
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
                                <div class="form-group col-sm-3 col-xs-12" id="reseller_field" style="display: none;">
                                    <font color="red"><label for="reseller_list">ISP Client</label></font>
                                    <div class="dropdown bootstrap-select show-tick form-control"><select
                                            name="reseller_list[]" id="reseller_list" class="form-control selectpicker"
                                            data-live-search="true" multiple="" tabindex="-98">
                                            <option value="222122">
                                                1) Alif (222122) </option>
                                            <option value="1022">
                                                2) arman (1022) </option>
                                            <option value="1021">
                                                3) masud (1021) </option>
                                            <option value="1020">
                                                4) kolil (1020) </option>
                                            <option value="1019">
                                                5) shibly (1019) </option>
                                            <option value="1018">
                                                6) sisa hi school (1018) </option>
                                            <option value="1017">
                                                7) korsed (1017) </option>
                                            <option value="1016">
                                                8) rasal 2 (1016) </option>
                                            <option value="1015">
                                                9) anwar (1015) </option>
                                            <option value="1014">
                                                10) rayhan (1014) </option>
                                            <option value="1013">
                                                11) santo (1013) </option>
                                            <option value="1012">
                                                12) hatam (1012) </option>
                                            <option value="1011">
                                                13) rasel 1 (1011) </option>
                                            <option value="1010">
                                                14) sahen (1010) </option>
                                            <option value="1009">
                                                15) moshidpur cabal (1009) </option>
                                            <option value="1008">
                                                16) hosain (1008) </option>
                                            <option value="1007">
                                                17) alamgir (1007) </option>
                                            <option value="1006">
                                                18) ajadul (1006) </option>
                                            <option value="1005">
                                                19) imran (1005) </option>
                                            <option value="1004">
                                                20) baser sahu (1004) </option>
                                            <option value="1003">
                                                21) prodan (1003) </option>
                                            <option value="1001">
                                                22) utsav (1001) </option>
                                            <option value="1000">
                                                23) moshiur (1000) </option>
                                        </select><button type="button"
                                            class="btn dropdown-toggle bs-placeholder btn-default"
                                            data-toggle="dropdown" role="button" data-id="reseller_list"
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
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="generate_month">Generate Month</label>
                                    <div class="dropdown bootstrap-select form-control"><select name="generate_month"
                                            id="generate_month" class="form-control selectpicker"
                                            data-live-search="true" tabindex="-98">
                                            <option selected="" value="October">October</option>
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select><button type="button" class="btn dropdown-toggle btn-default"
                                            data-toggle="dropdown" role="button" data-id="generate_month"
                                            title="October">
                                            <div class="filter-option">
                                                <div class="filter-option-inner">
                                                    <div class="filter-option-inner-inner">October</div>
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
                                    <label for="generate_year">Generate Year</label>
                                    <div class="dropdown bootstrap-select form-control"><select name="generate_year"
                                            id="generate_year" class="form-control selectpicker" tabindex="-98">
                                            <option value="2019">2019</option>
                                            <option selected="" value="2020">2020</option>
                                            <option value="2021">2021</option>
                                        </select><button type="button" class="btn dropdown-toggle btn-default"
                                            data-toggle="dropdown" role="button" data-id="generate_year" title="2020">
                                            <div class="filter-option">
                                                <div class="filter-option-inner">
                                                    <div class="filter-option-inner-inner">2020</div>
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
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="previous_due">Previous Due</label>
                                    <input type="text" name="previous_due" id="previous_due" class="form-control"
                                        value="0">
                                </div>
                                <div class="form-group col-sm-1 col-xs-12" style="margin-top: 25px;">
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
                            Generated All Bill Info
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
                                                    aria-label="Month: activate to sort column ascending">Month</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Year: activate to sort column ascending">Year</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Dish/ISP_Client: activate to sort column ascending">
                                                    Dish/ISP_Client</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Mobile: activate to sort column ascending">Mobile</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Area: activate to sort column ascending">Area</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Particular: activate to sort column ascending">
                                                    Particular</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Amount: activate to sort column ascending">Amount</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Paid_Status: activate to sort column ascending">
                                                    Paid_Status</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Due: activate to sort column ascending">Due</th>
                                                <th style="text-align: center;" class="sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Paid_Date: activate to sort column ascending">Paid_Date
                                                </th>
                                                <th style="text-align: center;" class="no_print sorting" tabindex="0"
                                                    aria-controls="datatable" rowspan="1" colspan="1"
                                                    aria-label="Action: activate to sort column ascending">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td style="text-align: center;">1</td>
                                                <td style="text-align: center;">October</td>
                                                <td style="text-align: center;">2020</td>
                                                <!--                <td style="text-align: center;">সততা ক্যাবল নেটওয়ার্ক</td>
                <td style="text-align: center;">ডিস লাইন</td>-->
                                                <td style="text-align: center;">
                                                    hatam (1012) </td>
                                                <td style="text-align: center;"></td>
                                                <td style="text-align: center;">শাশল বাজার</td>
                                                <td style="text-align: center;">Monthly Bill</td>
                                                <td style="text-align: center;">600</td>
                                                <td style="text-align: center;">
                                                    Paid </td>
                                                <td style="text-align: center;">0</td>
                                                <td style="text-align: center;">2020-10-21</td>
                                                <td style="text-align: center;" class="no_print">
                                                    <button class="btn btn-danger" onclick="delete_data(45)">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td style="text-align: center;">2</td>
                                                <td style="text-align: center;">October</td>
                                                <td style="text-align: center;">2020</td>
                                                <!--                <td style="text-align: center;">সততা ক্যাবল নেটওয়ার্ক</td>
                <td style="text-align: center;">ডিস লাইন</td>-->
                                                <td style="text-align: center;">
                                                    santo (1013) </td>
                                                <td style="text-align: center;"></td>
                                                <td style="text-align: center;">Tokipur</td>
                                                <td style="text-align: center;">Monthly Bill</td>
                                                <td style="text-align: center;">900</td>
                                                <td style="text-align: center;">
                                                    Paid </td>
                                                <td style="text-align: center;">0</td>
                                                <td style="text-align: center;">2020-10-21</td>
                                                <td style="text-align: center;" class="no_print">
                                                    <button class="btn btn-danger" onclick="delete_data(44)">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td style="text-align: center;">3</td>
                                                <td style="text-align: center;">October</td>
                                                <td style="text-align: center;">2020</td>
                                                <!--                <td style="text-align: center;">সততা ক্যাবল নেটওয়ার্ক</td>
                <td style="text-align: center;">ডিস লাইন</td>-->
                                                <td style="text-align: center;">
                                                    rayhan (1014) </td>
                                                <td style="text-align: center;"></td>
                                                <td style="text-align: center;">buram baja</td>
                                                <td style="text-align: center;">Monthly Bill</td>
                                                <td style="text-align: center;">900</td>
                                                <td style="text-align: center;">
                                                    Paid </td>
                                                <td style="text-align: center;">0</td>
                                                <td style="text-align: center;">2020-10-21</td>
                                                <td style="text-align: center;" class="no_print">
                                                    <button class="btn btn-danger" onclick="delete_data(43)">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td style="text-align: center;">4</td>
                                                <td style="text-align: center;">October</td>
                                                <td style="text-align: center;">2020</td>
                                                <!--                <td style="text-align: center;">সততা ক্যাবল নেটওয়ার্ক</td>
                <td style="text-align: center;">ডিস লাইন</td>-->
                                                <td style="text-align: center;">
                                                    anwar (1015) </td>
                                                <td style="text-align: center;"></td>
                                                <td style="text-align: center;">শাশল বাজার</td>
                                                <td style="text-align: center;">Monthly Bill</td>
                                                <td style="text-align: center;">900</td>
                                                <td style="text-align: center;">
                                                    Paid </td>
                                                <td style="text-align: center;">0</td>
                                                <td style="text-align: center;">2020-10-21</td>
                                                <td style="text-align: center;" class="no_print">
                                                    <button class="btn btn-danger" onclick="delete_data(42)">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td style="text-align: center;">5</td>
                                                <td style="text-align: center;">October</td>
                                                <td style="text-align: center;">2020</td>
                                                <!--                <td style="text-align: center;">সততা ক্যাবল নেটওয়ার্ক</td>
                <td style="text-align: center;">ডিস লাইন</td>-->
                                                <td style="text-align: center;">
                                                    rasal 2 (1016) </td>
                                                <td style="text-align: center;"></td>
                                                <td style="text-align: center;">Shibpur bajar</td>
                                                <td style="text-align: center;">Monthly Bill</td>
                                                <td style="text-align: center;">600</td>
                                                <td style="text-align: center;">
                                                    Paid </td>
                                                <td style="text-align: center;">0</td>
                                                <td style="text-align: center;">2020-10-21</td>
                                                <td style="text-align: center;" class="no_print">
                                                    <button class="btn btn-danger" onclick="delete_data(41)">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td style="text-align: center;">6</td>
                                                <td style="text-align: center;">October</td>
                                                <td style="text-align: center;">2020</td>
                                                <!--                <td style="text-align: center;">সততা ক্যাবল নেটওয়ার্ক</td>
                <td style="text-align: center;">ডিস লাইন</td>-->
                                                <td style="text-align: center;">
                                                    korsed (1017) </td>
                                                <td style="text-align: center;"></td>
                                                <td style="text-align: center;">tilna </td>
                                                <td style="text-align: center;">Monthly Bill</td>
                                                <td style="text-align: center;">500</td>
                                                <td style="text-align: center;">
                                                    Paid </td>
                                                <td style="text-align: center;">0</td>
                                                <td style="text-align: center;">2020-10-21</td>
                                                <td style="text-align: center;" class="no_print">
                                                    <button class="btn btn-danger" onclick="delete_data(40)">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td style="text-align: center;">7</td>
                                                <td style="text-align: center;">October</td>
                                                <td style="text-align: center;">2020</td>
                                                <!--                <td style="text-align: center;">সততা ক্যাবল নেটওয়ার্ক</td>
                <td style="text-align: center;">ডিস লাইন</td>-->
                                                <td style="text-align: center;">
                                                    sisa hi school (1018) </td>
                                                <td style="text-align: center;"></td>
                                                <td style="text-align: center;">sisa bazar</td>
                                                <td style="text-align: center;">Monthly Bill</td>
                                                <td style="text-align: center;">900</td>
                                                <td style="text-align: center;">
                                                    Paid </td>
                                                <td style="text-align: center;">0</td>
                                                <td style="text-align: center;">2020-10-21</td>
                                                <td style="text-align: center;" class="no_print">
                                                    <button class="btn btn-danger" onclick="delete_data(39)">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td style="text-align: center;">8</td>
                                                <td style="text-align: center;">October</td>
                                                <td style="text-align: center;">2020</td>
                                                <!--                <td style="text-align: center;">সততা ক্যাবল নেটওয়ার্ক</td>
                <td style="text-align: center;">ডিস লাইন</td>-->
                                                <td style="text-align: center;">
                                                    shibly (1019) </td>
                                                <td style="text-align: center;"></td>
                                                <td style="text-align: center;">Degepara</td>
                                                <td style="text-align: center;">Monthly Bill</td>
                                                <td style="text-align: center;">600</td>
                                                <td style="text-align: center;">
                                                    Paid </td>
                                                <td style="text-align: center;">0</td>
                                                <td style="text-align: center;">2020-10-21</td>
                                                <td style="text-align: center;" class="no_print">
                                                    <button class="btn btn-danger" onclick="delete_data(38)">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td style="text-align: center;">9</td>
                                                <td style="text-align: center;">October</td>
                                                <td style="text-align: center;">2020</td>
                                                <!--                <td style="text-align: center;">সততা ক্যাবল নেটওয়ার্ক</td>
                <td style="text-align: center;">ডিস লাইন</td>-->
                                                <td style="text-align: center;">
                                                    kolil (1020) </td>
                                                <td style="text-align: center;"></td>
                                                <td style="text-align: center;">bajkola</td>
                                                <td style="text-align: center;">Monthly Bill</td>
                                                <td style="text-align: center;">500</td>
                                                <td style="text-align: center;">
                                                    Paid </td>
                                                <td style="text-align: center;">0</td>
                                                <td style="text-align: center;">2020-10-21</td>
                                                <td style="text-align: center;" class="no_print">
                                                    <button class="btn btn-danger" onclick="delete_data(37)">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td style="text-align: center;">10</td>
                                                <td style="text-align: center;">October</td>
                                                <td style="text-align: center;">2020</td>
                                                <!--                <td style="text-align: center;">সততা ক্যাবল নেটওয়ার্ক</td>
                <td style="text-align: center;">ডিস লাইন</td>-->
                                                <td style="text-align: center;">
                                                    masud (1021) </td>
                                                <td style="text-align: center;"></td>
                                                <td style="text-align: center;">buram baja</td>
                                                <td style="text-align: center;">Monthly Bill</td>
                                                <td style="text-align: center;">600</td>
                                                <td style="text-align: center;">
                                                    Paid </td>
                                                <td style="text-align: center;">0</td>
                                                <td style="text-align: center;">2020-10-21</td>
                                                <td style="text-align: center;" class="no_print">
                                                    <button class="btn btn-danger" onclick="delete_data(36)">
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
                                        Showing 1 to 10 of 45 entries</div>
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
                                            <li class="paginate_button "><a href="#" aria-controls="datatable"
                                                    data-dt-idx="4" tabindex="0">4</a></li>
                                            <li class="paginate_button "><a href="#" aria-controls="datatable"
                                                    data-dt-idx="5" tabindex="0">5</a></li>
                                            <li class="paginate_button next" id="datatable_next"><a href="#"
                                                    aria-controls="datatable" data-dt-idx="6" tabindex="0">Next</a></li>
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