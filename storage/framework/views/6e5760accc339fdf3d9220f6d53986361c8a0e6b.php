<?php if(session()->has('flash_message')): ?>
    

<script>
    swal({
title: "<?php echo e(session('flash_message.title')); ?>",
text: "<?php echo e(session('flash_message.message')); ?>",
icon: "<?php echo e(session('flash_message.level')); ?>",
button: true,
timer: 2500,
});
  </script>

<?php endif; ?>

<?php if(session()->has('flash_message_overlay')): ?>
    

<script>
    swal({
title: "<?php echo e(session('flash_message_overlay.title')); ?>",
text: "<?php echo e(session('flash_message_overlay.message')); ?>",
icon: "<?php echo e(session('flash_message_overlay.level')); ?>",
button: 'Okay',
});
  </script>

<?php endif; ?><?php /**PATH /Users/endrit/Desktop/AttendanceMS-Laravel copy/resources/views/includes/flash.blade.php ENDPATH**/ ?>