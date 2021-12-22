<?php $__env->startSection('page-title'); ?>
    <?php echo e(get_static_option('quote_page_' . get_user_lang() . '_page_title')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="inner-container">
                <h2><?php echo e(get_static_option('quote_page_' . get_user_lang() . '_form_title')); ?></h2>

                <div class="row">
                    <div class="info-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="text">
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
                    </div>
                    <div class="form-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="contact-form">
                                <form action="<?php echo e(route('frontend.quote.message')); ?>" method="post"
                                    enctype="multipart/form-data" class="contact-form quote-form">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="captcha_token" id="gcaptcha_token">

                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="<?php echo e(__('Enter Your Name')); ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="<?php echo e(__('Enter Your Email')); ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="subject" name="subject" class="form-control"
                                            placeholder="<?php echo e(__('Enter Your Subject')); ?>">
                                    </div>
                                    <div class="form-group textarea">
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="5"
                                            placeholder="<?php echo e(__('Enter Your Message')); ?>"></textarea>
                                    </div>
                                    <div class="btn-wrapper text-center">
                                        <button class="theme-btn" type="submit"><?php echo e(__('Send Quote')); ?></button>
                                    </div>
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
    <script
        src="https://www.google.com/recaptcha/api.js?render=<?php echo e(get_static_option('site_google_captcha_v3_site_key')); ?>">
    </script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute("<?php echo e(get_static_option('site_google_captcha_v3_site_key')); ?>", {
                action: 'homepage'
            }).then(function(token) {
                document.getElementById('gcaptcha_token').value = token;
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ktmsulaim/Sites/storksolutions/@core/resources/views/frontend/pages/quote-page.blade.php ENDPATH**/ ?>