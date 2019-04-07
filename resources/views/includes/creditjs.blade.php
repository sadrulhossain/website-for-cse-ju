
<!-- Select2 -->
<script src="{{asset('public/admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script>
        $(function(){
                //Initialize Select2 Elements
                $('.select2').select2();
        });
</script>
<!-- CK Editor -->
<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script src="{{asset('public/admin/ckeditor/ckeditor.js')}}"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('body')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
 
    //Date picker
    $('#date').datepicker({
        autoclose: true
    })
    $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('description')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
            
</script>
