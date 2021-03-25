<script>
$(function() {
    $(".new_datepicker").datepicker({
        dateFormat: 'yy-mm-dd',
        constrainInput: true,
        changeYear: true,
        changeMonth: true
    });
});
</script>
<style>
div.ui-datepicker {
    font-size: 13px;
}

/*.ui-datepicker-calendar a.ui-state-default { background: cyan; }
    .ui-datepicker-calendar td.ui-datepicker-today a { background: red; }*/
.ui-datepicker-calendar a.ui-state-hover {
    background: #066;
    color: white;
}

.ui-datepicker-calendar a.ui-state-active {
    background: #066;
    color: white;
}
</style>
<script src="js/jquery-1.12.4.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://satatacable.greensoftit.com/adminlte/js/AdminLTE/app.js" type="text/javascript"></script>-->
<!-- <script src="js/jquery.dataTables.min.js" type="text/javascript"></script> -->
<script src="js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="js/dataTables.fixedHeader.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
</body>

</html>
<?php