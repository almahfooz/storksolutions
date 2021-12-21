<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('frontend.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
<!-- Counter Section -->
<?php endif; ?>


<?php if(!empty(get_static_option('home_page_recent_work_section_status'))): ?>
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
</section>
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
    <!--Sponsors Section-->
    <section class="sponsors-section">
        <div class="auto-container">
    
            <div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <?php $__currentLoopData = $all_brand_logo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single-brand-item">
                            </div>
                            <li>
                                <div class="image-box">
                                    <a href="javascript:void(0)">
                                        <?php if(file_exists('assets/uploads/brands/brand-image-'.$data->id.'.'.$data->image)): ?>
                                            <img src="<?php echo e(asset('assets/uploads/brands/brand-image-'.$data->id.'.'.$data->image)); ?>" alt="<?php echo e($data->title); ?>">
                                        <?php endif; ?>
                                    </a>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
    
        </div>
    </section>
    <!--End Sponsors Section-->
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
                        <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631"
                            data-type="roadmap" data-hue="#ffc400" data-title="Envato"
                            data-icon-path="<?php echo e(asset('assets/frontend/finano/images/icons/map-marker.png')); ?>"
                            data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                        </div>
                    </div>
                </div>
                <!--Right Column-->
                <div class="right-column" style="background-image:url(images/resource/image-1.jpg)">
                    <div class="content">
                        <h2>Request for
                            <span>quote</span>
                        </h2>
                        <div class="text">The argument in favor of using filler text goes something like this: If
                            you use real content in the design process.</div>

                        <!-- Quote Form -->
                        <div class="quote-form">

                            <!--Contact Form-->
                            <form method="post" action="contact.html">
                                <div class="row clearfix">

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="username" placeholder="How to assist you:*" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="phone" placeholder="Phone number:*" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="text" placeholder="Your name:*" required>
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