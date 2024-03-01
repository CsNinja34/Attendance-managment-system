<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Simple Attendance Management System</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="assets/images/">
    <link href="<?php echo e(URL::asset('assets/css/attendanceFront.css')); ?>" rel="stylesheet" type="text/css" />
    
    <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="pb-0" style="background:#2a3142;">
  
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('layouts.footer-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(URL::asset('assets/js/attendanceFront.js')); ?>"></script>
   
</body>

</html>
<?php /**PATH F:\codeastro\Laravel\01 PUBLISHED CONTENT\AttendanceMS-Laravel\resources\views/layouts/welcome.blade.php ENDPATH**/ ?>