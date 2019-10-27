<!-- Name Field -->
<div class="row align-items-center">
    <div class="form-group col-sm-6">
        <?php echo Form::label('name', 'Name:'); ?>

        <?php echo Form::text('name', null, ['class' => 'form-control','minlength' => 5]); ?>

    </div>

    <!-- Name Ar Field -->
    <div class="form-group col-sm-6 text-right" dir="rtl">
        <?php echo Form::label('name_ar', ' اسم الكلية بالعربي :'); ?>

        <?php echo Form::text('name_ar', null, ['class' => 'form-control','minlength' => 5]); ?>

    </div>

    <!-- Name Ar Field -->
    <div class="form-group col-12">
        <?php echo Form::label('desription', 'Description De la faculté'); ?>

        <?php echo Form::label('desription', ' التعريف بالكلية ', ['class'=>'pull-right']); ?>

        <?php echo Form::textarea('desription', null, ['class' => 'form-control', 'rows'=>'5']); ?>

    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

        <a href="<?php echo route('faculties.index'); ?>" class="btn btn-default">Cancel</a>
    </div>
</div>

<?php /**PATH /var/www/html/ent/resources/views/faculties/fields.blade.php ENDPATH**/ ?>