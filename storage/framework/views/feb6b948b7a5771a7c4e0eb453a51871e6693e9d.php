<div class="table-responsive">
    <table class="table" id="pesearchprojects-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Title</th>
        <th>Startdate</th>
        <th>Enddate</th>
        <th>Path</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $pesearchprojects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesearchproject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $pesearchproject->user_id; ?></td>
            <td><?php echo $pesearchproject->title; ?></td>
            <td><?php echo $pesearchproject->startDate; ?></td>
            <td><?php echo $pesearchproject->endDate; ?></td>
            <td><?php echo $pesearchproject->path; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['pesearchprojects.destroy', $pesearchproject->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('pesearchprojects.show', [$pesearchproject->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo route('pesearchprojects.edit', [$pesearchproject->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/html/ent/resources/views/pesearchprojects/table.blade.php ENDPATH**/ ?>