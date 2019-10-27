<!-- Name Field -->
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <h5><?php echo Form::label('name', 'Name:'); ?>

                <?php echo $faculty->name; ?></h5>
        </div>
    </div>
    <div class="col-6" dir="rtl">
        <!-- Name Ar Field -->
        <div class="form-group pull-right pr-5">
           <h5><?php echo Form::label('name_ar', 'الكلية  :'); ?>

               <?php echo $faculty->name_ar; ?></h5>
        </div>
    </div>
    <hr />
    <div class="col-12">
        <h6 class="text-capitalize text-black-50 text-danger"> About faculty </h6>
        <p>
            <?php echo $faculty->desription; ?>

        </p>
    </div>
    <div class="card col-6">
        <h6 class="text-capitalize text-black-50 text-danger"> Departments</h6>
        <ul>
            <?php $__currentLoopData = $faculty->deparetements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($dep->name); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>

<?php /**PATH /var/www/html/ent/resources/views/faculties/show_fields.blade.php ENDPATH**/ ?>