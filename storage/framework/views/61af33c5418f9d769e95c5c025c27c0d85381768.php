<?php $__env->startSection('css'); ?>
    <!-- Table css -->
    <link href="<?php echo e(URL::asset('plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css')); ?>" rel="stylesheet"
        type="text/css" media="screen">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="card">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive table-hover table-bordered table-sm">
                <thead class="thead-dark">
                        <tr>

                            <th>Employee</th>
                            <th>Position</th>
                            <!-- <th>ID</th> -->
                            <?php
                                $today = today();
                                $dates = [];
                                
                                for ($i = 1; $i < $today->daysInMonth + 1; ++$i) {
                                    $dates[] = \Carbon\Carbon::createFromDate($today->year, $today->month, $i)->format('Y-m-d');
                                }
                                
                            ?>
                            <?php $__currentLoopData = $dates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <th>
                                    <?php echo e($date); ?>

                                </th>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tr>
                    </thead>

                    <tbody>


                        <form action="<?php echo e(route('check_store')); ?>" method="post">
                           
                            <button type="submit" class="btn btn-success" style="display: flex; margin:10px">Submit Attendance</button>
                            <?php echo csrf_field(); ?>
                            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <input type="hidden" name="emp_id" value="<?php echo e($employee->id); ?>">

                                <tr>
                                    <td><?php echo e($employee->name); ?></td>
                                    <td><?php echo e($employee->position); ?></td>
                                    <!-- <td><?php echo e($employee->id); ?></td> -->






                                    <?php for($i = 1; $i < $today->daysInMonth + 1; ++$i): ?>


                                        <?php
                                            
                                            $date_picker = \Carbon\Carbon::createFromDate($today->year, $today->month, $i)->format('Y-m-d');
                                            
                                            $check_attd = \App\Models\Attendance::query()
                                                ->where('emp_id', $employee->id)
                                                ->where('attendance_date', $date_picker)
                                                ->first();
                                            
                                            $check_leave = \App\Models\Leave::query()
                                                ->where('emp_id', $employee->id)
                                                ->where('leave_date', $date_picker)
                                                ->first();
                                            
                                        ?>
                                        <td>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="check_box"
                                                    name="attd[<?php echo e($date_picker); ?>][<?php echo e($employee->id); ?>]" type="checkbox"
                                                    <?php if(isset($check_attd)): ?>  checked <?php endif; ?> id="inlineCheckbox1" value="1">

                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="check_box"
                                                    name="leave[<?php echo e($date_picker); ?>][<?php echo e($employee->id); ?>]]" type="checkbox"
                                                    <?php if(isset($check_leave)): ?>  checked <?php endif; ?> id="inlineCheckbox2" value="1">

                                            </div>

                                        </td>

                                    <?php endfor; ?>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </form>


                    </tbody>


                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\codeastro\Laravel\01 PUBLISHED CONTENT\AttendanceMS-Laravel\resources\views/admin/check.blade.php ENDPATH**/ ?>