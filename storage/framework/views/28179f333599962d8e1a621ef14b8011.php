<?php $__env->startSection('content'); ?>
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                <?php echo Form::model($client,['url'=>$client->getEditPostLink()]); ?>

                <?php echo Form::hidden ('id', null); ?> 
                    <div class="form-group">
                        <label class="form-check-label" form="exampleCheck1"> Name</label>
                        <?php echo Form::text('name', null, ['class' => 'form-control']); ?> 
                    </div> 

                    <div class= "form-group">
                        <label form="exampleInputEmai11">Email address</label>
                        <?php echo Form::email ('email', null, ['class' => 'form-control']); ?> </div>
                    
                    </div>
                    <div class="form-group">
                        <label form="exampleInputPassword1">Phone number</label>
                        <?php echo Form::number ('phone_number', null, ['class' => 'form-control']); ?>

                    </div>
                    
                    <div class="form-group">
                        <label form="exampleInputVerification1">Verification</label>
                        <?php echo Form::checkbox ('verification', null, ['class' => 'form-control']); ?>

                    </div>
                    <div class="form-group">
                        <label form="exampleInputRequest1">Request</label>
                        <?php echo Form::text ('request', null, ['class' => 'form-control']); ?>

                    </div>
                    <div class="form-group">
                        <label form="exampleInputRequestMessage1">Request message</label>
                        <?php echo Form::text ('request_message', null, ['class' => 'form-control']); ?>

                    </div>
                    <div class="form-group">
                        <label form="exampleInputFile1">File</label>
                        <?php echo Form::file ('file', null, ['class' => 'form-control']); ?>

                    </div>

                    <button type="submit" class="btn btn-dark" style="background-color: #000000; color: #fff; margin-top: 10px;">Submit</button>
                <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/slavo/whistleblower/resources/views/clients/edit.blade.php ENDPATH**/ ?>