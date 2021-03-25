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

@section('pageTitle', 'Settings')

@section('actionBar')
<a href="#" class="btn btn-outline btn-info pull-right m-l-20 waves-effect waves-light">Update</a>
@endSection

@section('crumbList')
<li class="active">Settings</li>
@endsection

@section('pageContent')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Slide show with owl Carousel</div>
            <div class="panel-wrapper p-b-10 collapse in">
                <div id="owl-demo" class="owl-carousel owl-theme owl-loaded owl-drag">
                    
                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-6092px, 0px, 0px); transition: all 0.25s ease 0s; width: 9138px;"><div class="owl-item" style="width: 1523px;"><div class="item"><img src="../plugins/images/heading-bg/slide2.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 1523px;"><div class="item"><img src="../plugins/images/heading-bg/slide3.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 1523px;"><div class="item"><img src="../plugins/images/heading-bg/slide4.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 1523px;"><div class="item"><img src="../plugins/images/heading-bg/slide6.jpg" alt="Owl Image"></div></div><div class="owl-item active" style="width: 1523px;"><div class="item"><img src="../plugins/images/heading-bg/slide1.jpg" alt="Owl Image"></div></div><div class="owl-item" style="width: 1523px;"><div class="item"><img src="../plugins/images/heading-bg/slide3.jpg" alt="Owl Image"></div></div></div></div><div class="owl-nav disabled"><div class="owl-prev">prev</div><div class="owl-next">next</div></div><div class="owl-dots"><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div>
            </div>
        </div>
    </div>
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