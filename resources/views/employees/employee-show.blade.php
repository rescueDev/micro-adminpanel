@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12  d-flex justify-content-center mt-4">
                <div class="card text-center">
                    <div class="card-header">Employee</div>
                    <h1>{{ $employee->firstname }}</h1>
                    <h1>{{ $employee->lastname }}</h1>
                    <h1>{{ $employee->email }}</h1>
                    <h1>{{ $employee->phone }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
