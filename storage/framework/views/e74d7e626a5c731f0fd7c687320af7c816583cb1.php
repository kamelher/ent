<!-- Firstname Field -->
<div class="form-group">
    <?php echo Form::label('firstname', 'Firstname:'); ?>

    <p><?php echo $user->firstname; ?></p>
</div>

<!-- Lastname Field -->
<div class="form-group">
    <?php echo Form::label('lastname', 'Lastname:'); ?>

    <p><?php echo $user->lastname; ?></p>
</div>

<!-- Email Field -->
<div class="form-group">
    <?php echo Form::label('email', 'Email:'); ?>

    <p><?php echo $user->email; ?></p>
</div>

<!-- Birthdate Field -->
<div class="form-group">
    <?php echo Form::label('birthdate', 'Birthdate:'); ?>

    <p><?php echo $user->birthdate; ?></p>
</div>

<!-- Placeofbirth Field -->
<div class="form-group">
    <?php echo Form::label('placeOfbirth', 'Placeofbirth:'); ?>

    <p><?php echo $user->placeOfbirth; ?></p>
</div>

<!-- Wilaya Field -->
<div class="form-group">
    <?php echo Form::label('wilaya', 'Wilaya:'); ?>

    <p><?php echo $user->wilaya; ?></p>
</div>

<!-- Phone Field -->
<div class="form-group">
    <?php echo Form::label('phone', 'Phone:'); ?>

    <p><?php echo $user->phone; ?></p>
</div>

<!-- Photo Field -->
<div class="form-group">
    <?php echo Form::label('Photo', 'Photo:'); ?>

    <p><?php echo $user->Photo; ?></p>
</div>

<!-- Departement Id Field -->
<div class="form-group">
    <?php echo Form::label('departement_id', 'Departement Id:'); ?>

    <p><?php echo $user->Departement->name; ?></p>

</div>

<!-- Adress Field -->
<div class="form-group">
    <?php echo Form::label('departement_id', 'Departement Id:'); ?>

    <p><?php echo $user->Adress->adress; ?></p>

</div>
<!-- Interstings Id Field -->
<div class="form-group">
    <div class="card col-6">
        <h6 class="text-capitalize text-black-50 text-danger"> Domain de Recherche</h6>
        <ul>
            <?php $__currentLoopData = $user->interstings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $intersting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($intersting->name); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>

<!-- Formation Id Field -->
<div class="form-group">
    <div class="card col-6">
        <h6 class="text-capitalize text-black-50 text-danger"> Formation</h6>
        <ul>
            <?php $__currentLoopData = $user->formations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $formation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($formation->title); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<!-- Research Projects Id Field -->
<div class="form-group">
    <div class="card col-6">
        <h6 class="text-capitalize text-black-50 text-danger"> Research Projects</h6>
        <ul>
            <?php $__currentLoopData = $user->researchProjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $researchProject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($researchProject->title); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<!-- Encadrement Id Field -->
<div class="form-group">
    <div class="card col-6">
        <h6 class="text-capitalize text-black-50 text-danger"> Encadrement</h6>
        <ul>
            <?php $__currentLoopData = $user->supervising; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($student->firststudent); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<?php /**PATH /var/www/html/ent/resources/views/users/show_fields.blade.php ENDPATH**/ ?>