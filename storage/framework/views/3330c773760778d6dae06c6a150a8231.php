<?php
    $seo = getPageSeoByKey('contact');
    $title = $seo->meta_title ?? 'Contact Andraos Construction — Request a Commercial Estimate | Denver, CO';
    $description = $seo->meta_description ?? 'Request a commercial concrete, asphalt or masonry estimate from Andraos Construction. Serving the Colorado Front Range since 1993. Call (303) 479-3181.';
?>

<?php $__env->startSection('meta_title', $title); ?>
<?php $__env->startSection('meta_description', $description); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('sections.contact.banner', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('sections.contact.contact', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('page-contact');
});
</script>
<?php $__env->stopPush(); ?>





<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\andraosconstruction\resources\views/pages/contact.blade.php ENDPATH**/ ?>