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

    <input type="date" id="start" name="trip-start"
           value="2018-07-22 00:00:00"
           min="2018-01-01" max="2018-12-31">
    <?php echo Form::text('startDate', null, ['class' => 'form-control','id'=>'startDate']); ?>

</div>



<!-- Enddate Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('endDate', 'Enddate:'); ?>

    <?php echo Form::date('endDate', null, ['class' => 'form-control','id'=>'endDate']); ?>

</div>



<!-- Organization Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('organization', 'Organization:'); ?>

    <?php echo Form::text('organization', null, ['class' => 'form-control','minlength' => 3]); ?>

</div>

<!-- Pfetitle Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('pfeTitle', 'Pfetitle:'); ?>

    <?php echo Form::text('pfeTitle', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('formations.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /var/www/html/ent/resources/views/formations/fields.blade.php ENDPATH**/ ?>