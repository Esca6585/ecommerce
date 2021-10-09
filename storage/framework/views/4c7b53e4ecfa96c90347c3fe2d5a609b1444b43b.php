<div id="datatable">
    <table class="table table-separate table-head-custom table-checkable">
        <thead>
            <tr>
                <th>ID</th>
                <th><?php echo e(__('Name')); ?></th>
                <th><?php echo e(__('Img')); ?></th>
                <th><?php echo e(__('Category')); ?> ID</th>
                <th><?php echo e(__('Actions')); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr id="datatable">
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($brand->name); ?></td>
                <td>
                    <?php if($brand->img): ?>
                        <?php $__currentLoopData = $brand->img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(asset($image)); ?>" alt="<?php echo e($image); ?>" width="30px">
                            <?php break; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo e(route(Request::segment(4) . '.show', [ app()->getlocale(), $brand->parent ? $brand->parent->id : $brand->id ] )); ?>" class="<?php echo e($brand->parent ? 'text-warning' : 'text-primary'); ?>">
                        <?php echo e($brand->parent ? $brand->parent->{ 'name_' . app()->getlocale() } : __('Parent brand')); ?>

                    </a>
                </td>
                <td><?php echo $__env->make('admin-panel.brand.brand-action', [ $brand ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <div>
            <?php echo e($brands->links('layouts.pagination')); ?>

        </div>
    </div>                                
</div>
<?php /**PATH /home/ubuntu/Documents/domains/ecommerce/resources/views/admin-panel/brand/brand-table.blade.php ENDPATH**/ ?>