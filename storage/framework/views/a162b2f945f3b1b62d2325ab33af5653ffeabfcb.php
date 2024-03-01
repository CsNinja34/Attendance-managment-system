<!-- Edit -->
<div class="modal fade" id="edit<?php echo e($schedule->slug); ?>">
    <div class=" modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"><b>Edit Schedule</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body text-left">
                <form class="form-horizontal" method="POST" action="<?php echo e(route('schedule.update', $schedule->slug)); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label for="name" class="col-sm-6 control-label">Name <i>{without any space}</i></label>


                        <div class="bootstrap-timepicker">
                            <input type="text" class="form-control timepicker" id="name" name="slug"
                                value="<?php echo e($schedule->slug); ?>">
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="edit_time_in" class="col-sm-3 control-label">Time In</label>


                        <div class="bootstrap-timepicker">
                            <input type="time" class="form-control timepicker" id="edit_time_in" name="time_in"
                                value="<?php echo e($schedule->time_in); ?>">
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="edit_time_out" class="col-sm-3 control-label">Time out</label>


                        <div class="bootstrap-timepicker">
                            <input type="time" class="form-control timepicker" id="edit_time_out" name="time_out"
                                value="<?php echo e($schedule->time_out); ?>">
                        </div>

                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-check-square-o"></i>
                    Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete<?php echo e($schedule->slug); ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header " style="align-items: center">
               
                <h4 class="modal-title "><span class="employee_id">Delete Schedule</span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="<?php echo e(route('schedule.destroy', $schedule->slug)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('DELETE')); ?>

                    <div class="text-center">
                        <h6>Are you sure you want to delete:</h6>
                        <h2 class="bold del_employee_name"><?php echo e($schedule->slug); ?></h2>
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
</div><?php /**PATH D:\XAMPP\htdocs\AttendanceMS-Laravel\resources\views/includes/edit_delete_schedule.blade.php ENDPATH**/ ?>