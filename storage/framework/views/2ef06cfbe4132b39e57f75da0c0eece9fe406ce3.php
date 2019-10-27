<!-- Name Field -->
<div class="form-group">
    <?php echo Form::label('name', 'Name:'); ?>

    <p><?php echo $reseachdomain->name; ?></p>
</div>

<!-- User Id Field -->
<div class="form-group">
    <?php echo Form::label('user_id', 'User Id:'); ?>

    <p><?php echo $reseachdomain->user->firstname; ?></p>
</div>


<?php /**PATH /var/www/html/ent/resources/views/reseachdomains/show_fields.blade.php ENDPATH**/ ?>