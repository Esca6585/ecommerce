<?php if($paginator->hasPages()): ?>
<div class="pagination p1">
    <ul class="ul">
        
        <?php if($paginator->onFirstPage()): ?>
        <a class="admin-page-link is-passive">
            <li>
                <i class="flaticon2-left-arrow"></i>
            </li>
        </a>
        <?php else: ?>
        <a href="<?php echo e($paginator->previousPageUrl()); ?>" class="admin-page-link">
            <li>
                <i class="flaticon2-left-arrow"></i>
            </li>
        </a>
        <?php endif; ?>

        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <?php if(is_string($element)): ?>
        <a href="#" class="is-active admin-page-link">
            <li class="li"><?php echo e($element); ?></li>
        </a>
        <?php endif; ?>

        
        <?php if(is_array($element)): ?>
        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($page == $paginator->currentPage()): ?>
        <a class="is-active admin-page-link">
            <li class="li"><?php echo e($page); ?></li>
        </a>
        <?php else: ?>
        <a href="<?php echo e($url); ?>" class="admin-page-link">
            <li><?php echo e($page); ?></li>
        </a>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if($paginator->hasMorePages()): ?>
        <a href="<?php echo e($paginator->nextPageUrl()); ?>" class="admin-page-link">
            <li>
                <i class="flaticon2-right-arrow"></i>
            </li>
        </a>
        <?php else: ?>
        <a class="admin-page-link is-passive">
            <li>
                <i class="flaticon2-right-arrow"></i>
            </li>
        </a>
        <?php endif; ?>
    </ul>
</div>
<?php endif; ?>
<?php /**PATH /home/ubuntu/Documents/domains/ecommerce/resources/views/layouts/pagination.blade.php ENDPATH**/ ?>