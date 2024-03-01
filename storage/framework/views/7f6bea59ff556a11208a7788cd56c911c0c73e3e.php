<!-- Edit -->
<div class="modal fade" id="edit<?php echo e($employee->name); ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"><b>Edit Employee Details</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body text-left">
                <form class="form-horizontal" method="POST" action="<?php echo e(route('employees.update', $employee->name)); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Name</label>


                        <input type="text" class="form-control" id="name" name="name" value="<?php echo e($employee->name); ?>"
                            required>

                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Position</label>


                        <input type="text" class="form-control" id="position" name="position" value="<?php echo e($employee->position); ?>"
                            required>

                    </div>
                 
                  
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email</label>


                        <input type="email" class="form-control" id="email" name="email"
                            value="<?php echo e($employee->email); ?>" >

                    </div>
                    <div class="form-group">
                        <label for="schedule" class="col-sm-3 control-label">Schedule</label>


                        <select class="form-control" id="schedule" name="schedule" required>
                            <option value="" selected>- Select -</option>
                            <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($schedule->slug); ?>"><?php echo e($schedule->slug); ?> -> from
                                    <?php echo e($schedule->time_in); ?> to <?php echo e($schedule->time_out); ?> </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>

                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i>
                    Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete<?php echo e($employee->name); ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header " style="align-items: center">
               
              <h4 class="modal-title "><span class="employee_id">Delete Employee</span></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="<?php echo e(route('employees.destroy', $employee->name)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('DELETE')); ?>

                    <div class="text-center">
                        <h6>Are you sure you want to delete:</h6>
                        <h2 class="bold del_employee_name"><?php echo e($employee->name); ?></h2>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\XAMPP\htdocs\AttendanceMS-Laravel\resources\views/includes/edit_delete_employee.blade.php ENDPATH**/ ?>