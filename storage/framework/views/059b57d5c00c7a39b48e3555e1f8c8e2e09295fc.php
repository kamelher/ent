<div class="table-responsive">
    <table class="table" id="faculties-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>الاسم</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $faculty->name; ?></td>
            <td><?php echo $faculty->name_ar; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['faculties.destroy', $faculty->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('faculties.show', [$faculty->id]); ?>" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                        <a href="<?php echo route('faculties.edit', [$faculty->id]); ?>" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                        <?php echo Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/html/ent/resources/views/faculties/table.blade.php ENDPATH**/ ?>