<?php include "inc/header.php";?>
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

                html {
                    background-color: #FFFFFF;
                    margin: 0px;
                    /* this affects the margin on the html before sending to printer */
                }

                .no_print {
                    display: none;
                }

                ::-webkit-scrollbar {
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
            <button id="print" onclick="window.print()" class="btn btn-warning waves-effect waves-light no_print">
                <i class="fa fa-print"></i>
            </button>
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length"
                                    aria-controls="datatable" class="form-control input-sm">
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="-1">All</option>
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
                                <tr role="row" style="background:#0aad87 !important;color:white">
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
                                        aria-label="Name(Code): activate to sort column ascending">Name(Code)</th>
                                    <th style="text-align: center;" class="sorting" tabindex="0"
                                        aria-controls="datatable" rowspan="1" colspan="1"
                                        aria-label="Image: activate to sort column ascending">Image</th>
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
                                        aria-label="Bill: activate to sort column ascending">Bill</th>
                                    <th style="text-align: center;" class="sorting" tabindex="0"
                                        aria-controls="datatable" rowspan="1" colspan="1"
                                        aria-label="C.Date: activate to sort column ascending">C.Date</th>
                                    <th style="text-align: center;" class="sorting" tabindex="0"
                                        aria-controls="datatable" rowspan="1" colspan="1"
                                        aria-label="C.Charge: activate to sort column ascending">C.Charge</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd">
                                    <td valign="top" colspan="13" class="dataTables_empty">No data available in table
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 0 to 0
                            of 0 entries</div>
                    </div>
                    <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                            <ul class="pagination">
                                <li class="paginate_button previous disabled" id="datatable_previous"><a href="#"
                                        aria-controls="datatable" data-dt-idx="0" tabindex="0">Previous</a></li>
                                <li class="paginate_button next disabled" id="datatable_next"><a href="#"
                                        aria-controls="datatable" data-dt-idx="1" tabindex="0">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="row">
                        <div class="col-xs-6" style="text-align: left;"></div>
                        <div class="col-xs-6"  style="text-align: right;">
                           <br>
                            <b>Authorization Signature ___________________________</b>
                        </div>
                    </div>-->
        </section>
    </div>
</section>
<?php include "inc/footer.php";?>