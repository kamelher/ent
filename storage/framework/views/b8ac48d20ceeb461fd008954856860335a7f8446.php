<div class="table-responsive">
    <table class="table" id="tictypes-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Ticdescription</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $tictypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tictype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $tictype->name; ?></td>
            <td><?php echo $tictype->ticdescription; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['tictypes.destroy', $tictype->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('tictypes.show', [$tictype->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo route('tictypes.edit', [$tictype->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/html/ent/resources/views/tictypes/table.blade.php ENDPATH**/ ?>