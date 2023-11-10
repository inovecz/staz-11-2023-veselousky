@extends('layouts.app')
@section('content')
<div class="container mt-2">
    <div class="text-sm">
        <span style="margin-left: 17px;">Clients - {{ $client->id }}</span>
        <a href=http://127.0.0.1:8000/clients/ class="btn btn-link text-sm btn-sm" role="button" aria-pressed="true" style="margin-bottom: 2px;">Späť</a>
    </div>
</div>
<div class="container mt-2">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Detail klienta
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            ID
                        </div>
                        <div class="col-6">
                            {{ $client->id }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Meno
                        </div>
                        <div class="col-6">
                            {{ $client->name }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Email
                        </div>
                        <div class="col-6">
                            {{ $client->email }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Phone Number
                        </div>
                        <div class="col-6">
                            {{ $client->phone_number }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Verification
                        </div>
                        <div class="col-6">
                            {{ $client->verification }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Request name
                        </div>
                        <div class="col-6">
                            {{ $client->request}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Request message
                        </div>
                        <div class="col-6">
                            {{ $client->request_message}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Atached file
                        </div>
                        <div class="col-6">
                            {{ $client->file}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6"> 
                            {!! Form::model($client, ['url' => $client->getDeletePostLink()]) !!}
                            {!! Form::hidden('id') !!}
                            <button type="button1" class="btn btn-danger btn-sm">Delete</button>
                            {!! Form::close() !!}
                        </div>
                        <div class="col-6 text-right"> 
                            <a href="{{$client->getEditLink()}}">aaaaa</a>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection