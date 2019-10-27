<div class="table-responsive">
    <table class="table" id="reseachDomains-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $reseachDomains; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reseachDomain): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $reseachDomain->name; ?></td>
            <td><?php echo $reseachDomain->user_id; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['reseachDomains.destroy', $reseachDomain->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('reseachDomains.show', [$reseachDomain->id]); ?>" class='btn btn-default btn-xs'><i class="fa fa-eye-open"></i></a>
                        <a href="<?php echo route('reseachDomains.edit', [$reseachDomain->id]); ?>" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                        <?php echo Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/html/ent/resources/views/reseach_domains/table.blade.php ENDPATH**/ ?>