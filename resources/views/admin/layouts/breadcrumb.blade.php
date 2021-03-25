<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">@yield('pageTitle')</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <div class="hidden-xs hidden-sm">
            @yield('actionBar')
        </div>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"></a></li>
            @yield('crumbList')
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->