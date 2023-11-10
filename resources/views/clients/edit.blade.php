@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                {!! Form::model($client,['url'=>$client->getEditPostLink()]) !!}
                {!! Form::hidden ('id', null) !!} 
                    <div class="form-group">
                        <label class="form-check-label" form="exampleCheck1"> Name</label>
                        {!! Form::text('name', null, ['class' => 'form-control']) !!} 
                    </div> 

                    <div class= "form-group">
                        <label form="exampleInputEmai11">Email address</label>
                        {!! Form::email ('email', null, ['class' => 'form-control']) !!} </div>
                    
                    </div>
                    <div class="form-group">
                        <label form="exampleInputPassword1">Phone number</label>
                        {!! Form::number ('phone_number', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        <label form="exampleInputVerification1">Verification</label>
                        {!! Form::checkbox ('verification', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label form="exampleInputRequest1">Request</label>
                        {!! Form::text ('request', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label form="exampleInputRequestMessage1">Request message</label>
                        {!! Form::text ('request_message', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label form="exampleInputFile1">File</label>
                        {!! Form::file ('file', null, ['class' => 'form-control']) !!}
                    </div>

                    <button type="submit" class="btn btn-dark" style="background-color: #000000; color: #fff; margin-top: 10px;">Submit</button>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
