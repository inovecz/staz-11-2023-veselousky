@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Firm Name</th>
                            <th scope="col">Password</th>
                            <th scope="col"><a href="{{ route('tenants.create') }}" class="btn btn-success" role="button" aria-pressed="true" style="width: 48px;">+</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tenants as $tenant)
                            <tr>
                                <th scope="row">{{ $tenant->id }}</th>
                                <td>{{ $tenant->firm_name }}</td>
                                <td><a href="{{ $tenant->getViewLink() }}" class="btn btn-secondary" role="button" aria-pressed="true">👀</a></td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection