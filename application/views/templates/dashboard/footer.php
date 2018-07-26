</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer">
    2018 © PT IPC Terminal Petikemas.
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo base_url('assets/vertical/node_modules/jquery/jquery-3.2.1.min.js')?>"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="<?php echo base_url('assets/vertical/node_modules/popper/popper.min.js')?>"></script>
<script src="<?php echo base_url('assets/vertical/node_modules/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url('assets/vertical/js/perfect-scrollbar.jquery.min.js')?>"></script>
<!--Wave Effects -->
<script src="<?php echo base_url('assets/vertical/js/waves.js')?>"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url('assets/vertical/js/sidebarmenu.js')?>"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url('assets/vertical/js/custom.min.js')?>"></script>

<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--stickey kit -->
<script src="<?php echo base_url('assets/vertical/node_modules/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>
<script src="<?php echo base_url('assets/vertical/node_modules/sparkline/jquery.sparkline.min.js')?>"></script>
<!-- Flot Charts JavaScript -->
<script src="<?php echo base_url('assets/vertical/node_modules/flot/jquery.flot.js')?>"></script>
<script src="<?php echo base_url('assets/vertical/node_modules/flot.tooltip/js/jquery.flot.tooltip.min.js')?>"></script>
<!--sparkline JavaScript -->
<script src="<?php echo base_url('assets/vertical/node_modules/sparkline/jquery.sparkline.min.js')?>"></script>
<!-- This is data table -->
<script src="<?php echo base_url('assets/vertical/node_modules/datatables/jquery.dataTables.min.js')?>"></script>
<!--stickey kit -->
<script src="<?php echo base_url('assets/vertical/node_modules/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>
<script src="<?php echo base_url('assets/vertical/node_modules/sparkline/jquery.sparkline.min.js')?>"></script>
<!-- Chart JS -->
<script src="<?php echo base_url('assets/vertical/js/dashboard2.js')?>"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url('assets/vertical/js/custom.min.js')?>"></script>
<script src="<?php echo base_url('assets/vertical/js/pages/jasny-bootstrap.js')?>"></script>
<!-- Sweet-Alert  -->
<script src="<?php echo base_url('assets/vertical/node_modules/sweetalert/sweetalert.min.js')?>"></script>
<script src="<?php echo base_url('assets/vertical/node_modules/sweetalert/jquery.sweet-alert.custom.js')?>"></script>
<!-- Validator -->
<script src="<?php echo base_url('assets/vertical/js/pages/validation.js')?>"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script>
// Script untuk Date Picker   
$('#mdate').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
$('#timepicker').bootstrapMaterialDatePicker({ format: 'HH:mm', time: true, date: false });
$('#date-format').bootstrapMaterialDatePicker({ format: 'dddd DD MMMM YYYY - HH:mm' });

$('#min-date').bootstrapMaterialDatePicker({ format: 'DD/MM/YYYY HH:mm', minDate: new Date() });
// Clock pickers
$('#single-input').clockpicker({
    placement: 'bottom',
    align: 'left',
    autoclose: true,
    'default': 'now'
});
$('.clockpicker').clockpicker({
    donetext: 'Done',
}).find('input').change(function() {
    console.log(this.value);
});
$('#check-minutes').click(function(e) {
    // Have to stop propagation here
    e.stopPropagation();
    input.clockpicker('show').clockpicker('toggleView', 'minutes');
});
if (/mobile/i.test(navigator.userAgent)) {
    $('input').prop('readOnly', true);
}
// Colorpicker
$(".colorpicker").asColorPicker();
$(".complex-colorpicker").asColorPicker({
    mode: 'complex'
});
$(".gradient-colorpicker").asColorPicker({
    mode: 'gradient'
});
// Date Picker
jQuery('.mydatepicker, #datepicker').datepicker();
jQuery('#datepicker-autoclose').datepicker({
    autoclose: true,
    todayHighlight: true
});
jQuery('#date-range').datepicker({
    toggleActive: true
});
jQuery('#datepicker-inline').datepicker({
    todayHighlight: true
});
// Daterange picker
$('.input-daterange-datepicker').daterangepicker({
    buttonClasses: ['btn', 'btn-sm'],
    applyClass: 'btn-danger',
    cancelClass: 'btn-inverse'
});
$('.input-daterange-timepicker').daterangepicker({
    timePicker: true,
    format: 'MM/DD/YYYY h:mm A',
    timePickerIncrement: 30,
    timePicker12Hour: true,
    timePickerSeconds: false,
    buttonClasses: ['btn', 'btn-sm'],
    applyClass: 'btn-danger',
    cancelClass: 'btn-inverse'
});
$('.input-limit-datepicker').daterangepicker({
    format: 'MM/DD/YYYY',
    minDate: '06/01/2015',
    maxDate: '06/30/2015',
    buttonClasses: ['btn', 'btn-sm'],
    applyClass: 'btn-danger',
    cancelClass: 'btn-inverse',
    dateLimit: {
        days: 6
    }
});
</script>
<!-- Script untuk mencetak tabel / invoice -->
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
    $(document).ready(function() {
        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        $('#example tbody').on('click', 'tr.group', function() {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
    });
});
$('#example23').DataTable({
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
});
</script>
</body>
</html>
