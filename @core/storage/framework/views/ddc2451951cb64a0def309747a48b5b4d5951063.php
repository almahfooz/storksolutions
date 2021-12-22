<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Contact')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Contact')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="contact-page-section">
    <div class="map-section">
        <!--Map Outer-->
        <div class="map-outer">
            <!--Map Canvas-->
            <div class="map-canvas" data-zoom="12" data-lat="<?php echo e(get_static_option('contact_page_map_section_latitude')); ?>" data-lng="<?php echo e(get_static_option('contact_page_map_section_longitude')); ?>" data-type="roadmap" data-hue="#ffc400" data-title="Stork Solutions" data-icon-path="<?php echo e(asset('assets/frontend/finano/images/icons/map-marker.png')); ?>" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
        </div>
    </div>
    <div class="auto-container">
        <div class="inner-container">
            <h2><?php echo e(get_static_option('contact_page_'.get_user_lang().'_form_section_title')); ?></h2>
            <div class="row clearfix">
                
                <!-- Info Column -->
                <div class="info-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="text">
                            <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($message); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                        <ul class="list-style-five">
                            <?php $__currentLoopData = $all_contact_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <div class="single-contact-info">
                                    <div class="icon">
                                        <span class="<?php echo e($data->icon); ?>"></span>
                                    </div>
                                    <div class="content">
                                        <b class="title"><?php echo e($data->title); ?>:</b>
                                        <?php $desc = explode(';',$data->description) ?>
                                        <?php $__currentLoopData = $desc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="details"><?php echo e($item); ?></span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                
                <!-- Form Column -->
                <div class="form-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        
                        <!--Contact Form-->
                        <div class="contact-form">
                            <form method="post" action="<?php echo e(route('frontend.contact.message')); ?>" novalidate="novalidate">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="captcha_token" id="gcaptcha_token">

                                <div class="form-group">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="<?php echo e(__('Enter Your Name')); ?>">
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="<?php echo e(__('Enter Your Email')); ?>">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" id="subject" name="subject" class="form-control" placeholder="<?php echo e(__('Enter Your Subject')); ?>">
                                </div>
                                <div class="form-group textarea">
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="5" placeholder="<?php echo e(__('Enter Your Message')); ?>"></textarea>
                                </div>
                                <button class="theme-btn" type="submit"><?php echo e(__('Send Message')); ?></button>                                 
                                
                            </form>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo e(get_static_option('site_google_captcha_v3_site_key')); ?>"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute("<?php echo e(get_static_option('site_google_captcha_v3_site_key')); ?>", {action: 'homepage'}).then(function(token) {
                document.getElementById('gcaptcha_token').value = token;
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ktmsulaim/Sites/storksolutions/@core/resources/views/frontend/pages/contact-page.blade.php ENDPATH**/ ?>