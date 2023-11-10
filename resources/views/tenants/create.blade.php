@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    {!! Form::open(['route' => 'tenants.createPost', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                                {!! Form::label('firm_name', 'Firm name') !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('password', 'Password') !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>
                            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
