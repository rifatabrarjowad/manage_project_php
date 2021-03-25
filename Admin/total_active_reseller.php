<?php include "inc/header.php";?>

<body data-new-gr-c-s-check-loaded="14.981.0">

    <script>
    $('.sub_hide').on("click", function() {
        $('.subtog').hide();
    });

    $('.dropdown-submenu a.test').on("click", function(e) {
        $('.subtog').hide();
        $(this).next('ul').show();
        e.stopPropagation();
        e.preventDefault();
    });
    </script>
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

                    /*     table.table-bordered{
                                border: grey 1px solid;
                                font-weight: bold;
                                color: black;
                                font-size: 13px;
                            }
                            table.table-bordered > thead > tr > th{
                                border: grey 1px solid;
                                font-weight: bold;
                                color: black;
                                font-size: 13px;
                            }
                            table.table-bordered > tbody > tr > td{
                                border: grey 1px solid;
                                font-weight: bold;
                                color: black;
                                font-size: 13px;
                            }*/
                    </style>
                    <button id="print" onclick="window.print()"
                        class="btn btn-warning waves-effect waves-light no_print">
                        <i class="fa fa-print"></i>
                    </button>
                    <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_length" id="datatable_length"><label>Show <select
                                            name="datatable_length" aria-controls="datatable"
                                            class="form-control input-sm">
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="-1">All</option>
                                        </select> entries</label></div>
                            </div>
                            <div class="col-sm-6">
                                <div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                            class="form-control input-sm" placeholder=""
                                            aria-controls="datatable"></label></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="datatable"
                                    class="datatable table table-bordered table-hover dataTable no-footer" role="grid"
                                    aria-describedby="datatable_info">
                                    <thead>
                                        <tr role="row">
                                            <th style="text-align: center;" class="sorting" tabindex="0"
                                                aria-controls="datatable" rowspan="1" colspan="1"
                                                aria-label="SL: activate to sort column ascending">SL</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0"
                                                aria-controls="datatable" rowspan="1" colspan="1"
                                                aria-label="Company: activate to sort column ascending">Company</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0"
                                                aria-controls="datatable" rowspan="1" colspan="1"
                                                aria-label="Service: activate to sort column ascending">Service</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0"
                                                aria-controls="datatable" rowspan="1" colspan="1"
                                                aria-label="Name(Code): activate to sort column ascending">Name(Code)
                                            </th>
                                            <th style="text-align: center;" class="sorting" tabindex="0"
                                                aria-controls="datatable" rowspan="1" colspan="1"
                                                aria-label="Mobile: activate to sort column ascending">Mobile</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0"
                                                aria-controls="datatable" rowspan="1" colspan="1"
                                                aria-label="Address: activate to sort column ascending">Address</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0"
                                                aria-controls="datatable" rowspan="1" colspan="1"
                                                aria-label="House: activate to sort column ascending">House</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0"
                                                aria-controls="datatable" rowspan="1" colspan="1"
                                                aria-label="Area: activate to sort column ascending">Area</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0"
                                                aria-controls="datatable" rowspan="1" colspan="1"
                                                aria-label="Package: activate to sort column ascending">Package</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0"
                                                aria-controls="datatable" rowspan="1" colspan="1"
                                                aria-label="C.Date: activate to sort column ascending">C.Date</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0"
                                                aria-controls="datatable" rowspan="1" colspan="1"
                                                aria-label="IP_Qty: activate to sort column ascending">IP_Qty</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0"
                                                aria-controls="datatable" rowspan="1" colspan="1"
                                                aria-label="Card_No.: activate to sort column ascending">Card_No.</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0"
                                                aria-controls="datatable" rowspan="1" colspan="1"
                                                aria-label="V.Date: activate to sort column ascending">V.Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td style="text-align: center;">1</td>
                                            <td style="text-align: center;">পাপিয়া ওয়াইফাই </td>
                                            <td style="text-align: center;">ISP</td>
                                            <td style="text-align: center;">moshiur (1000)</td>
                                            <td style="text-align: center;">01713701395</td>
                                            <td style="text-align: center;">শিবপুর বাজার ,পত্নীতলা,নওগাঁ।</td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;">শিবপুর বাজার</td>
                                            <td style="text-align: center;">5_Mbps</td>
                                            <td style="text-align: center;">2020-10-15</td>
                                            <!--<td style="text-align: center;">0</td>-->
                                            <td style="text-align: center;">1</td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;">0000-00-00</td>
                                            <!--                <td style="text-align: center;"  class="no_print">
                                                                                                                                <button class="btn btn-info" onclick="edit_data('1000')">
                                                                                                <i class="fa fa-edit"></i>
                                                                                            </button>
                                                                                                                                                                    <button class="btn btn-danger" onclick="delete_data('1000')">
                                                                                                <i class="fa fa-trash-o"></i>
                                                                                            </button>
                                                                                                                                </td>-->
                                        </tr>
                                        <tr role="row" class="even">
                                            <td style="text-align: center;">22</td>
                                            <td style="text-align: center;">পাপিয়া ওয়াইফাই </td>
                                            <td style="text-align: center;">ISP</td>
                                            <td style="text-align: center;">arman (1022)</td>
                                            <td style="text-align: center;">01312153735</td>
                                            <td style="text-align: center;">bajidpur</td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;">Bajitpur</td>
                                            <td style="text-align: center;">3_Mbps</td>
                                            <td style="text-align: center;">2020-10-12</td>
                                            <!--<td style="text-align: center;">0</td>-->
                                            <td style="text-align: center;">1</td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;">0000-00-00</td>
                                            <!--                <td style="text-align: center;"  class="no_print">
                                                                                                                                <button class="btn btn-info" onclick="edit_data('1022')">
                                                                                                <i class="fa fa-edit"></i>
                                                                                            </button>
                                                                                                                                                                    <button class="btn btn-danger" onclick="delete_data('1022')">
                                                                                                <i class="fa fa-trash-o"></i>
                                                                                            </button>
                                                                                                                                </td>-->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">
                                    Showing 1 to 22 of 22 entries</div>
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
                </section>
            </div>
        </section>
    </aside>