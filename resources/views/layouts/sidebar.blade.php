      <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
					
                    <div id="sidebar-menu">
                        
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Main</li>
                            <li class="">
                                <a href="{{route('admin')}}" class="waves-effect {{ request()->is("admin") || request()->is("admin/*") ? "mm active" : "" }}">
                                    <i class="ti-home"></i> <span> Dashboard </span>
                                </a>
                            </li>
                            

                            <li>
                            <a href="/employees" class="waves-effect {{ request()->is("employees") || request()->is("/employees/*") ? "mm active" : "" }}"><i class="ti-user"></i><span> Employees </span></a>
                              
                            </li>
						
                            <li class="menu-title">Management</li>

                            <li class="">
                                <a href="/schedule" class="waves-effect {{ request()->is("schedule") || request()->is("schedule/*") ? "mm active" : "" }}">
                                    <i class="ti-time"></i> <span> Schedule </span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/check" class="waves-effect {{ request()->is("check") || request()->is("check/*") ? "mm active" : "" }}">
                                    <i class="dripicons-to-do"></i> <span> Attendance Sheet </span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/sheet-report" class="waves-effect {{ request()->is("sheet-report") || request()->is("sheet-report/*") ? "mm active" : "" }}">
                                    <i class="dripicons-to-do"></i> <span> Attendance Report </span>
                                </a>
                            </li>

                            <li class="">
                                <a href="/attendance" class="waves-effect {{ request()->is("attendance") || request()->is("attendance/*") ? "mm active" : "" }}">
                                    <i class="ti-calendar"></i> <span> Attendance Stats </span>
                                </a>
                            </li>
                       
                        </ul>
						
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
