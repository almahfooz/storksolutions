<?php $img_url = '';?>
<?php if(file_exists('assets/uploads/works/work-large-'.$work_item->id.'.'.$work_item->image)): ?>
    <?php $img_url = asset('assets/uploads/works/work-large-'.$work_item->id.'.'.$work_item->image);?>
<?php endif; ?>
<?php $__env->startSection('og-meta'); ?>
    <meta property="og:url"  content="<?php echo e(route('frontend.work.single',['id' => $work_item->id,'any' => Str::slug($work_item->title)])); ?>" />
    <meta property="og:type"  content="article" />
    <meta property="og:title"  content="<?php echo e($work_item->title); ?>" />
    <meta property="og:image" content="<?php echo e($img_url); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e($work_item->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Work Single')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-single">
                        <div class="inner-box">
                            <div class="image">
                                <?php $img_url = '';?>
                                <?php if(file_exists('assets/uploads/works/work-large-'.$work_item->id.'.'.$work_item->image)): ?>
                                    <img  src="<?php echo e(asset('assets/uploads/works/work-large-'.$work_item->id.'.'.$work_item->image)); ?>" alt="<?php echo e($work_item->title); ?>">
                                    <?php $img_url = asset('assets/uploads/works/work-large-'.$work_item->id.'.'.$work_item->image);?>
                                <?php endif; ?>
                            </div>
                            <div class="lower-content">
                                <h4><?php echo e($work_item->title); ?></h4>
                                <div class="text">
                                    <?php echo $work_item->description; ?>

                                </div>
                            </div>
                        </div>
                        <div class="post-share-options">
							<div class="post-share-inner clearfix">
								<div class="pull-left post-tags"></div>
								<ul class="pull-right social-links clearfix">
                                    <?php echo single_post_share(route('frontend.work.single',['id' => $work_item->id,'any' => Str::slug($work_item->title)]),$work_item->title,$img_url); ?>

								</ul>
							</div>
						</div>
                    </div>
                </div>
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <div class="sidebar-widget sidebar-blog-category">
                        <ul class="blog-cat-two">
                            <li><a><?php echo e(__('Start Date:')); ?> <span><?php echo e($work_item->start_date); ?> </span></a></li>
                            <li><a><?php echo e(__('End Date:')); ?> <span> <?php echo e($work_item->end_date); ?></span></a></li>
                            <li><a><?php echo e(__('Location:')); ?> <span> <?php echo e($work_item->location); ?></span></a></li>
                            <li><a><?php echo e(__('Clients:')); ?> <span> <?php echo e($work_item->clients); ?></span></a></li>
                            <li><a><?php echo e(__('Category:')); ?> <span> <?php echo e(get_work_category_by_id($work_item->id,'string')); ?></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ktmsulaim/Sites/storksolutions/@core/resources/views/frontend/pages/work-single.blade.php ENDPATH**/ ?>