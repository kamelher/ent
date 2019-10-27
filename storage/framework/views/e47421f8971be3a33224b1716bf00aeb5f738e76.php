<!-- Title Field -->
<div class="form-group">
    <?php echo Form::label('Title', 'Title:'); ?>

    <p><?php echo $student->Title; ?></p>
</div>

<!-- Suppervisingyear Field -->
<div class="form-group">
    <?php echo Form::label('suppervisingYear', 'Suppervisingyear:'); ?>

    <p><?php echo $student->suppervisingYear; ?></p>
</div>

<!-- Link Field -->
<div class="form-group">
    <?php echo Form::label('link', 'Link:'); ?>

    <p><?php echo $student->link; ?></p>
</div>

<!-- Firststudent Field -->
<div class="form-group">
    <?php echo Form::label('firststudent', 'Firststudent:'); ?>

    <p><?php echo $student->firststudent; ?></p>
</div>

<!-- Secondstudent Field -->
<div class="form-group">
    <?php echo Form::label('secondstudent', 'Secondstudent:'); ?>

    <p><?php echo $student->secondstudent; ?></p>
</div>

<!-- Thirdstudent Field -->
<div class="form-group">
    <?php echo Form::label('thirdstudent', 'Thirdstudent:'); ?>

    <p><?php echo $student->thirdstudent; ?></p>
</div>

<!-- Faculty Id Field -->
<div class="form-group">
    <?php echo Form::label('faculty_id', 'Faculty Id:'); ?>

    <p><?php echo $student->faculty_id; ?></p>
</div>

<!-- User Id Field -->
<div class="form-group">
    <?php echo Form::label('user_id', 'User Id:'); ?>

    <p><?php echo $student->user_id; ?></p>
</div>

<!-- Typeencarement Id Field -->
<div class="form-group">
    <?php echo Form::label('typeencarement_id', 'Typeencarement Id:'); ?>

    <p><?php echo $student->typeencarement_id; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $student->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $student->updated_at; ?></p>
</div>

<?php /**PATH /var/www/html/ent/resources/views/students/show_fields.blade.php ENDPATH**/ ?>