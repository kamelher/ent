<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control','minlength' => 3]); ?>

</div>

<!-- Ticdescription Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('ticdescription', 'Ticdescription:'); ?>

    <?php echo Form::textarea('ticdescription', null, ['class' => 'form-control','minlength' => 20]); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('tictypes.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/html/ent/resources/views/tictypes/fields.blade.php ENDPATH**/ ?>