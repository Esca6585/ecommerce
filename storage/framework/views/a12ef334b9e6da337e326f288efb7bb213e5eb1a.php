<?php if($paginator->hasPages()): ?>
<div class="example-preview">
    <!--begin::Pagination-->
    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div class="d-flex flex-wrap py-2 mr-3">
            
            <?php if($paginator->onFirstPage()): ?>
            <a href="<?php echo e($paginator->previousPageUrl()); ?>" class="btn btn-icon btn-sm btn-light mr-2 my-1 admin-page-link disabled">
                <i class="ki ki-bold-arrow-back icon-xs"></i>
            </a>
            <?php else: ?>
            <a href="<?php echo e($paginator->previousPageUrl()); ?>"
                class="btn btn-icon btn-sm btn-light mr-2 my-1 admin-page-link">
                <i class="ki ki-bold-arrow-back icon-xs"></i>
            </a>
            <?php endif; ?>

            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(is_string($element)): ?>
            <a class="btn btn-icon btn-sm border-0 btn-light btn-hover-primary active mr-2 my-1 admin-page-link"><?php echo e($element); ?></a>
            <?php endif; ?>

            
            <?php if(is_array($element)): ?>
            <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($page == $paginator->currentPage()): ?>
            <a class="btn btn-icon btn-sm border-0 btn-light active mr-2 my-1 admin-page-link"><?php echo e($page); ?></a>
            <?php else: ?>
            <a href="<?php echo e($url); ?>" class="btn btn-icon btn-sm border-0 btn-light mr-2 my-1 admin-page-link"><?php echo e($page); ?></a>

            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($paginator->hasMorePages()): ?>
            <a href="<?php echo e($paginator->nextPageUrl()); ?>" class="btn btn-icon btn-sm btn-light mr-2 my-1 admin-page-link">
                <i class="ki ki-bold-arrow-next icon-xs"></i>
            </a>
            <?php else: ?>
            <a href="<?php echo e($paginator->nextPageUrl()); ?>" class="btn btn-icon btn-sm btn-light mr-2 my-1 admin-page-link disabled">
                <i class="ki ki-bold-arrow-next icon-xs"></i>
            </a>
            <?php endif; ?>
        </div>
    </div>
    <!--end:: Pagination-->
</div>
<?php endif; ?><?php /**PATH /home/ubuntu/Documents/domains/ecommerce/resources/views/layouts/pagination.blade.php ENDPATH**/ ?>