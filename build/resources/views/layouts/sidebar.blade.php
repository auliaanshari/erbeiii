<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">settings</i>Profile Settings</a></li>
                            <!-- <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li> -->
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="{{ url('/home') }}">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Data Master</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/company') }}">
                                    <span>Company</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/plant') }}">
                                    <span>Plant</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/plantsection') }}">
                                    <span>Section</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/plantsubsection') }}">
                                    <span>Subsection</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/equipment') }}">
                                    <span>Equipment</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Report</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/report/rbi') }}">
                                <span>Risk Based Inspection</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="pages/tables/jquery-datatable.html">Jquery Datatables</a>
                            </li>
                            <li>
                                <a href="pages/tables/editable-table.html">Editable Tables</a>
                            </li>
                        </ul>
                    </li> -->
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">multiline_chart</i>
                            <span>Analysis</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                <span>RBI Analysis</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                    <a href="{{ url('/ast') }}">
                                        <span>Atmosferic Storage Tank</span>
                                        </a>
                                    </li>
                                    <li>
                                    <a href="{{ url('/he') }}">
                                        <span>Heat Exchanger</span>
                                        </a>
                                    </li>
                                    <li>
                                    <a href="{{ url('/piping') }}">
                                        <span>Piping</span>
                                        </a>
                                    </li>
                                    <li>
                                    <a href="{{ url('/prd') }}">
                                        <span>Pressure Relief Device</span>
                                        </a>
                                    </li>
                                    <li>
                                    <a href="{{ url('/pv') }}">
                                        <span>Pressure Vessel</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">people</i>
                            <span>User Management</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/user') }}">
                                <span>User</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="header">LABELS</li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            @include('layouts/footer')
            <!-- #Footer -->
        </aside>