<div class="table-responsive">
    <table class="table" id="interstings-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $interstings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $intersting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $intersting->name; ?></td>
            <td><?php echo $intersting->user->firstname; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['interstings.destroy', $intersting->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('interstings.show', [$intersting->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo route('interstings.edit', [$intersting->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/html/ent/resources/views/interstings/table.blade.php ENDPATH**/ ?>