<?php $__env->startSection('content'); ?>

    <div class="card">

        <div class="card-header">

            <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.finger_device.title_singular')); ?>


        </div>

        <div class="card-body">

            <form method="POST" action="<?php echo e(route("finger_device.store")); ?>">

                <?php echo csrf_field(); ?>

                <div class="form-group">

                    <label class="required" for="title"><?php echo e(trans('cruds.finger_device.fields.name')); ?></label>

                    <input class="form-control <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>" type="text"

                           name="name"

                           id="title" value="<?php echo e(old('name', '')); ?>" required>

                    <?php if($errors->has('name')): ?>

                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>

                    <?php endif; ?>

                    <span class="help-block"><?php echo e(trans('cruds.finger_device.fields.name_helper')); ?></span>

                </div>

                <div class="form-group">

                    <label class="required" for="ip"><?php echo e(trans('cruds.finger_device.fields.ip')); ?></label>

                    <input class="form-control <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>" type="text"

                           name="ip"

                           id="ip" value="<?php echo e(old('ip', '')); ?>" required>

                    <?php if($errors->has('ip')): ?>

                        <span class="text-danger"><?php echo e($errors->first('ip')); ?></span>

                    <?php endif; ?>

                    <span class="help-block"><?php echo e(trans('cruds.finger_device.fields.ip_helper')); ?></span>

                </div>

                <div class="form-group">

                    <button class="btn btn-danger" type="submit">

                        <?php echo e(trans('global.save')); ?>


                    </button>

                </div>

            </form>

        </div>

    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\AttendanceMS-Laravel\resources\views/admin/fingerDevices/create.blade.php ENDPATH**/ ?>