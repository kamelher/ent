<!-- Name Field -->
<div class="form-group">
    <?php echo Form::label('name', 'Name:'); ?>

    <p><?php echo $departement->name; ?></p>
</div>

<!-- Name Ar Field -->
<div class="form-group">
    <?php echo Form::label('name_ar', 'Name Ar:'); ?>

    <p><?php echo $departement->name_ar; ?></p>
</div>

<!-- Faculty Id Field -->
<div class="form-group">
    <?php echo Form::label('faculty_id', 'Faculty Id:'); ?>

    <p><?php echo $departement->faculty_id; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $departement->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $departement->updated_at; ?></p>
</div>

<?php /**PATH /var/www/html/ent/resources/views/departements/show_fields.blade.php ENDPATH**/ ?>