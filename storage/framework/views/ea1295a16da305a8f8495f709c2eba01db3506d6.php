<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Faculty
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <div class="col-12">
                       <?php echo Form::model($faculty, ['route' => ['faculties.update', $faculty->id], 'method' => 'patch']); ?>


                       <?php echo $__env->make('faculties.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                       <?php echo Form::close(); ?>

                   </div>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ent/resources/views/faculties/edit.blade.php ENDPATH**/ ?>