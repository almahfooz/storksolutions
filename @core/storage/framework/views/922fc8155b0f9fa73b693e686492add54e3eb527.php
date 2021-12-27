<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('frontend.partials.navbar', ['secondary' => false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--Main Slider-->
    <section class="main-slider"
        style="background-image:url(<?php echo e(asset('assets/frontend/finano/images/background/1.png')); ?>)">
        <div class="main-slider-carousel owl-carousel owl-theme">

            <?php $__currentLoopData = $all_header_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="slide slide-one"
                    style="background-image:url(<?php echo e(asset('assets/frontend/finano/images/main-slider/1.png')); ?>)">
                    <div class="auto-container">
                        <div class="content">
                            <h1>
                                <?php
                                    $title = str_replace('{color}', '<span class="base-color">', $data->title);
                                    $title = str_replace('{/color}', '</span>', $title);
                                ?>
                                <?php echo $title; ?>

                            </h1>
                            <div class="text"><?php echo e($data->description); ?>

                            </div>
                            <?php if(!empty($data->btn_01_status)): ?>
                                <div class="link-box">
                                    <a href="<?php echo e($data->btn_01_url); ?>" class="theme-btn btn-style-one">
                                        <?php echo e($data->btn_01_text); ?>

                                        <span class="icon flaticon-link"></span>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <!--End Slide Info Boxed-->

    </section>
    <!--End Main Slider-->


    <?php if(!empty(get_static_option('home_page_key_feature_section_status'))): ?>
     <!-- Services Section -->
     <section class="services-section">
        <div class="auto-container">
            <div class="clearfix">

                <?php $__currentLoopData = $all_key_features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- Services Block -->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon <?php echo e($data->icon); ?>"></span>
                        </div>
                        <h5>
                            <a href="services-single.html"><?php echo e($data->title); ?></a>
                        </h5>
                        <div class="text"><?php echo e($data->description); ?>

                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </div>
    </section>
    <!-- End Services Section -->
    <?php endif; ?>

    <?php if(!empty(get_static_option('home_page_build_dream_section_status'))): ?>
    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title">about us</div>
                            <h2><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_build_dream_title')); ?>

                            </h2>
                        </div>

                        <div class="text">
                            <p><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_build_dream_description')); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!--Video Box-->
                        <div class="video-box">
                            <figure class="image">
                                <?php if(file_exists('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_build_dream_right_image'))): ?>
                                    <img src="<?php echo e(asset('assets/uploads/'.get_static_option('home_page_01_'.get_user_lang().'_build_dream_right_image'))); ?>" alt="">
                                <?php endif; ?>
                            </figure>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Section -->
<?php endif; ?>

<?php if($all_gallery_items && count($all_gallery_items)): ?>    
    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="outer-container">
            <div
                class="gallery-carousel owl-carousel owl-theme">

                <?php $__currentLoopData = $all_gallery_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!--Gallery Block-->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <?php if(file_exists('assets/uploads/gallery-images/gallery-image-'. $item->id . '.' . $item->image)): ?>
                                <img src="<?php echo e(asset('assets/uploads/gallery-images/gallery-image-'. $item->id . '.' . $item->image)); ?>" alt="<?php echo e($item->title); ?>">
                            <?php endif; ?>
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <h3>
                                        <a href="javascript:void(0)"><?php echo e($item->title); ?></a>
                                    </h3>
                                    <div class="text"><?php echo e($item->description); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!-- End Gallery Section -->
<?php endif; ?>

<?php if(!empty(get_static_option('home_page_service_section_status'))): ?>
<!-- Services Section Ten -->
<section class="services-section-ten">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">Our dedicated services</div>
            <h2><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_service_area_title')); ?></h2>
        </div>
        <div class="row clearfix">

            <?php $__currentLoopData = $all_service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Services Block Fourteen -->
            <div class="services-block-fourteen col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="box-one"></div>
                    <div class="box-two"></div>
                    <div class="icon-box">
                        <span class="icon <?php echo e($data->icon); ?>"></span>
                    </div>
                    <h6><a href="<?php echo e(route('frontend.services.single',['id' => $data->id,'any' => Str::slug($data->title)])); ?>"><?php echo e($data->title); ?></a></h6>
                    <div class="text"><?php echo e($data->excerpt); ?></div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
            
        </div>
    </div>
</section>
<!-- End Services Section Ten -->
<?php endif; ?>

<?php if(!empty(get_static_option('home_page_counterup_section_status'))): ?>
    <?php echo $__env->make('frontend.partials.counterup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>


<?php if(!empty(get_static_option('home_page_recent_work_section_status'))): ?>
    <?php echo $__env->make('frontend.partials.recent_projects', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(!empty(get_static_option('home_page_latest_news_section_status'))): ?>
        <!-- News Section -->
        <section class="news-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <div class="title">The blog</div>
                    <h2><?php echo e(get_static_option('home_page_01_'.get_user_lang().'_latest_news_title')); ?></h2>
                </div>
    
                <div class="row">
                    <?php $__currentLoopData = $all_blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- News Block -->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <?php if(file_exists('assets/uploads/blog/blog-grid-'.$data->id.'.'.$data->image)): ?>
                                    <img src="<?php echo e(asset('assets/uploads/blog/blog-grid-'.$data->id.'.'.$data->image)); ?>" alt="<?php echo e($data->title); ?>">
                                <?php endif; ?>
                                <div class="overlay-box">
                                    <a href="<?php echo e(asset('assets/uploads/blog/blog-grid-'.$data->id.'.'.$data->image)); ?>" data-fancybox="news" data-caption="<?php echo e($data->title); ?>"
                                        class="plus flaticon-plus-symbol"></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <div class="post-date"><?php echo e($data->created_at->format('F d, Y')); ?></div>
                                <h5>
                                    <a href="<?php echo e(route('frontend.blog.single',['id' => $data->id,'any' => Str::slug($data->title)])); ?>"><?php echo e($data->title); ?></a>
                                </h5>
                                <div class="text"><?php echo e($data->excerpt); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    
                </div>
    
                <!-- Button Box -->
                <div class="btn-box text-center">
                    <a href="<?php echo e(route('frontend.blog')); ?>" class="theme-btn btn-style-one">View more
                        <span class="icon flaticon-eye"></span>
                    </a>
                </div>
    
            </div>
        </section>
        <!-- End News Section -->
<?php endif; ?>

<?php if(!empty(get_static_option('home_page_brand_logo_section_status'))): ?>
    <?php echo $__env->make('frontend.partials.brand_logos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>



    <!--Map Info Section-->
    <section class="map-info-section">
        <div class="outer-container">
            <div class="clearfix">
                <!--Left Column-->
                <div class="left-column">
                    <!--Map Outer-->
                    <div class="map-outer">
                        <!--Map Canvas-->
                        <div class="map-canvas" data-zoom="12" data-lat="<?php echo e(get_static_option('contact_page_map_section_latitude')); ?>" data-lng="<?php echo e(get_static_option('contact_page_map_section_longitude')); ?>"
                            data-type="roadmap" data-hue="#ffc400" data-title="<?php echo e(get_static_option('site_title')); ?>"
                            data-icon-path="<?php echo e(asset('assets/frontend/finano/images/icons/logo.png')); ?>"
                            data-content="22 Lingu Crescent, Wuse 2, Abuja<br><a href='mailto:storkhumancapital@gmail.com'>storkhumancapital@gmail.com</a>">
                        </div>
                    </div>
                </div>
                <!--Right Column-->
                <div class="right-column" style="background-image:url(<?php echo e(asset('assets/frontend/finano/images/resource/image-1.jpeg')); ?>)">
                    <div class="content">
                        <h2>Request for
                            <span>quote</span>
                        </h2>
                        <div class="text">The argument in favor of using filler text goes something like this: If
                            you use real content in the design process.</div>

                        <!-- Quote Form -->
                        <div class="quote-form">

                            <!--Contact Form-->
                            <form method="post" action="<?php echo e(route('frontend.quote.message')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="row clearfix">

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="name" placeholder="Your name" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="email" name="email" placeholder="Yourr email address" required>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="message" id="messagge" placeholder="Your message:"></textarea>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="text" placeholder="The subject" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-one">Submit request
                                            <span class="icon flaticon-share-option"></span>
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Map Info Section-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ktmsulaim/Sites/storksolutions/@core/resources/views/frontend/frontend-home.blade.php ENDPATH**/ ?>