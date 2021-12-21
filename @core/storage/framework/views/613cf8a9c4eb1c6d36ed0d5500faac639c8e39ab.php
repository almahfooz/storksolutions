<ul class="navigation clearfix">
    <?php if(!empty($primary_menu->content)): ?>
        <?php
            $cc = 0;
            $parent_item_count = 0;
            $menu_content = json_decode($primary_menu->content);
        ?>
        <?php $__currentLoopData = $menu_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $has_child = get_child_menu_count($menu_content, $data->id);

                if ($cc > 0 && $cc == $parent_item_count) {
                    print '</ul>';
                    $cc = 0;
                }
                if (!empty($data->parent_id) && $data->depth > 0) {
                    if ($cc == 0) {
                        print '<ul>';
                        $parent_item_count = get_child_menu_count($menu_content, $data->parent_id);
                    } else {
                        print '</li>';
                    }
                } else {
                    print '</li>';
                }
            ?>
            <li class="<?php if(request()->path() == substr($data->menuUrl, 6)): ?> current <?php elseif($has_child): ?> dropdown <?php endif; ?>">
                <?php $link = str_replace('[url]',url('/'),$data->menuUrl) ?>
                <a href="<?php echo e($link); ?>"><?php echo e(__($data->menuTitle)); ?></a>
                <?php
                    if (!empty($data->parent_id) && $data->depth > 0) {
                        $cc++;
                    }
                ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <li class="<?php if(request()->path() == '/'): ?> current <?php endif; ?>">
            <a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a>
        </li>
    <?php endif; ?>
    <?php if(!empty(get_static_option('navbar_button'))): ?>
        <li class="navbar-btn-wrapper">
            <a class="boxed-btn"
                href="<?php echo e(route('frontend.request.quote')); ?>"><?php echo e(get_static_option('navbar_' . get_user_lang() . '_button_text')); ?></a>
        </li>
    <?php endif; ?>
</ul>
<?php /**PATH /Users/ktmsulaim/Sites/storksolutions/@core/resources/views/frontend/partials/navigation.blade.php ENDPATH**/ ?>