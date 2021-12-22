<aside class="sidebar default-sidebar">
    
    <div class="sidebar-widget search-box">
        <form action="<?php echo e(route('frontend.blog.search')); ?>" method="get" class="search-form">
            <div class="form-group">
                <input type="search" class="search-field" name="search" placeholder="<?php echo e(__('Search')); ?>">
                <button type="submit" class="submit-btn"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
    <div class="sidebar-widget search-box">
        <div class="sidebar-title-two">
            <h4 class="widget-title"><?php echo e(get_static_option('blog_page_' . get_user_lang() . '_category_widget_title')); ?>

            </h4>
        </div>
        <ul class="blog-cat-two">
            <?php $__currentLoopData = $all_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a
                        href="<?php echo e(route('frontend.blog.category', ['id' => $data->id, 'any' => Str::slug($data->name, '-')])); ?>"><?php echo e(ucfirst($data->name)); ?></a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <div class="sidebar-widget popular-posts">
        <!-- widget categories -->
        <div class="sidebar-title-two">
            <h4 class="widget-title"><?php echo e(get_static_option('blog_page_' . get_user_lang() . '_recent_post_widget_title')); ?>

            </h4>
        </div>
        <?php $__currentLoopData = $all_recent_blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="post">
                <figure class="post-thumb">
                    <?php if(file_exists('assets/uploads/blog/blog-grid-' . $data->id . '.' . $data->image)): ?>
                        <img src="<?php echo e(asset('assets/uploads/blog/blog-grid-' . $data->id . '.' . $data->image)); ?>"
                            alt="<?php echo e($data->title); ?>">
                    <?php endif; ?>
                    <a href="<?php echo e(route('frontend.blog.single', ['id' => $data->id, 'any' => Str::slug($data->title, '-')])); ?>"
                        class="overlay-box">
                        <span class="icon fa fa-link"></span>
                    </a>
                </figure>
                <div class="text"><a
                        href="<?php echo e(route('frontend.blog.single', ['id' => $data->id, 'any' => Str::slug($data->title, '-')])); ?>"><?php echo e($data->title); ?></a>
                </div>
                <div class="post-info"><?php echo e($data->created_at->format('F d, Y')); ?></div>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</aside><?php /**PATH /Users/ktmsulaim/Sites/storksolutions/@core/resources/views/frontend/partials/sidebar.blade.php ENDPATH**/ ?>