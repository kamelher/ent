<div class="table-responsive">
    <table class="table" id="formations-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Title</th>
        <th>Startdate</th>
        <th>Enddate</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $formations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $formation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $formation->user_id; ?></td>
            <td><?php echo $formation->title; ?></td>
            <td><?php echo $formation->startDate; ?></td>
            <td><?php echo $formation->endDate; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['formations.destroy', $formation->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('formations.show', [$formation->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo route('formations.edit', [$formation->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/html/ent/resources/views/formations/table.blade.php ENDPATH**/ ?>