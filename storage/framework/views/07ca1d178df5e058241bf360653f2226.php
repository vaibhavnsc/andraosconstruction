<div class="col-lg-4 col-md-6">
    <figure class="proj m-0" 
            data-fancybox="gallery-<?php echo e(\Illuminate\Support\Str::slug($title)); ?>" 
            data-src="<?php echo e($cover); ?>" 
            data-caption="<?php echo e($title); ?> — <?php echo e($subtitle); ?>">
        <img height="auto" width="auto" src="<?php echo e($cover); ?>" alt="<?php echo e($title); ?> — <?php echo e($subtitle); ?>">
        <figcaption class="ov">
            <span class="cat"><?php echo e($category); ?></span>
            <span class="nm"><?php echo e($title); ?></span>
            <span class="small text-white-50"><?php echo e($subtitle); ?></span>
            
            <?php if(isset($images) && count($images) > 0): ?>
                <span class="proj-badge">📷 <?php echo e(count($images) + 1); ?> Photos</span>
            <?php endif; ?>
            
            <span class="proj-view-link">View Gallery &rarr;</span>
        </figcaption>
    </figure>
    
    <?php if(isset($images) && count($images) > 0): ?>
        <div style="display:none;">
            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($image); ?>" 
                   data-fancybox="gallery-<?php echo e(\Illuminate\Support\Str::slug($title)); ?>" 
                   data-caption="<?php echo e($title); ?> — <?php echo e($subtitle); ?>"></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH J:\andraosconstruction\andraosconstruction\resources\views/partials/gallery-project.blade.php ENDPATH**/ ?>