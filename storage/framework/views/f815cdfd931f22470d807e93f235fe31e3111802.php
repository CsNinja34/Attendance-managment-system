<?php $__env->startSection('css'); ?>
<!--Chartist Chart CSS -->
<link rel="stylesheet" href="<?php echo e(URL::asset('plugins/chartist/css/chartist.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="col-sm-6 text-left" >
     <h4 class="page-title">Dashboard</h4>
     <ol class="breadcrumb">
         <li class="breadcrumb-item active">Welcome to Simple Attendance Management System</li>
     </ol>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
                   <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <span class="ti-id-badge" style="font-size: 30px"></span>
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Total <br> Employees</h5> 
                                        </div>
									
                                        <h1 class="font-500 float-right"><?php echo e($data[0]); ?> </h1>
                                        <span class="ti-user float-left" style="font-size: 71px"></span>
                                  
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <i class=" ti-check-box " style="font-size: 30px"></i>
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">On Time <br> Today</h5>
                                            
                                             
                                        </div>
									
                                        <h1 class="font-500 float-right"><?php echo e($data[1]); ?> <i class=" text-success ml-2"></i></h1>
                                            <span class="peity-donut float-left" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72"><?php echo e($data[1]); ?>/<?php echo e(count($data)); ?></span>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <i class="ti-alert" style="font-size: 30px"></i>
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Late <br> Today</h5>
                                            
                                             
                                        </div>
								
                                        <h1 class="font-500 float-right"><?php echo e($data[2]); ?><i class=" text-success ml-2"></i></h1>
                                            <span class="peity-donut float-left" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72"><?php echo e($data[2]); ?>/<?php echo e(count($data)); ?></span>
                                  
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <i class="ti-alarm-clock" style="font-size: 30px"></i>
                                            </div>
                                            <h6  class="font-16 text-uppercase mt-0 text-white-50" >On Time <br> Percentage</h6>
                                            
                                                       
                                        </div>
                                        <h2 class="font-500 float-right"><?php echo e($data[3]); ?>%<i class="text-danger ml-2"></i></h2>
                                        <span class="peity-donut float-left" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72"><?php echo e($data[3]); ?>/<?php echo e(count($data)); ?></span>
                             
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
						
                        <!-- new row -->
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <span class="ti-panel" style="font-size: 30px"></span>
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Availabe <br> Schedules</h5> 
                                        </div>
                                        <h1 class="font-500 float-right"><?php echo e($data[4]); ?> </h1>
                                        <span class="ti-time float-left" style="font-size: 71px"></span>
                             
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- new row end -->
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                              
                                </div>
                                <!-- end card -->
                            </div>

                            <div class="col-xl-3">
                                <div class="card">
                                 
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                        
                        <!-- end row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<!--Chartist Chart-->
<script src="<?php echo e(URL::asset('plugins/chartist/js/chartist.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('plugins/chartist/js/chartist-plugin-tooltip.min.js')); ?>"></script>
<!-- peity JS -->
<script src="<?php echo e(URL::asset('plugins/peity-chart/jquery.peity.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/pages/dashboard.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/endrit/Desktop/AttendanceMS-Laravel copy/resources/views/admin/index.blade.php ENDPATH**/ ?>