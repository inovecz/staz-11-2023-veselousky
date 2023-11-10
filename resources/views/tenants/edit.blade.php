@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                {!! Form::model($tenant,['url'=>$tenant->getEditPostLink()]) !!}
                {!! Form::hidden ('id', null) !!} 
                    <div class="form-group">
                        <label class="form-check-label" form="exampleCheck1"> Firm Name</label>
                        {!! Form::text('firm_name', null, ['class' => 'form-control']) !!} 
                    </div> 
                    <div class="form-group">
                        <label class="form-chcek-label" form="examplePassword1">Password</label>
                    </div>


                    <button type="submit" class="btn btn-dark" style="background-color: #000000; color: #fff; margin-top: 10px;">Submit</button>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
