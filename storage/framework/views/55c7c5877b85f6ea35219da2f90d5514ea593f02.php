<div class="table-responsive">
    <table class="table" id="departements-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Name Ar</th>
        <th>Faculty Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $departements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $departement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $departement->name; ?></td>
            <td><?php echo $departement->name_ar; ?></td>
            <td><?php echo $departement->faculty->name; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['departements.destroy', $departement->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('departements.show', [$departement->id]); ?>" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                        <a href="<?php echo route('departements.edit', [$departement->id]); ?>" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                        <?php echo Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/html/ent/resources/views/departements/table.blade.php ENDPATH**/ ?>