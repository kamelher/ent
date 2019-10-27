<div class="row align-items-center">
    <!-- Name Field -->
    <div class="form-group offset-2 col-4">
        <?php echo Form::label('name', 'Name:'); ?>

        <?php echo Form::text('name', null, ['class' => 'form-control','minlength' => 3]); ?>

    </div>

    <!-- Name Ar Field -->
    <div class="form-group  col-4 text-right" dir="rtl">
        <?php echo Form::label('name_ar', 'الاسم بالعربي'); ?>

        <?php echo Form::text('name_ar', null, ['class' => 'form-control','minlength' => 3]); ?>

    </div>

    <!-- Faculty Id Field -->
    <div class="form-group  offset-2  col-sm-8">
        <?php echo Form::label('faculty_id', 'Faculty:'); ?>

        <?php echo Form::select('faculty_id', $facultyItems, null, ['class' => 'form-control']); ?>

    </div>

    <!-- Submit Field -->
    <div class="form-group  offset-3 col-sm-6">
        <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

        <a href="<?php echo route('departements.index'); ?>" class="btn btn-default">Cancel</a>
    </div>
</div>

<?php /**PATH /var/www/html/ent/resources/views/departements/fields.blade.php ENDPATH**/ ?>