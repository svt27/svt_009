<?php $__currentLoopData = flash()->notifications(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($notification); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/shezz/Desktop/Code/Project/Shreya/SB/resources/views/vendor/flash/notifications.blade.php ENDPATH**/ ?>