<?php
    $seo = getPageSeoByKey('services');
    $title = $seo->meta_title ?? 'Commercial Services — Concrete, Asphalt, Masonry & Snow Melt | Andraos Construction';
    $description = $seo->meta_description ?? 'Commercial concrete, asphalt paving, masonry, snow-melt systems, HOA & property management, and concrete finishes across the Colorado Front Range. Self-performed since 1993.';
?>

<?php $__env->startSection('meta_title', $title); ?>
<?php $__env->startSection('meta_description', $description); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('sections.services.hero', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('sections.services.sercom', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('sections.services.scope', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.body.classList.add('page-services');
    const pathMap = {
        '/commercial-concrete': '#commercial-concrete',
        '/residential-concrete': '#commercial-concrete',
        '/asphalt': '#asphalt',
        '/masonry': '#masonry',
        '/snow-melt': '#snow-melt',
        '/concrete-finishes': '#concrete-finishes'
    };

    const targetHash = window.location.hash || pathMap[window.location.pathname];

    if (targetHash) {
        setTimeout(function() {
            const target = document.querySelector(targetHash);
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }, 150);
    }
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\andraosconstruction\resources\views/pages/services.blade.php ENDPATH**/ ?>