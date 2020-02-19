<div class="left-side-menu " style="background-color:#f9f9f9" >
<div class="slimscroll-menu" >

    <!--- Sidemenu -->
    <div id="sidebar-menu" >

        <ul class="metismenu" id="side-menu">

            <li class="menu-title" >Navigation</li>

            <li >
                <a href="javascript: void(0);">
                    <i class="fe-airplay"></i>
                    <span class="badge badge-success badge-pill float-right">4</span>
                    <span> Dashboards </span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li>
                        <a href="index.html">Dashboard 1</a>
                    </li>
                    <li>
                        <a href="dashboard-2.html">Dashboard 2</a>
                    </li>
                    <li>
                        <a href="dashboard-3.html">Dashboard 3</a>
                    </li>
                    <li>
                        <a href="dashboard-4.html">Dashboard 4</a>
                    </li>
                </ul>
            </li>






            <li >
                <a href="javascript: void(0);">
                    <i class="fe-sidebar"></i>
                    <span class="badge badge-pink float-right">New</span>
                    <span> Layouts </span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li>
                        <a href="layouts-sidebar-user.html">Sidebar with User</a>
                    </li>
                    <li>
                        <a href="layouts-sidebar-sm.html">Small Sidebar</a>
                    </li>
                    <li>
                        <a href="layouts-dark-sidebar.html">Dark Sidebar</a>
                    </li>
                    <li>
                        <a href="layouts-light-topbar.html">Light Topbar</a>
                    </li>
                    <li>
                        <a href="layouts-preloader.html">Preloader</a>
                    </li>
                    <li>
                        <a href="layouts-sidebar-collapsed.html">Sidebar Collapsed</a>
                    </li>
                    <li>
                        <a href="layouts-boxed.html">Boxed</a>
                    </li>
                </ul>
            </li>



            <li >
                <a href="javascript: void(0); class="nav-link {{ ! Route::is('proveedorIndex')?:'active'}}"">
                    <i class="fe-map"></i>
                    <span> Maps </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li >
                        <a href="{{route('proveedorIndex')}}" class="nav-link {{ ! Route::is('proveedorIndex')?:'active'}} ">Proveedor</a>
                    </li>
                    <li >
                    <a href="{{route('clienteIndex')}}" class="nav-link {{ ! Route::is('clienteIndex')?:'active'}} ">Clientes</a>
                    </li>
                    <li >
                    <a href="{{route('contactosProv')}}" class="nav-link {{ ! Route::is('contactosProv')?:'active'}} ">Contactos Prov</a>
                    </li>
                </ul>
            </li>

            <li >
                <a href="javascript: void(0);">
                    <i class="fe-folder-plus"></i>
                    <span> Multi Level </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="nav-second-level nav" aria-expanded="false">
                    <li >
                        <a href="javascript: void(0);">Level 1.1</a>
                    </li>
                    <li >
                        <a href="javascript: void(0);" aria-expanded="false">Level 1.2
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-third-level nav" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);">Level 2.1</a>
                            </li>
                            <li>
                                <a href="javascript: void(0);">Level 2.2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>
</div>
</div>
