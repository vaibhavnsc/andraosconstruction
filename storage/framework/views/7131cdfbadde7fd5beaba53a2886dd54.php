<?php
    $seo = getPageSeoByKey('about');

    $title = $seo->meta_title ?? 'About | Andraos Construction | Denver, CO Area';

    $description = $seo->meta_description
        ?? 'Andraos Construction has been serving Denver since 1993. Learn more about our services! Serving the Denver, CO Metro Area.';
?> 

<?php $__env->startSection('meta_title', $title); ?>
<?php $__env->startSection('meta_description', $description); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('sections.about.hero', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('sections.about.about', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('sections.about.team-bios', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- <?php echo $__env->make('sections.home.reviews', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> -->
<?php echo $__env->make('sections.about.why-andros', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('sections.about.talk', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('page-about');
});
</script>
<?php $__env->stopPush(); ?>



 

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\andraosconstruction\resources\views/pages/about.blade.php ENDPATH**/ ?>