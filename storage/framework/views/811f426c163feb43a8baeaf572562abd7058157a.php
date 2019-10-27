<!-- User Id Field -->
<div class="form-group">
    <?php echo Form::label('user_id', 'User Id:'); ?>

    <p><?php echo $formation->user_id; ?></p>
</div>

<!-- Title Field -->
<div class="form-group">
    <?php echo Form::label('title', 'Title:'); ?>

    <p><?php echo $formation->title; ?></p>
</div>

<!-- Startdate Field -->
<div class="form-group">
    <?php echo Form::label('startDate', 'Startdate:'); ?>

    <p><?php echo $formation->startDate; ?></p>
</div>

<!-- Enddate Field -->
<div class="form-group">
    <?php echo Form::label('endDate', 'Enddate:'); ?>

    <p><?php echo $formation->endDate; ?></p>
</div>

<!-- Organization Field -->
<div class="form-group">
    <?php echo Form::label('organization', 'Organization:'); ?>

    <p><?php echo $formation->organization; ?></p>
</div>

<!-- Pfetitle Field -->
<div class="form-group">
    <?php echo Form::label('pfeTitle', 'Pfetitle:'); ?>

    <p><?php echo $formation->pfeTitle; ?></p>
</div>

<?php /**PATH /var/www/html/ent/resources/views/formations/show_fields.blade.php ENDPATH**/ ?>