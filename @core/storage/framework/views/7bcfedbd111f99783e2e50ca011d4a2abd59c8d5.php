<!-- Counter Section -->
<section class="counter-section" 
<?php if(file_exists('assets/uploads/'.get_static_option('home_01_counterup_bg_image'))): ?>
    style="background-image: url(<?php echo e(asset('assets/uploads/'.get_static_option('home_01_counterup_bg_image'))); ?>)"
<?php endif; ?>
>
    <div class="auto-container">
        <!-- Fact Counter -->
        <div class="fact-counter style-three">
            <div class="row clearfix">
                <?php $__currentLoopData = $all_counterup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!--Column-->
                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon <?php echo e($data->icon); ?>"></span>
                        </div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000ms" data-stop="1200"><?php echo e($data->number); ?></span>+
                            <div class="counter-title"><?php echo e($data->title); ?></div>
                        </div>
                    </div>
                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
        </div>
        
    </div>
</section>
<!-- Counter Section --><?php /**PATH /Users/ktmsulaim/Sites/storksolutions/@core/resources/views/frontend/partials/counterup.blade.php ENDPATH**/ ?>