<!-- User Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('user_id', 'User Id:'); ?>

    <?php echo Form::select('user_id', $userItems, null, ['class' => 'form-control']); ?>

</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('title', 'Title:'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-control','minlength' => 3]); ?>

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



<!-- Role Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('role', 'Role:'); ?>

    <?php echo Form::select('role', ['Project President' => 'Project President', 'Member' => 'Member'], null, ['class' => 'form-control']); ?>

</div>

<!-- Path Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('path', 'Path:'); ?>

    <?php echo Form::text('path', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('pesearchprojects.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/html/ent/resources/views/pesearchprojects/fields.blade.php ENDPATH**/ ?>