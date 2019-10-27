<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('Title', 'Title:'); ?>

    <?php echo Form::text('Title', null, ['class' => 'form-control','minlength' => 5]); ?>

</div>

<!-- Link Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('link', 'Link:'); ?>

    <?php echo Form::text('link', null, ['class' => 'form-control','minlength' => 4]); ?>

</div>

<!-- Certificatlink Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('certificatlink', 'Certificatlink:'); ?>

    <?php echo Form::text('certificatlink', null, ['class' => 'form-control']); ?>

</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('user_id', 'User Id:'); ?>

    <?php echo Form::select('user_id', $userItems, null, ['class' => 'form-control']); ?>

</div>

<!-- Tictype Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tictype_id', 'Tictype Id:'); ?>

    <?php echo Form::select('tictype_id', $tictypeItems, null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('ticusages.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/html/ent/resources/views/ticusages/fields.blade.php ENDPATH**/ ?>