<div class="table-responsive">
    <table class="table" id="posttypes-table">
        <thead>
            <tr>
                <th>Postname</th>
        <th>Postdescription</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $posttypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posttype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $posttype->postname; ?></td>
            <td><?php echo $posttype->postDescription; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['posttypes.destroy', $posttype->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('posttypes.show', [$posttype->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo route('posttypes.edit', [$posttype->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/html/ent/resources/views/posttypes/table.blade.php ENDPATH**/ ?>