<?php $__currentLoopData = $menuItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($menu->get("title")); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Users\vohoa\Desktop\Code\php-core\Modules\Dashboard\Views/layouts/menu.blade.php ENDPATH**/ ?>