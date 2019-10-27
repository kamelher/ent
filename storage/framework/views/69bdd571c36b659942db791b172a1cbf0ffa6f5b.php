<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Adress
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <?php echo Form::model($adress, ['route' => ['adresses.update', $adress->id], 'method' => 'patch']); ?>

                       <div class="col">
                          <div class="row">
                        <?php echo $__env->make('adresses.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                          </div>
                     </div>
                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ent/resources/views/adresses/edit.blade.php ENDPATH**/ ?>