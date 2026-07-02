<?php $__env->startSection('content'); ?>


<section id="not-found">
    <div class="container">
        <div class="not-found">
            <img src="/assets/images/error.png" alt="Page Error Found">
            <div class="error-home">
                <h1>Page Not Found</h1>
                <p>The page you are looking for doesn`t exist or an other error occurred <a href="/">Go back </a>or head over to <a href="/">Andraos Construction</a> to choose a new direction</p>
            </div>
        </div>
</section>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.body.classList.add('page-404');
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\andraosconstruction\resources\views/pages/404.blade.php ENDPATH**/ ?>