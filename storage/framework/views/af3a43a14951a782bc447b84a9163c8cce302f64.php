<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
        
            <div class="modal-header">
            <h5 class="modal-title"><b>Add New Employee</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>

            
            <div class="modal-body">

                <div class="card-body text-left">

                    <form method="POST" action="<?php echo e(route('employees.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="name">Name <i>{without any space}</i></label>
                            <input type="text" class="form-control" placeholder="Enter a Employee name [hyphen accepted]" id="name" name="name"
                                required />
                        </div>
                        <div class="form-group">
                            <label for="position">Position <i>{without any space}</i></label>
                            <input type="text" class="form-control" placeholder="Enter Employee's Position [hyphen accepted]" id="position" name="position"
                                required />
                        </div>

                        
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>


                            <input type="email" class="form-control" id="email" name="email">

                        </div>
                        <div class="form-group">
                            <label for="schedule" class="col-sm-3 control-label">Schedule</label>


                            <select class="form-control" id="schedule" name="schedule" required>
                                <option value="" selected>- Select -</option>
                                <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($schedule->slug); ?>"><?php echo e($schedule->slug); ?> -> from <?php echo e($schedule->time_in); ?>

                                    to <?php echo e($schedule->time_out); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>

                        </div>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-success waves-effect waves-light">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-danger waves-effect m-l-5" data-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>


        </div>

    </div>
</div>
</div><?php /**PATH F:\codeastro\Laravel\01 PUBLISHED CONTENT\AttendanceMS-Laravel\resources\views/includes/add_employee.blade.php ENDPATH**/ ?>