<!-- Firstname Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('firstname', 'Firstname:'); ?>

    <?php echo Form::text('firstname', null, ['class' => 'form-control']); ?>

</div>

<!-- Lastname Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('lastname', 'Lastname:'); ?>

    <?php echo Form::text('lastname', null, ['class' => 'form-control']); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo Form::text('email', null, ['class' => 'form-control']); ?>

</div>

<!-- Birthdate Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('birthdate', 'Birthdate:'); ?>

    <?php echo Form::date('birthdate', null, ['class' => 'form-control','id'=>'birthdate']); ?>


</div>



<!-- Placeofbirth Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('placeOfbirth', 'Placeofbirth:'); ?>

    <?php echo Form::text('placeOfbirth', null, ['class' => 'form-control']); ?>

</div>

<!-- Wilaya Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('wilaya', 'Wilaya:'); ?>

    <?php echo Form::text('wilaya', null, ['class' => 'form-control']); ?>

</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('phone', 'Phone:'); ?>

    <?php echo Form::text('phone', null, ['class' => 'form-control']); ?>

</div>

<!-- Photo Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Photo', 'Photo:'); ?>

    <?php echo Form::text('Photo', null, ['class' => 'form-control']); ?>

</div>

<!-- Departement Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('departement_id', 'Departement Id:'); ?>

    <?php echo Form::select('departement_id', $departementItems, null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('users.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/html/ent/resources/views/users/fields.blade.php ENDPATH**/ ?>