      <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Main</li>
                            <li class="">
                                <a href="<?php echo e(route('admin')); ?>" class="waves-effect <?php echo e(request()->is("admin") || request()->is("admin/*") ? "mm active" : ""); ?>">
                                    <i class="ti-home"></i> <span> Dashboard </span>
                                </a>
                            </li>
                            

                            <li>
                            <a href="/employees" class="waves-effect <?php echo e(request()->is("employees") || request()->is("/employees/*") ? "mm active" : ""); ?>"><i class="ti-user"></i><span> Employees </span></a>
                                <!-- <ul class="submenu">
                                    <li>
                                        <i class="dripicons-view-apps"></i><span>Employees List</span></a>
                                    </li>
                                   
                                </ul> -->
                            </li>

                            <li class="menu-title">Management</li>

                            <li class="">
                                <a href="/schedule" class="waves-effect <?php echo e(request()->is("schedule") || request()->is("schedule/*") ? "mm active" : ""); ?>">
                                    <i class="ti-time"></i> <span> Schedule </span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/check" class="waves-effect <?php echo e(request()->is("check") || request()->is("check/*") ? "mm active" : ""); ?>">
                                    <i class="dripicons-to-do"></i> <span> Attendance Sheet </span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/sheet-report" class="waves-effect <?php echo e(request()->is("sheet-report") || request()->is("sheet-report/*") ? "mm active" : ""); ?>">
                                    <i class="dripicons-to-do"></i> <span> Sheet Report </span>
                                </a>
                            </li>

                            <li class="">
                                <a href="/attendance" class="waves-effect <?php echo e(request()->is("attendance") || request()->is("attendance/*") ? "mm active" : ""); ?>">
                                    <i class="ti-calendar"></i> <span> Attendance Logs </span>
                                </a>
                            </li>
                            <!-- <li class="">
                                <a href="/latetime" class="waves-effect <?php echo e(request()->is("latetime") || request()->is("latetime/*") ? "mm active" : ""); ?>">
                                    <i class="dripicons-warning"></i><span> Late Time </span>
                                </a>
                            </li> -->
                            <!-- <li class="">
                                <a href="/leave" class="waves-effect <?php echo e(request()->is("leave") || request()->is("leave/*") ? "mm active" : ""); ?>">
                                    <i class="dripicons-backspace"></i> <span> Leave </span>
                                </a>
                            </li> -->
                            <!-- <li class="">
                                <a href="/overtime" class="waves-effect <?php echo e(request()->is("overtime") || request()->is("overtime/*") ? "mm active" : ""); ?>">
                                    <i class="dripicons-alarm"></i> <span> Over Time </span>
                                </a>
                            </li> -->
                            <li class="menu-title">Tools</li>
                            <li class="">
                                <a href="<?php echo e(route("finger_device.index")); ?>" class="waves-effect <?php echo e(request()->is("finger_device") || request()->is("finger_device/*") ? "mm active" : ""); ?>">
                                    <i class="fas fa-fingerprint"></i> <span> Biometric Device </span>
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
<?php /**PATH D:\XAMPP\htdocs\AttendanceMS-Laravel\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>