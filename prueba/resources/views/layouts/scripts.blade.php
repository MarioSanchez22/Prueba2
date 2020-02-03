   <!-- Vendor js -->
   <script src="{{asset('assets/js/vendor.min.js')}}"></script>

   <!-- Plugins js-->
   <script src="{{asset('assets/libs/flatpickr/flatpickr.min.js')}}"></script>
   <script src="{{asset('assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>
   <script src="{{asset('assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
   <script src="{{asset('assets/libs/flot-charts/jquery.flot.js')}}"></script>
   <script src="{{asset('assets/libs/flot-charts/jquery.flot.time.js')}}"></script>
   <script src="{{asset('assets/libs/flot-charts/jquery.flot.tooltip.min.js')}}"></script>
   <script src="{{asset('assets/libs/flot-charts/jquery.flot.selection.js')}}"></script>
   <script src="{{asset('assets/libs/flot-charts/jquery.flot.crosshair.js')}}"></script>
   <script src="{{asset('assets/libs/jquery-nice-select/jquery.nice-select.min.js')}}"></script>
   <script src="{{asset('assets/libs/multiselect/jquery.multi-select.js')}}"></script>
    <script src="{{asset('assets/libs/switchery/switchery.min.js')}}"></script>




   <script src="{{asset('assets/libs/select2/select2.min.js')}}"></script>
   <script src="{{asset('assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
   <!-- Dashboar 1 init js-->
   <script src="{{asset('assets/js/pages/dashboard-1.init.js')}}"></script>
   <script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>
   <!-- App js-->
   <script src="{{asset('assets/js/app.min.js')}}"></script>

    <!-- Bootstrap Tables js -->
    <script src="{{asset('assets/libs/bootstrap-table/bootstrap-table.min.js')}}"></script>

    <!-- Init js -->
    <script src="{{asset('assets/js/pages/bootstrap-tables.init.js')}}"></script>
    <script>
        $(function () {
          $("#example1").DataTable();
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
          });
        });
      </script>
