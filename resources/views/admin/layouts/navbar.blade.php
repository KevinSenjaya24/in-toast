<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <div class="top-left-part">
            <!-- Logo -->
            <a class="logo" href="{{ url('/admin/dashboard') }}">
                <!-- Logo icon image, you can use font-icon also -->
                <b><i class="mdi mdi-view-dashboard fa-fw" style="font-size:24px;"></i></b>
                <!-- Logo text image you can use text also -->
                <span class="hidden-xs">
                    <!--This is dark logo text-->In <strong>Toast</strong>
                </span> 
            </a>
        </div>
        <!-- /Logo -->
        <!-- Search input and Toggle icon -->
        <ul class="nav navbar-top-links navbar-left">
            <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><b class="hidden-xs">{{ Auth::user()->nama }}</b><span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li><a href="#" class="logout-button"><i class="mdi mdi-logout fa-fw"></i> Logout</a></li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>
<!-- End Top Navigation -->
@include("admin.layouts.leftsidebar")