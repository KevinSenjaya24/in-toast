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
<!-- contact info -->
<div class="col-sm-8">
    <div class="white-box">
        <h3 class="box-title m-b-0">Contact Info</h3>
        <p class="text-muted m-b-30 font-13"> Put your contact info here </p>
        <form class="form-horizontal">
            <div class="form-group">
                <label class="col-md-12">Phone</span></label>
                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
                        <input type="text" class="form-control" placeholder="+62xxxxxx" aria-describedby="basic-addon1">
                    </div>
                </div> 
            </div>
            <div class="form-group">
                <label class="col-md-12">Email</span></label>
                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="email address" aria-describedby="basic-addon1">
                    </div>
                </div> 
            </div>
            <div class="form-group">
                <label class="col-md-12">Address</span></label>
                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-globe"></i></span>
                        <textarea rows="4" class="form-control" placeholder="Address" aria-describedby="basic-addon1"></textarea>
                    </div>
                </div> 
            </div>
            <div class="form-group">
                <label class="col-md-12">Maps Coordinate</span></label>
                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-map-marker"></i></span>
                        <input type="text" class="form-control" placeholder="latitude,longtitude" aria-describedby="basic-addon1">
                    </div>
                    <span class="help-block"><small>latitude coordinate is between -90 and 90, longitude coordinate is between -180 and 180.</small></span>
                </div> 
            </div>
        </form>
    </div>
</div>
<!-- social media -->
<div class="col-sm-4">
    <div class="white-box">
        <h3 class="box-title m-b-0">Social media link</h3>
        <p class="text-muted m-b-30 font-13"> Put your social media here </p>
        <form class="form-horizontal">
            <div class="form-group">
                <label class="col-md-12">Facebook</span></label>
                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-facebook"></i></span>
                        <input type="text" class="form-control" placeholder="https://www.facebook.com/..." aria-describedby="basic-addon1">
                    </div>
                </div> 
            </div>
            <div class="form-group">
                <label class="col-md-12">Twitter</span></label>
                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-twitter"></i></span>
                        <input type="text" class="form-control" placeholder="https://www.twitter.com/..." aria-describedby="basic-addon1">
                    </div>
                </div> 
            </div>
            <div class="form-group">
                <label class="col-md-12">linkedin</span></label>
                <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-linkedin"></i></span>
                        <input type="text" class="form-control" placeholder="https://www.linkedin.com/..." aria-describedby="basic-addon1">
                    </div>
                </div> 
            </div>
        </form>
    </div>
</div>
<!-- quote -->
<div class="col-sm-8">
    <div class="white-box">
        <h3 class="box-title m-b-0">Quote</h3>
        <p class="text-muted m-b-30 font-13"> Put your company quote here </p>
        <form class="form-horizontal">
            <div class="form-group">
                <div class="col-md-12">
                        <textarea rows="4" class="form-control" placeholder="Quote" aria-describedby="basic-addon1"></textarea>
                </div> 
            </div>
        </form>
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