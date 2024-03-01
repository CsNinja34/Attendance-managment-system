<?php $__env->startSection('css'); ?>
<!-- Table css -->
<link href="<?php echo e(URL::asset('plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css')); ?>" rel="stylesheet" type="text/css"
    media="screen">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<div class="col-sm-6">
    <h4 class="page-title text-left">Late Time</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Late Time</a></li>


    </ol>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('button'); ?>
<a href="/attendance" class="btn btn-primary btn-sm btn-flat"><i class="mdi mdi-plus mr-2"></i>Attendance Table</a>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('includes.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="table-rep-plugin">
                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        
                            <thead>
                                <tr>
                                    <th data-priority="1">Date</th>
                                    <th data-priority="2">Employee ID</th>
                                    <th data-priority="3">Name</th>
                                    <th data-priority="4">Late Time Duration</th>
                                    <th data-priority="6">Time In</th>
                                    <th data-priority="7">Time Out</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $latetimes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latetime): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    <td><?php echo e($latetime->latetime_date); ?></td>
                                    <td><?php echo e($latetime->emp_id); ?></td>
                                    <td><?php echo e($latetime->employee->name); ?></td>
                                    <td><?php echo e($latetime->duration); ?></td>
                                    <td><?php echo e($latetime->employee->schedules->first()->time_in); ?> </td>
                                    <td><?php echo e($latetime->employee->schedules->first()->time_out); ?></td>
                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<!-- Responsive-table-->
<script src="<?php echo e(URL::asset('plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    $(function () {
        $('.table-responsive').responsiveTable({
            addDisplayAllBtn: 'btn btn-secondary'
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\AttendanceMS-Laravel\resources\views/admin/latetime.blade.php ENDPATH**/ ?>