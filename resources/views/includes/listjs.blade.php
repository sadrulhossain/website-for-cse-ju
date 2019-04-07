<!-- DataTables -->
<script src="{{asset('public/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
$(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
        })
})
</script>

<!-- Select2 -->
<script src="{{asset('public/admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script>
        $(function(){
                //Initialize Select2 Elements
                $('.select2').select2();
        });
</script>
<script src="{{asset('public/admin/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });


</script>
<!--Confirmation before deletion-->
<script type="text/javascript">
function delete_form(id){
        if (confirm('Are you sure, you want delete this?')) {
                event.preventDefault();
                document.getElementById(id).submit();
        }
        else{
                event.preventDefault();
        }
}
</script>
