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
                <td><img src="<?php echo e(asset($brand->image)); ?>" alt="<?php echo e($brand->image); ?>" width="50px"></td>
                <td>
                    <a href="<?php echo e(route('category.show', [ app()->getlocale(), 'all', $brand->category_id ] )); ?>" class="text-primary">
                        <?php echo e($brand->category->{ 'name_' . app()->getlocale() }); ?>

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
<?php /**PATH /home/ubuntu/Documents/domains/sumbar-market/resources/views/admin-panel/brand/brand-table.blade.php ENDPATH**/ ?>