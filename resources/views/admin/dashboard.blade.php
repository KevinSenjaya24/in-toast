@extends('admin.layouts.wrapper')

@section('seoTag')
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('pluginLink')
<!-- toast CSS -->
<link href="{{ asset('admin-assets/plugins/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
<!-- morris CSS -->
<link href="{{ asset('admin-assets/plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
<!-- chartist CSS -->
<link href="{{ asset('admin-assets/plugins/bower_components/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
<link href="{{ asset('admin-assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
<!-- Calendar CSS -->
<link href="{{ asset('admin-assets/plugins/bower_components/calendar/dist/fullcalendar.css') }}" rel="stylesheet" />
<!-- animation CSS -->
<link href="{{ asset('admin-assets/css/animate.css') }}" rel="stylesheet">
@endsection

@section('pageTitle', 'Dashboard')

@section('crumbList')
<li class="active">Dashboard</li>
@endsection

@section('pageContent')
<div class="row">
@include('admin.widgets.outline')
</div>


@endsection

@section('pluginScript')
<!--Wave Effects -->
<script src="{{ asset('admin-assets/js/waves.js') }}"></script>
<!--Counter js -->
<script src="{{ asset('admin-assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
<!--Morris JavaScript -->
<script src="{{ asset('admin-assets/plugins/bower_components/raphael/raphael-min.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/bower_components/morrisjs/morris.js') }}"></script>
<!-- chartist chart -->
<script src="{{ asset('admin-assets/plugins/bower_components/chartist-js/dist/chartist.min.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
<!-- Calendar JavaScript -->
<script src="{{ asset('admin-assets/plugins/bower_components/moment/moment.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/bower_components/calendar/dist/fullcalendar.min.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/bower_components/calendar/dist/cal-init.js') }}"></script>
@endsection

@section('customScript')
<script type="text/javascript">
    (function() {
        [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
            new CBPFWTabs(el);
        });
    })();
</script>
@endsection