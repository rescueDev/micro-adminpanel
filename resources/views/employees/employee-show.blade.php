@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12  d-flex justify-content-center mt-4">

                <div class="d-flex flex-wrap col-12">
                    <div class="col-12">
                        <div class="card text-center">
                            <div class="card-header mb-2">
                                <h2>{{ $employee->firstname . ' ' . $employee->lastname }}</h2>
                            </div>

                            <div class="card-body">
                                <h5>Email:<strong> {{ $employee->email }}</strong></h5>
                                <h5>Phone: <strong> {{ $employee->phone }}</strong></h5>
                                <div class="card-header">
                                    <h2>working for: </h2>
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('company-show', $company->id) }}">

                                        <h5>{{ $company->name }}</h5>
                                    </a>

                                </div>

                                <a href="{{ route('employee-edit', $employee->id) }}" class="btn btn-warning">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
