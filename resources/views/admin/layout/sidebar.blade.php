<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-right8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"><img src="{{asset('template/back/assets/global_assets/images/placeholders/placeholder.jpg')}}" width="38" height="38" class="rounded-circle" alt=" "></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold">Victoria Baker</div>
                        <div class="font-size-xs opacity-50">
                            <i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
                        </div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item">
                    <a href="{{url('/')}}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                        <i class="icon-home4"></i>
                        <span>
							 الرئيسيه
						<span class="d-block font-weight-normal opacity-50"></span>
						</span>
                    </a>
                </li>


                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">المصروفات</div> <i class="icon-menu" title="Layout options"></i></li>
                <li class="nav-item nav-item-submenu {{ Request::is('dashboard/expenses*') ? 'nav-item-open' : '' }}">
                    <a href="#" class="nav-link  {{ Request::is('dashboard/expenses*') ? 'active' : '' }}"><i class="icon-copy"></i> <span>المصروفات</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts" style="{{ Request::is('dashboard/expenses*') ? 'display: block;' : '' }}" >
                        <li class="nav-item"><a href="{{url('dashboard/expenses')}}" class="nav-link {{ Request::is('dashboard/expenses') ? 'active' : '' }}">انواع المصروفات</a></li>
                        <li class="nav-item"><a href="{{url('dashboard/expenses/record')}}" class="nav-link {{ Request::is('dashboard/expenses/record') ? 'active' : '' }}">حركه المصروفات</a></li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">2 sidebars</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="../seed/sidebar_secondary.html" class="nav-link">Secondary sidebar</a></li>
                                <li class="nav-item"><a href="../seed/sidebar_right.html" class="nav-link">Right sidebar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->

