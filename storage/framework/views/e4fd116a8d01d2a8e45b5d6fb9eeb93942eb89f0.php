<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Title', 'Title:'); ?>

    <?php echo Form::text('Title', null, ['class' => 'form-control','minlength' => 5]); ?>

</div>

<!-- Suppervisingyear Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('suppervisingYear', 'Suppervisingyear:'); ?>

    <?php echo Form::text('suppervisingYear', null, ['class' => 'form-control','minlength' => 4]); ?>

</div>

<!-- Link Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('link', 'Link:'); ?>

    <?php echo Form::text('link', null, ['class' => 'form-control','minlength' => 4]); ?>

</div>

<!-- Firststudent Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('firststudent', 'Firststudent:'); ?>

    <?php echo Form::text('firststudent', null, ['class' => 'form-control','minlength' => 3]); ?>

</div>

<!-- Secondstudent Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('secondstudent', 'Secondstudent:'); ?>

    <?php echo Form::text('secondstudent', null, ['class' => 'form-control']); ?>

</div>

<!-- Thirdstudent Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('thirdstudent', 'Thirdstudent:'); ?>

    <?php echo Form::text('thirdstudent', null, ['class' => 'form-control']); ?>

</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('user_id', 'User Id:'); ?>

    <?php echo Form::select('user_id', $userItems, null, ['class' => 'form-control']); ?>

</div>

<!-- Typeencarement Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('typeencarement_id', 'Typeencarement Id:'); ?>

    <?php echo Form::select('typeencarement_id', $typeencarementItems, null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('students.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/html/ent/resources/views/students/fields.blade.php ENDPATH**/ ?>