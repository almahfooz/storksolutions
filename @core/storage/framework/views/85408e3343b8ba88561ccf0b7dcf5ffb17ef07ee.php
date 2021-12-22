
<?php echo $__env->make('frontend.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('frontend.partials.navbar', ['secondary' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--Page Title-->
<section class="page-title"
<?php if(file_exists('assets/uploads/'.get_static_option('site_breadcrumb_bg'))): ?>
         style="background-image: url(<?php echo e(asset('assets/uploads/'.get_static_option('site_breadcrumb_bg'))); ?>);"
         <?php endif; ?>
>
    <div class="auto-container">
        <div class="content">
            <h1><?php echo $__env->yieldContent('page-title'); ?></h1>
            <ul class="page-breadcrumb">
                <li><a href="<?php echo e(url('/')); ?>"><span><?php echo e(__('Home')); ?></span></a></li>
                <li><?php echo $__env->yieldContent('page-title'); ?></li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->
<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('frontend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ktmsulaim/Sites/storksolutions/@core/resources/views/frontend/frontend-page-master.blade.php ENDPATH**/ ?>