<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
 
  <link rel="shortcut icon" href="img/favicon.png">
  <meta name="_token" content="{{ csrf_token() }}"/>
  <title>Karton radnika</title>

  <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{url('css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{url('css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- full calendar css-->
  <link href="{{url('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
  <link href="{{url('assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
  
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{url('css/owl.carousel.css')}}" type="text/css">
  <link href="{{url('css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{url('css/fullcalendar.css')}}">
  <link href="{{url('css/widgets.css')}}" rel="stylesheet">
  <link href="{{url('css/style.css')}}" rel="stylesheet">
  <link href="{{url('css/style-responsive.css')}}" rel="stylesheet" />
  <link href="{{url('css/xcharts.min.css')}}" rel=" stylesheet">
  <link href="{{url('css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
  <!-- dodala -->
  
 <!--  <script src="{{url('js/jquery-3.2.1.min.js')}}"></script> -->
  <script src="{{url('js/jquery.js')}}"></script>
  <script src="{{url('js/jquery-ui-1.10.4.min.js')}}"></script>
  <script src="{{url('js/jquery-1.8.3.min.js')}}"></script>
  <script type="text/javascript" src="{{url('js/jquery-ui-1.9.2.custom.min.js')}}"></script>
   <script src="{{url('js/fullcalendar.min.js')}}"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{url('assets/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
    <!--script for this page only-->
    <script src="{{url('js/calendar-custom.js')}}"></script>
  
</head> 
  <body>
<section id="container" class="">

    @if (Auth::guard('web')->check())
       @include('pocetna.header')
       @include('pocetna.sidebar') 
       @include('pocetna.mesages') 
       @yield('content')
     @endif   
</section>
  <!-- bootstrap -->
   <script src="{{url('js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
    <script src="{{url('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{url('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
   <!-- charts scripts -->
    <script src="{{url('assets/jquery-knob/js/jquery.knob.js')}}"></script>
    <script src="{{url('js/jquery.sparkline.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{url('js/owl.carousel.js')}}"></script>
    <!-- jQuery full calendar -->
   
    <script src="{{url('js/jquery.rateit.min.js')}}"></script>
    <!-- custom select -->
    <script src="{{url('js/jquery.customSelect.min.js')}}"></script>
    <script src="{{url('assets/chart-master/Chart.js')}}"></script>
    <!--custome script for all page-->
    <script src="{{url('js/scripts.js')}}"></script>
    <!-- custom script for this page-->
    <script src="{{url('js/sparkline-chart.js')}}"></script>
    <script src="{{url('js/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{url('js/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{url('js/xcharts.min.js')}}"></script>
    <script src="{{url('js/jquery.autosize.min.js')}}"></script>
    <script src="{{url('js/jquery.placeholder.min.js')}}"></script>
    <script src="{{url('js/gdp-data.js')}}"></script>
    <script src="{{url('js/morris.min.js')}}"></script>
    <script src="{{url('js/sparklines.js')}}"></script>
    <script src="{{url('js/charts.js')}}"></script>
    <script src="{{url('js/jquery.slimscroll.min.js')}}"></script>

</body>
</html>
