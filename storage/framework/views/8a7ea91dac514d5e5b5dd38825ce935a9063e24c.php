<div class="table-responsive">
    <table class="table" id="typeencarements-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $typeencarements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typeencarement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $typeencarement->name; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['typeencarements.destroy', $typeencarement->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('typeencarements.show', [$typeencarement->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo route('typeencarements.edit', [$typeencarement->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/html/ent/resources/views/typeencarements/table.blade.php ENDPATH**/ ?>