<!DOCTYPE html>
<html>
<head>
    <?php echo $__env->make('partials.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>
<body>
<?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<main>
    <?php echo $__env->yieldContent('content'); ?>
</main>

 <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

 <?php echo $__env->yieldPushContent('scripts'); ?>

</body>
</html> <?php /**PATH D:\andraosconstruction\resources\views/layouts/app.blade.php ENDPATH**/ ?>