<html>

<head>

<meta charset="utf-8">
<!--libreria para manipular los acordeones -->
  {!!Html::style('css/normalize.css')!!}
  {!!Html::style('css/demo.css')!!}
  {!!Html::style('css/filtergrid.css')!!}
  {!!Html::style('css/jquery-ui.css')!!}
  {!!Html::style('css/demo.css')!!}
  {!!Html::script('js/jquery-1.11.1.min.js')!!}
  {!!Html::script('js/accordion.js')!!}
  {!!Html::style('css/jquery.dataTables.css')!!}
  <link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/materialadmin_print.css?1419847669"  media="print"/>
  <link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/bootstrap.css?1422792965" />
  <!-- END META -->
    <!-- Popup -->
    {!! Html::style('css/popup.css')!!}
    <!--select-->
    {!!Html::style('assets/theme-default/libs/toastr/toastr.css')!!}
    {!!Html::style('css/select2.min.css')!!}
    {!!Html::style('css/style.css')!!}
    {!!Html::script('js/select2.full.min.js')!!}
    {!!Html::script('js/sistemalaravel.js')!!}

    {!!Html::script('js/scripts.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    <!--tab-inner-->
    {!!Html::script('js/cbpFWTabs.js')!!}
    {!!Html::script('js/maps.js')!!}
    <!--Datatables-->
    {!!Html::style('assets/css/theme-default/libs/DataTables/jquery.dataTables.css?1423553989')!!}
    {!!Html::style('assets/css/theme-default/material-design-iconic-font.min.css?1421434286')!!}
    {!!Html::style('assets/css/theme-default/libs/DataTables/extensions/dataTables.colVis.css?1423553990')!!}
    {!!Html::style('assets/css/theme-default/libs/DataTables/extensions/dataTables.tableTools.css?1423553990')!!}

    <script type="text/javascript">
      $('select').select2();
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $(".js-example-basic-single").select2();
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
        $(".js-example-tags").select2({
        tags: true
        })
      });
    </script>

    <!-- BEGIN STYLESHEETS -->
    {!!Html::style('http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900')!!}
    {!!Html::style('assets/css/theme-default/bootstrap.css?1422792965')!!}
    {!!Html::style('assets/css/theme-default/materialadmin.css?1425466319')!!}
    {!!Html::style('assets/css/theme-default/font-awesome.min.css?1422529194')!!}
    {!!Html::style('assets/css/theme-default/material-design-iconic-font.min.css?1421434286')!!}
    {!!Html::style('assets/css/theme-default/libs/rickshaw/rickshaw.css?1422792967')!!}
    {!!Html::style('assets/css/theme-default/libs/morris/morris.core.css?1420463396')!!}
    <!-- END STYLESHEETS -->

</head>

<body>
  @yield('content')

    <script src="../../assets/js/libs/jquery-knob/jquery.knob.min.js"></script><!-- BEGIN JAVASCRIPT -->
    
    {!!Html::script('assets/js/libs/jquery/jquery-migrate-1.2.1.min.js')!!}
    
    {!!Html::script('assets/js/libs/spin.js/spin.min.js')!!}
    {!!Html::script('assets/js/libs/autosize/jquery.autosize.min.js')!!}
    {!!Html::script('assets/js/libs/moment/moment.min.js')!!}
    {!!Html::script('assets/js/libs/flot/jquery.flot.min.js')!!}
    {!!Html::script('assets/js/libs/flot/jquery.flot.time.min.js')!!}
    {!!Html::script('assets/js/libs/flot/jquery.flot.resize.min.js')!!}
    {!!Html::script('assets/js/libs/flot/jquery.flot.orderBars.js')!!}
    {!!Html::script('assets/js/libs/flot/jquery.flot.pie.js')!!}
    {!!Html::script('assets/js/libs/flot/curvedLines.js')!!}
    {!!Html::script('assets/js/libs/jquery-knob/jquery.knob.min.js')!!}
    {!!Html::script('assets/js/libs/sparkline/jquery.sparkline.min.js')!!}
    {!!Html::script('assets/js/libs/nanoscroller/jquery.nanoscroller.min.js')!!}
    {!!Html::script('assets/js/libs/d3/d3.min.js')!!}
    {!!Html::script('assets/js/libs/d3/d3.v3.js')!!}
    {!!Html::script('assets/js/libs/rickshaw/rickshaw.min.js')!!}
    {!!Html::script('assets/js/libs/toastr/toastr.js')!!}
    {!!Html::script('assets/js/core/demo/DemoUIMessages.js')!!}
    {!!Html::script('assets/js/core/source/App.js')!!}
    {!!Html::script('assets/js/core/source/AppNavigation.js')!!}
    {!!Html::script('assets/js/core/source/AppOffcanvas.js')!!}
    {!!Html::script('assets/js/core/source/AppCard.js')!!}
    {!!Html::script('assets/js/core/source/AppForm.js')!!}
    {!!Html::script('assets/js/core/source/AppNavSearch.js')!!}
    {!!Html::script('assets/js/core/source/AppVendor.js')!!}
    {!!Html::script('assets/js/core/demo/Demo.js')!!}
    {!!Html::script('assets/js/core/demo/DemoDashboard.js')!!}
    {!!Html::script('assets/js/libs/jquery-validation/dist/jquery.validate.min.js')!!}
    {!!Html::script('assets/js/libs/jquery-validation/dist/additional-methods.min.js')!!}
    
    
    @section('scripts')
    @show
    <!-- END JAVASCRIPT -->

</body>

</html>