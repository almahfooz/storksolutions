<section class="services-section-ten sortable-masonry">
    <div class="auto-container">
        <div class="row">
            <div class="title-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <h2><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_recent_work_title')); ?></h2>
                    </div>
    
                    <div class="recent-work-nav-area">
                        <ul class="filter-btns">
                            <li class="active" data-filter="*"><?php echo e(__('All work')); ?></li>
                            <?php $__currentLoopData = $all_work_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li data-filter=".<?php echo e(Str::slug($data->name)); ?>"><?php echo e($data->name); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="items-container">
                    <?php $__currentLoopData = $all_work; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="masonry-item col-lg-4 recent-work-item col-md-6 <?php echo e(get_work_category_by_id($data->id,'slug')); ?>">
                        <div class="thumb">
                            <?php $img_url = '';?>
                            <?php if(file_exists('assets/uploads/works/work-grid-'.$data->id.'.'.$data->image)): ?>
                                <img src="<?php echo e(asset('assets/uploads/works/work-grid-'.$data->id.'.'.$data->image)); ?>" alt="<?php echo e($data->title); ?>">
                                <?php $img_url = asset('assets/uploads/works/work-large-'.$data->id.'.'.$data->image);?>
                            <?php endif; ?>
                            <div class="hover">
                                <ul>
                                    <li><a href="<?php echo e($img_url); ?>" class="lightbox-image" data-fancybox="recent-work-gallery" title="<?php echo e($data->title); ?>"
                                        data-fancybox-group="recent-work-gallery"> <i class="flaticon-image"></i> </a></li>
                                    <li><a href="<?php echo e(route('frontend.work.single',['id' => $data->id,'any' => Str::slug($data->title)])); ?>"> <i class="flaticon-link-symbol"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH /Users/ktmsulaim/Sites/storksolutions/@core/resources/views/frontend/partials/recent_projects.blade.php ENDPATH**/ ?>