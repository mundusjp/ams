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
</body>
<!-- ============================================================== -->
<!-- Sweet Alert Functions -->
<!-- ============================================================== -->
<script>
$(function(){ myTable.init(); });
function deletedivisi(a)
{
    var id= a.value;

    swal({
            title: "Are you sure?",
            text: "You want to delete this Division!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, Delete it!",
            closeOnConfirm: false }, function()
        {
            swal("Deleted!", "Division has been Deleted.", "success");
            $(inventoryipc).attr('href','<?php echo base_url()?>divisi/remove/'+id);
        }
    );
}

function swalupdate()
{
  swal("Berhasil!", "Informasi Telah Diperbaharui", "success");
}

function succ_logout()
{
  swal({
  title: "Sukses Mengubah Password!",
  text: "Anda akan menuju halaman login dalam 3 detik.",
  timer: 2500
});
}
</script>
<script>
function thousandseparator()
{
  const numberWithCommas = (x) =>
  {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }
}
</script>
<!-- ============================================================== -->
<!-- Password Functions -->
<!-- ============================================================== -->
<script>
function chkPwd(a)
{
    // let Pswd is ID of password and cPswd is ID of confirm password text Box
    var newPwd = document.getElementById('Pswd').value;
    var cPwd = document.getElementById('cPswd').value;
    if(newPwd != cPwd)
    {
        document.getElementById('cPswd').focus();
        document.getElementById('cPswd').value="";
        document.getElementById('err').innerHTML="Passwords are Not Matching";
    }
}
</script>
<script>
! function(window, document, $) {
    "use strict";
    $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
}(window, document, jQuery);
</script>
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
<script src="<?php echo base_url('assets/vertical/node_modules/wizard/jquery.steps.min.js')?>"></script>
<script src="<?php echo base_url('assets/vertical/node_modules/wizard/jquery.validate.min.js')?>"></script>
<!--stickey kit -->
<script src="<?php echo base_url('assets/vertical/node_modules/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>
<script src="<?php echo base_url('assets/vertical/node_modules/sparkline/jquery.sparkline.min.js')?>"></script>
<!-- http://bootstrapvalidator.votintsev.ru/getting-started/#cdn -->
<!-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script> -->
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

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
<script src="<?php echo base_url('assets/vertical/js/pages/validation.js')?>"></script>
<!-- step wizard -->
<script src="<?php echo base_url('assets/vertical/node_modules/wizard/steps.js')?>"></script>
<!-- Sweet-Alert  -->
<script src="<?php echo base_url('assets/vertical/node_modules/sweetalert/sweetalert.min.js')?>"></script>
<script src="<?php echo base_url('assets/vertical/node_modules/sweetalert/jquery.sweet-alert.custom.js')?>"></script>
<!-- Validator -->
<script src="<?php echo base_url('assets/vertical/js/pages/validation.js')?>"></script>
<!-- Image cropper JavaScript -->
<script src="<?php echo base_url('assets/vertical/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js')?>"></script>
<!-- Magnific popup JavaScript -->
<script src="<?php echo base_url('assets/vertical/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')?>"></script>
<script src="<?php echo base_url('assets/vertical/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')?>"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
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
<script>
// Date Picker
jQuery('.mydatepicker, #datepicker').datepicker({ dateFormat: 'dd-mm-yy' });
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
</script>
<script>
$('#upload').on('click', function() {
    $('#file-input').trigger('click');
});
</script>
 <script>
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
    }(window, document, jQuery);
    </script>
</body>
</html>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
<script>
 $ ('.delete_lead').on("click", function (e) {
    e.preventDefault ();
    var url = $ (this).attr('href');
    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this Lead !",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        
        swal("Success! Your Lead has been deleted!", {
          icon: "success",
          
        });
        setTimeout(
  function() 
  {
    window.location.replace(url);
  }, 1500);
        
      } else {
        swal("Your Lead is safe!");
      }
    });
  });
  </script>

  <script>
 $ ('.throw_lead').on("click", function (e) {
    e.preventDefault ();
    var url = $ (this).attr('href');
    swal({
      title: "Are you sure?",
      text: "Once thrown, you will not be able to recover this Lead !",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        
        swal("Success! Your Lead has been deleted!", {
          icon: "success",
          
        });
        setTimeout(
  function() 
  {
    window.location.replace(url);
  }, 1500);
        
      } else {
        swal("Your Lead is safe!");
      }
    });
  });
  </script>

  <script>
 $ ('.berhasil').on("click", function () {
    var url = $ (this).attr('href');
    swal("Good job!", "You clicked the button!", "success");
        setTimeout(
  function() 
  {
    window.location.replace(url);
  }, 2000);   
      });
  </script>