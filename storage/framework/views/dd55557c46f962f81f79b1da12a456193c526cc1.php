<div class="table-responsive">
    <table class="table" id="ticusages-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Link</th>
        <th>Certificatlink</th>
        <th>User Id</th>
        <th>Tictype Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $ticusages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticusage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $ticusage->Title; ?></td>
            <td><?php echo $ticusage->link; ?></td>
            <td><?php echo $ticusage->certificatlink; ?></td>
            <td><?php echo $ticusage->user_id; ?></td>
            <td><?php echo $ticusage->tictype_id; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['ticusages.destroy', $ticusage->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('ticusages.show', [$ticusage->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo route('ticusages.edit', [$ticusage->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/html/ent/resources/views/ticusages/table.blade.php ENDPATH**/ ?>