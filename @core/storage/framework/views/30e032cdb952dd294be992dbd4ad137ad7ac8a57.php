<!-- Main Header-->
<header
class="main-header <?php if($secondary): ?> header-style-five five-alternate <?php endif; ?>">

<?php if($secondary): ?>
    <?php echo $__env->make('frontend.partials.header_top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<!--Header-Upper-->
<div class="header-upper">
    <div class="auto-container">
        <div class="clearfix">

            <div class="pull-left logo-box">
                <div class="logo">
                    <a href="<?php echo e(url('/')); ?>">
                        <?php if(file_exists('assets/uploads/'.get_static_option('site_logo'))): ?>
                            <img src="<?php echo e(asset('assets/uploads/'.get_static_option('site_logo'))); ?>" alt="site logo">
                        <?php endif; ?>
                    </a>
                </div>
            </div>

            <div
                class="nav-outer clearfix">

                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                       <?php echo $__env->make('frontend.partials.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>

                </nav>

            </div>

        </div>
    </div>
</div>
<!--End Header Upper-->

<!--Sticky Header-->
<div class="sticky-header">
    <div
        class="auto-container clearfix">
        <!--Logo-->
        <div class="logo pull-left">
            <a href="<?php echo e(url('/')); ?>">
                <?php if(file_exists('assets/uploads/'.get_static_option('site_logo'))): ?>
                    <img src="<?php echo e(asset('assets/uploads/'.get_static_option('site_logo'))); ?>" alt="site logo">
                <?php endif; ?>
            </a>
        </div>

        <!--Right Col-->
        <div
            class="right-col pull-right">
            <!-- Main Menu -->
            <nav class="main-menu navbar-expand-md">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                    <?php echo $__env->make('frontend.partials.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </nav>
            <!-- Main Menu End-->
        </div>

    </div>
</div>
<!--End Sticky Header-->

</header>
<!--End Main Header --><?php /**PATH /Users/ktmsulaim/Sites/storksolutions/@core/resources/views/frontend/partials/navbar.blade.php ENDPATH**/ ?>