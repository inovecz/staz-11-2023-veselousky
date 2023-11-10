<?php $__env->startSection('content'); ?>
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <?php echo Form::open(['route' => 'clients.createPost', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

                            <div class="form-group">
                                <?php echo Form::label('name', 'Name'); ?>

                                <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

                            </div>

                            <div class="form-group">
                                <?php echo Form::label('email', 'Email'); ?>

                                <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

                            </div>

                            <div class="form-group">
                                <?php echo Form::label('phone_number', 'Phone Number'); ?>

                                <?php echo Form::text('phone_number', null, ['class' => 'form-control']); ?>

                            </div>

                            <div class="form-group">
                                <?php echo Form::label('verification', 'Verification'); ?>

                                <?php echo Form::checkbox('verification', '1'); ?>

                            </div>

                            <div class="form-group">
                                <?php echo Form::label('request', 'Request'); ?>

                                <?php echo Form::select('request', ['Option 1' => 'Option 1', 'Option 2' => 'Option 2'], null, ['class' => 'form-control']); ?>

                            </div>

                            <div class="form-group">
                                <?php echo Form::label('request_message', 'Request Message'); ?>

                                <?php echo Form::textarea('request_message', null, ['class' => 'form-control']); ?>

                            </div>

                            <div class="form-group">
                                <?php echo Form::label('file', 'Upload File'); ?> 
                                <?php echo Form::file('file', ['class' => 'form-control-file']); ?>

                            </div>
                            

                            <?php echo Form::submit('Submit', ['class' => 'btn btn-primary']); ?>

                            <?php echo Form::close(); ?>


                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/slavo/whistleblower/resources/views/clients/create.blade.php ENDPATH**/ ?>