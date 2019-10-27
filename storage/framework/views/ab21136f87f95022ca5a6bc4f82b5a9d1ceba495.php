<div class="table-responsive">
    <table class="table" id="reseachdomains-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $reseachdomains; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reseachdomain): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $reseachdomain->name; ?></td>
            <td><?php echo $reseachdomain->user->firstname; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['reseachdomains.destroy', $reseachdomain->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('reseachdomains.show', [$reseachdomain->id]); ?>" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                        <a href="<?php echo route('reseachdomains.edit', [$reseachdomain->id]); ?>" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                        <?php echo Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/html/ent/resources/views/reseachdomains/table.blade.php ENDPATH**/ ?>