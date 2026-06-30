<?php
    $seo = getPageSeoByKey('gallery');

    $title = $seo->meta_title ?? 'Gallery | Andraos Construction | Denver, CO Area';

    $description = $seo->meta_description
        ?? 'View our recent projects like driveways & patios. Learn more! Serving the Denver, CO Metro Area.';
?>

<?php $__env->startSection('meta_title', $title); ?>
<?php $__env->startSection('meta_description', $description); ?>


<?php $__env->startSection('content'); ?>
<?php echo $__env->make('sections.gallery.hero', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('sections.gallery.gallery', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('sections.gallery.references', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('page-gallery');
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\andraosconstruction\resources\views/pages/gallery.blade.php ENDPATH**/ ?>