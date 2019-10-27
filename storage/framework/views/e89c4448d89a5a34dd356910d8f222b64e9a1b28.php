<!-- User Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('user_id', 'User Id:'); ?>

    <?php echo Form::select('user_id', $userItems, null, ['class' => 'form-control']); ?>

</div>

<!-- Posttype Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('posttype_id', 'Posttype Id:'); ?>

    <?php echo Form::select('posttype_id', $posttypeItems, null, ['class' => 'form-control']); ?>

</div>

<!-- Startdate Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('startDate', 'Startdate:'); ?>

    <?php echo Form::date('startDate', null, ['class' => 'form-control','id'=>'startDate']); ?>

</div>



<!-- Enddate Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('endDate', 'Enddate:'); ?>

    <?php echo Form::date('endDate', null, ['class' => 'form-control','id'=>'endDate']); ?>

</div>



<!-- Path Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('path', 'Path:'); ?>

    <?php echo Form::text('path', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('administrativetasks.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/html/ent/resources/views/administrativetasks/fields.blade.php ENDPATH**/ ?>