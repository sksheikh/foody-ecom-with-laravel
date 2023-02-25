<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>

    <div class="pcoded-inner-navbar main-menu">

        <ul class="pcoded-item pcoded-left-item py-4">
            <li class="active">
                <a href="{{route('dashboard')}}">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>


            <!-- Layouts Start  -->
            <div class="pcoded-navigatio-lavel text-capitalize" data-i18n="nav.category.forms">Layouts</div>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Home</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('sliders.index')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Slider</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    {{-- <li class=" ">
                        <a href="{{route('sliders.index')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Manage Slider</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li> --}}

                </ul>
            </li>
             <!-- Layouts End  -->


             <!-- Settings Start  -->
             <div class="pcoded-navigatio-lavel text-capitalize" data-i18n="nav.category.forms">Settings</div>
             <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Header</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('top-header')}}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Header Top</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="breadcrumb.html">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Header Bottom</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
             <!-- Settings End  -->


        </ul>


    </div>
</nav>
