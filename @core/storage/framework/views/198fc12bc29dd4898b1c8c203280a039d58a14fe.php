<?php $__env->startSection('site-title'); ?>
    <?php echo e(get_static_option('blog_page_' . get_user_lang() . '_title')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-title'); ?>
    <?php echo e(get_static_option('blog_page_' . get_user_lang() . '_title')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8 content-side">
                    <div class="row">
                        <?php $__currentLoopData = $all_blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="news-block-three col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms"
                                    data-wow-duration="1500ms"
                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                    <div class="image">
                                        <?php if(file_exists('assets/uploads/blog/blog-grid-' . $data->id . '.' . $data->image)): ?>
                                            <img src="<?php echo e(asset('assets/uploads/blog/blog-grid-' . $data->id . '.' . $data->image)); ?>"
                                                alt="<?php echo e($data->title); ?>">
                                            <a href="<?php echo e(asset('assets/uploads/blog/blog-grid-' . $data->id . '.' . $data->image)); ?>"
                                                class="lightbox-image overlay-box"><span
                                                    class="flaticon-play-button"></span></a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-meta">
                                            <li><span class="fa fa-calendar"></span><?php echo e($data->created_at->format('F d, Y')); ?>

                                            </li>
                                            <li><span class="fa fa-user"></span><?php echo e($data->user->username); ?>

                                            </li>
                                        </ul>
                                        <h4><a
                                                href="<?php echo e(route('frontend.blog.single', ['id' => $data->id, 'any' => Str::slug($data->title)])); ?>"><?php echo e($data->title); ?></a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="col-lg-12">
                        <nav class="pagination-wrapper" aria-label="Page navigation ">
                            <?php echo e($all_blogs->links()); ?>

                        </nav>
                    </div>
                </div>
                <div class="col-lg-4 sidebar-side">
                    <?php echo $__env->make('frontend.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ktmsulaim/Sites/storksolutions/@core/resources/views/frontend/pages/blog.blade.php ENDPATH**/ ?>