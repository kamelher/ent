<!-- Name Field -->
<div class="form-group">
    <?php echo Form::label('name', 'Name:'); ?>

    <p><?php echo $intersting->name; ?></p>
</div>

<!-- User Id Field -->
<div class="form-group">
    <?php echo Form::label('user_id', 'User Id:'); ?>

    <p><?php echo $intersting->user_id; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $intersting->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $intersting->updated_at; ?></p>
</div>

<?php /**PATH /var/www/html/ent/resources/views/interstings/show_fields.blade.php ENDPATH**/ ?>