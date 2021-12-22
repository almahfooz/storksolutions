<!--Header Top-->
<div class="header-top">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="top-left">
                <ul class="contact-list clearfix">
                    <?php $__currentLoopData = $all_support_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><i class="<?php echo e($data->icon); ?>"></i> <?php echo e($data->details); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div class="top-right">

                <!--Language-->
                <div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span
                            class="flag-icon"><img src="<?php echo e(asset('assets/frontend/finano/images/icons/flag-icon.png')); ?>" alt="" /></span><?php echo e(session()->get('lang')); ?></a>
                    <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
                        <?php $__currentLoopData = $all_language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li <?php if(session()->get('lang') == $lang->slug): ?> selected <?php endif; ?> value="<?php echo e($lang->slug); ?>">
                                <a href="javascript:void(0)"><?php echo e($lang->name); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->
<?php /**PATH /Users/ktmsulaim/Sites/storksolutions/@core/resources/views/frontend/partials/header_top.blade.php ENDPATH**/ ?>