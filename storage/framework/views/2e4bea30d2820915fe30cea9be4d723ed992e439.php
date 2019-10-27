<div class="table-responsive">
    <table class="table" id="researchprojects-table">
        <thead>
            <tr>
                <th>User</th>
        <th>Project code </th>
        <th>Starting date</th>
        <th>Finish date</th>
        <th>Path</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $researchprojects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $researchproject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $researchproject->user->firstname; ?></td>
            <td><?php echo $researchproject->title; ?></td>
            <td><?php echo $researchproject->startDate; ?></td>
            <td><?php echo $researchproject->endDate; ?></td>
            <td><?php echo $researchproject->path; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['researchprojects.destroy', $researchproject->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('researchprojects.show', [$researchproject->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo route('researchprojects.edit', [$researchproject->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/html/ent/resources/views/researchprojects/table.blade.php ENDPATH**/ ?>