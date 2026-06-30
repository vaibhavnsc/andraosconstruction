<?php
    $seo = getPageSeoByKey('home');
    $title = $seo->meta_title ?? 'Concrete Flatwork Contractors Denver | Andraos Construction';
    $description = $seo->meta_description ?? 'Looking for concrete flatwork contractors in Denver, CO? Andraos Construction offers expert concrete and asphalt services. Call or text us to learn more!';
?>

<?php $__env->startSection('meta_title', $title); ?>
<?php $__env->startSection('meta_description', $description); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('sections.home.hero', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('sections.home.trusted-by', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- <?php echo $__env->make('sections.home.trust', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> -->
    <?php echo $__env->make('sections.home.about', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('sections.home.services', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
 
    <?php echo $__env->make('sections.home.gallery', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('sections.home.service', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('sections.home.reviews', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('sections.home.get-touch', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\andraosconstruction\resources\views/pages/home.blade.php ENDPATH**/ ?>