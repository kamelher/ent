<!-- Postname Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('postname', 'Postname:'); ?>

    <?php echo Form::text('postname', null, ['class' => 'form-control','minlength' => 3]); ?>

</div>

<!-- Postdescription Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('postDescription', 'Postdescription:'); ?>

    <?php echo Form::text('postDescription', null, ['class' => 'form-control','minlength' => 3]); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('posttypes.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/html/ent/resources/views/posttypes/fields.blade.php ENDPATH**/ ?>