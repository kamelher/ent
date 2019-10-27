<div class="table-responsive">
    <table class="table" id="students-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Suppervisingyear</th>
        <th>Link</th>
        <th>Firststudent</th>
        <th>Secondstudent</th>
        <th>Thirdstudent</th>
        <th>User Id</th>
        <th>Typeencarement Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
             <td><?php echo $student->Title; ?></td>
            <td><?php echo $student->suppervisingYear; ?></td>
            <td><?php echo $student->link; ?></td>
            <td><?php echo $student->firststudent; ?></td>
            <td><?php echo $student->secondstudent; ?></td>
            <td><?php echo $student->thirdstudent; ?></td>
            <td><?php echo $student->supervisor->firstname; ?></td>
            <td><?php echo $student->diplome->name; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['students.destroy', $student->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('students.show', [$student->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo route('students.edit', [$student->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/html/ent/resources/views/students/table.blade.php ENDPATH**/ ?>