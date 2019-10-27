<div class="table-responsive">
    <table class="table" id="administrativetasks-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Posttype Id</th>
        <th>Startdate</th>
        <th>Enddate</th>
        <th>Path</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $administrativetasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $administrativetask): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $administrativetask->user->firstname; ?> <?php echo $administrativetask->user->lastname; ?></td>
                <td><?php echo $administrativetask->posttype->postDescription; ?></td>
                <td><?php echo $administrativetask->startDate; ?></td>
                <td><?php echo $administrativetask->endDate; ?></td>
                <td><?php echo $administrativetask->path; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['administrativetasks.destroy', $administrativetask->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('administrativetasks.show', [$administrativetask->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo route('administrativetasks.edit', [$administrativetask->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/html/ent/resources/views/administrativetasks/table.blade.php ENDPATH**/ ?>