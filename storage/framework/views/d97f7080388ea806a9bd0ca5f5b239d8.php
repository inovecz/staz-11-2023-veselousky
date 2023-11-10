<?php $__env->startSection('content'); ?>
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <?php echo Form::open(['route' => 'tenants.createPost', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

                            <div class="form-group">
                                <?php echo Form::label('firm_name', 'Firm name'); ?>

                                <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

                            </div>
                            <div class="form-group">
                                <?php echo Form::label('password', 'Password'); ?>

                                <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

                            </div>
                            <?php echo Form::submit('Submit', ['class' => 'btn btn-primary']); ?>

                            <?php echo Form::close(); ?>


                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/slavo/whistleblower/resources/views/tenants/create.blade.php ENDPATH**/ ?>