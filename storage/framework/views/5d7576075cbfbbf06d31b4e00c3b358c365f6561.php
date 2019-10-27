

<?php $__env->startSection('modal-form-title'); ?>
Student Form
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modal-form-content'); ?>
	<?php echo $__env->make('students.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.modal.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ent/resources/views/students/form.blade.php ENDPATH**/ ?>