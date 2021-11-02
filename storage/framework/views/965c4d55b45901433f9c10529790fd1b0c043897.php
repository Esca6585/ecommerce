<div id="datatable">
    <table class="table table-separate table-head-custom table-checkable">
        <thead>
            <tr>
                <th>ID</th>
                <?php $__currentLoopData = Config::get('languages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <th><?php echo e(__('Name')); ?> (<?php echo e($language['name']); ?>)</th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <th><?php echo e(__('Description')); ?></th>
                <th><?php echo e(__('Price')); ?></th>
                <th><?php echo e(__('Sale Price')); ?></th>
                <th><?php echo e(__('Sale Type')); ?></th>
                <th><?php echo e(__('Discount')); ?></th>
                <th><?php echo e(__('Img')); ?></th>
                <th><?php echo e(__('Category')); ?> ID</th>
                <th><?php echo e(__('Actions')); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr id="datatable">
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($product->name_tm); ?></td>
                <td><?php echo e($product->name_en); ?></td>
                <td><?php echo e($product->name_ru); ?></td>
                <td><?php echo e($product->description); ?></td>
                <td><?php echo e($product->price); ?></td>
                <td><?php echo e($product->sale_price); ?></td>
                <td><?php echo e($product->discount); ?></td>
                <td><?php echo e($product->sale_type); ?></td>
                <td>
                    <?php if($product->images): ?>
                        <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(asset($image)); ?>" alt="<?php echo e($image); ?>" width="30px">
                            <?php break; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo e(route(Request::segment(4) . '.show', [ app()->getlocale(), $product->parent ? $product->parent->id : $product->id ] )); ?>" class="<?php echo e($product->parent ? 'text-warning' : 'text-primary'); ?>">
                        <?php echo e($product->parent ? $product->parent->{ 'name_' . app()->getlocale() } : __('Parent product')); ?>

                    </a>
                </td>
                <td><?php echo $__env->make('admin-panel.product.product-action', [ $product ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <div>
            <?php echo e($products->links('layouts.pagination')); ?>

        </div>
    </div>                                
</div>
<?php /**PATH /home/ubuntu/Documents/domains/ecommerce/resources/views/admin-panel/product/product-table.blade.php ENDPATH**/ ?>