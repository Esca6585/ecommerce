<option value="Category <?php echo e($key); ?>" data-current-label="Category <?php echo e($key); ?>"><?php echo e($childCategory->name_tm); ?></option>
<?php if($child_category->categories): ?>
<option value="Category 1" data-current-label="Category 1">
    <?php $__currentLoopData = $child_category->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('admin-panel.category.child_category', ['child_category' => $childCategory], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</option>
<?php endif; ?>
<?php /**PATH /home/ubuntu/Documents/domains/ecommerce/resources/views/admin-panel/category/child_category.blade.php ENDPATH**/ ?>