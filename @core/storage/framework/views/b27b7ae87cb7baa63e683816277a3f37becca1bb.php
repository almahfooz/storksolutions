<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('404')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <section class="error-section">
		<div class="auto-container">
			<div class="inner-section">
				<div class="left-error">404</div>
				<div class="right-error">404</div>
				<div class="title">opps! We are sorry</div>
				<h1><?php echo e(__('It looks like nothing was found at this location.')); ?></h1>
				<a href="<?php echo e(url('/')); ?>" class="theme-btn btn-style-sixteen"><?php echo e(__('Back To Home')); ?> <span class="fa fa-angle-right"></span></a>
			</div>
		</div>
	</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ktmsulaim/Sites/storksolutions/@core/resources/views/frontend/pages/404.blade.php ENDPATH**/ ?>