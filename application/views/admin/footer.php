  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versi</b> 1.1
    </div>
    Hak Cipta &copy; 2018 &nbsp;<a href="<?=base_URL()?>"><strong>SIMJALAK</strong></a>
  </footer>
  
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_URL()?>assets/components/jquery/dist/jquery.min.js"></script> 

<!-- FastClick -->
<script src="cfastclick/lib/fastclick.js"></script>
<!-- PACE -->
<script src="<?=base_URL()?>assets/components/PACE/pace.min.js"></script>
<!-- DataTables -->
<script src="<?=base_URL()?>assets/components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_URL()?>assets/components/datatables.netbs/js/dataTables.bootstrap.min.js"></script>

<!--
bootstrap
datepicker
-->

<script src="<?=base_URL()?>assets/components/bootstrap-datepicker/dist/js/bootstrapdatepicker.min.js"></script>

<!--
Select2
-->

<script src="<?=base_URL()?>assets/components/select2/dist/js/select2.full.min.js"></script>

<!--
InputMask
-->

<script src="<?=base_URL()?>assets/plugins/input-mask/jquery.inputmask.js"></script>

<script src="<?=base_URL()?>assets/plugins/inputmask/jquery.inputmask.date.extensions.js"></script>

<script src="<?=base_URL()?>assets/plugins/inputmask/jquery.inputmask.extensions.js"></script>

<!--
bootstrap
time
picker
-->

<script src="<?=base_URL()?>assets/plugins/timepicker/bootstraptimepicker.min.js"></script>

<!--
iCheck
1.0.1
-->

<script src="<?=base_URL()?>assets/plugins/iCheck/icheck.min.js"></script>

<!--
page
script
-->

<script>$(function()
{

 //Initialize
DataTables
Elements


   $('#example1').DataTable()


   $('#example2').DataTable({


     'paging': true,


     'lengthChange': false,


     'searching': false,


     'ordering': true,


     'info': true,


     'autoWidth': false

   })


   //Initialize
Select2
Elements


   $('.select2').select2()


   //Money
Euro

   $('[data-mask]').inputmask()


   //Date
picker


   $('#datepicker').datepicker({

     autoclose: true,


     format: "yyyy-mm-dd",


     orientation: "auto",


     todayBtn: true,


     todayHighlight: true


   })


    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    // To make Pace works on Ajax calls
    $(document).ajaxStart(function () {
      Pace.restart()
    })
    $('.ajax').click(function () {
      $.ajax({
        url: '#', success: function (result) {
          $('.ajax-content').html('<hr>Ajax Request Completed !')
        }
      })
    })

    //Notifikasi
    $("#alert").fadeTo(3000, 500).slideUp(500, function() {
      $("#alert").alert('close');
    })
  })
</script>

<!-- AdminLTE App -->
<script src="<?=base_URL()?>assets/adminlte/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_URL()?>assets/adminlte/js/demo.js"></script>

</body>
</html> 