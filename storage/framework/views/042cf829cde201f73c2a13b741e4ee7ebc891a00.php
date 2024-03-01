<?php echo $__env->make('layouts.welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
    <div class="flex-center position-ref full-height">
        <?php if(Route::has('login')): ?>
        <div class="top-right links color-white">
            <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(url('/admin')); ?>">Admin</a>
            <?php else: ?>
            <a class="btn btn-secondary btn-md" style="color: white" href="<?php echo e(route('login')); ?>">Go To Login Panel</a>

            <?php if(Route::has('register')): ?>
            <a href="<?php echo e(route('register')); ?>">Register</a>
            <?php endif; ?>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <div class="content">
            <div class="title m-b-md">
                <h1 class="text-center">Welcome to Our Attendance System</h5>
                
            </div>

            
        </div>
    </div>

<?php /**PATH /Users/endrit/Desktop/AttendanceMS-Laravel copy/resources/views/welcome.blade.php ENDPATH**/ ?>