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
                        <?php echo Form::open(['route' => 'faculties.store']); ?>


                        <?php echo $__env->make('faculties.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <?php echo Form::close(); ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ent/resources/views/faculties/create.blade.php ENDPATH**/ ?>