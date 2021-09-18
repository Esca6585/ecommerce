<div id="datatable">
    <table class="table table-separate table-head-custom table-checkable">
        <thead>
            <tr>
                <th>ID</th>
                <?php $__currentLoopData = Config::get('languages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <th><?php echo e(__('Name')); ?> (<?php echo e($language['name']); ?>)</th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <th>icon-<?php echo e(__('name')); ?></th>
                <th>icon-<?php echo e(__('img')); ?></th>
                <th><?php echo e(__('Parent Category')); ?> ID</th>
                <th><?php echo e(__('Actions')); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr id="datatable">
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($category->name_tm); ?></td>
                <td><?php echo e($category->name_en); ?></td>
                <td><?php echo e($category->name_ru); ?></td>
                <td><?php echo e($category->icon_name); ?></td>
                <td><?php echo e($category->icon_img); ?></td>
                <td>
                    <a href="<?php echo e($category->parent ? route( Request::segment(4) . '.show', [ app()->getlocale(), $category->parent_id ]) : route( Request::segment(4) . '.show', [ app()->getlocale(), $category->id ])); ?>" class="<?php echo e($category->parent ? 'text-warning' : 'text-primary'); ?>">
                        <?php echo e($category->parent ? $category->parent->{ 'name_' . app()->getlocale() } : __('Parent Category')); ?>

                    </a>
                </td>
                <td><?php echo $__env->make('layouts.action', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    
    <div class="d-flex justify-content-end">
        <div>
            <?php echo e($categories->links('layouts.pagination')); ?>

        </div>
    </div>                                
</div>
<?php /**PATH /home/ubuntu/Documents/domains/ecommerce/resources/views/admin-panel/category/category-table.blade.php ENDPATH**/ ?>