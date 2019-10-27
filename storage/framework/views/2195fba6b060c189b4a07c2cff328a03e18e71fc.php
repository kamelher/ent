<!-- User Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('user_id', 'User Id:'); ?>

    <?php echo Form::select('user_id', $userItems, null, ['class' => 'form-control']); ?>

</div>

<!-- Adress Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('adress', 'Adress:'); ?>

    <?php echo Form::text('adress', null, ['class' => 'form-control','minlength' => 3]); ?>

</div>

<!-- Commune Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('commune', 'Commune:'); ?>

    <?php echo Form::text('commune', null, ['class' => 'form-control']); ?>

</div>

<!-- Daira Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('daira', 'Daira:'); ?>

    <?php echo Form::text('daira', null, ['class' => 'form-control']); ?>

</div>

<!-- Wilaya Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('wilaya', 'Wilaya:'); ?>

    <?php echo Form::text('wilaya', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('adresses.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/html/ent/resources/views/adresses/fields.blade.php ENDPATH**/ ?>