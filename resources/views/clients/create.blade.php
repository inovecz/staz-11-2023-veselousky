@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    {!! Form::open(['route' => 'clients.createPost', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                                {!! Form::label('name', 'Name') !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('email', 'Email') !!}
                                {!! Form::email('email', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('phone_number', 'Phone Number') !!}
                                {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('verification', 'Verification') !!}
                                {!! Form::checkbox('verification', '1') !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('request', 'Request') !!}
                                {!! Form::select('request', ['Option 1' => 'Option 1', 'Option 2' => 'Option 2'], null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('request_message', 'Request Message') !!}
                                {!! Form::textarea('request_message', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('file', 'Upload File') !!} 
                                {!! Form::file('file', ['class' => 'form-control-file']) !!}
                            </div>
                            

                            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
