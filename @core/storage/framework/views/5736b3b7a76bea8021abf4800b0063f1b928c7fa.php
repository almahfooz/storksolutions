<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('About')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('About')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- About Section Four -->
	<section class="about-section-four">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				
				<h2><?php echo e(get_static_option('about_page_'.get_user_lang().'_about_section_title')); ?></h2>
			</div>
			
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
                            <div class="image-1">
                                <?php if(file_exists('assets/uploads/'.get_static_option('about_page_'.get_user_lang().'_about_section_left_image'))): ?>
                                <img  src="<?php echo e(asset('assets/uploads/'.get_static_option('about_page_'.get_user_lang().'_about_section_left_image'))); ?>" alt="">
                            <?php endif; ?>
                        </div>
						<div class="image-2">
                            <?php if(file_exists('assets/uploads/'.get_static_option('about_page_'.get_user_lang().'_about_section_left_image'))): ?>
                                <img  src="<?php echo e(asset('assets/uploads/'.get_static_option('about_page_'.get_user_lang().'_about_section_left_image'))); ?>" alt="">
                            <?php endif; ?>
                        </div>
					</div>
				</div>
				
				<!-- Skills Column -->
				<div class="skills-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						

						<div class="text">
							<p><?php echo e(get_static_option('about_page_'.get_user_lang().'_about_section_description')); ?></p>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End About Section Four -->

    <?php echo $__env->make('frontend.partials.counterup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <!-- Team Page Section -->
	<section class="team-page-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2><?php echo e(get_static_option('about_page_'.get_user_lang().'_team_section_title')); ?></h2>
			</div>
			
			<div class="row clearfix">

                <?php $__currentLoopData = $all_team_members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<!--Team Block-->
				<div class="team-block-two style-two col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="javascript:void(0)">
                                <?php if(file_exists('assets/uploads/team-member/team-member-grid-'.$data->id.'.'.$data->image)): ?>
                                    <img src="<?php echo e(asset('assets/uploads/team-member/team-member-grid-'.$data->id.'.'.$data->image)); ?>" alt="<?php echo e(__($data->name)); ?>">
                                <?php endif; ?>
                            </a>
							<ul class="social-box">
								<?php if(!empty($data->icon_one) && !empty($data->icon_one_url)): ?>
                                    <li><a href="<?php echo e($data->icon_one_url); ?>"><i class="<?php echo e($data->icon_one); ?>"></i></a></li>
                                <?php endif; ?>
                                <?php if(!empty($data->icon_two) && !empty($data->icon_two_url)): ?>
                                    <li><a href="<?php echo e($data->icon_two_url); ?>"><i class="<?php echo e($data->icon_two); ?>"></i></a></li>
                                <?php endif; ?>
                                <?php if(!empty($data->icon_three) && !empty($data->icon_three_url)): ?>
                                    <li><a href="<?php echo e($data->icon_three_url); ?>"><i class="<?php echo e($data->icon_three); ?>"></i></a></li>
                                <?php endif; ?>
							</ul>
						</div>
						<div class="lower-content">
							<h5><a href="javascript:void(0)"><?php echo e($data->name); ?></a></h5>
							<div class="designation"><?php echo e($data->designation); ?></div>
						</div>
					</div>
				</div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
			</div>
			
		</div>
	</section>
	<!-- End Team Page Section -->

 <?php echo $__env->make("frontend.partials.brand_logos", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ktmsulaim/Sites/storksolutions/@core/resources/views/frontend/pages/about.blade.php ENDPATH**/ ?>