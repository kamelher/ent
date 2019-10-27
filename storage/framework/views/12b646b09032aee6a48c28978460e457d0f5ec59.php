<div class="table-responsive">
    <table class="table" id="adresses-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Adress</th>
        <th>Commune</th>
        <th>Daira</th>
        <th>Wilaya</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $adresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $adress->user_id; ?></td>
            <td><?php echo $adress->adress; ?></td>
            <td><?php echo $adress->commune; ?></td>
            <td><?php echo $adress->daira; ?></td>
            <td><?php echo $adress->wilaya; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['adresses.destroy', $adress->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('adresses.show', [$adress->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo route('adresses.edit', [$adress->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/html/ent/resources/views/adresses/table.blade.php ENDPATH**/ ?>