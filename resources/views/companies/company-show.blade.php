@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12  d-flex justify-content-center mt-4">

                <div class="d-flex flex-wrap col-12">
                    <div class="col-12">
                        <div class="card text-center">
                            <div class="card-header mb-2">
                                <h2>{{ $company->name }}</h2>
                            </div>
                            <img class="img-thumbnail mx-auto" src="{{ asset('storage/logos/' . $company->logo) }}"
                                alt="logo" width="100px" height="100px">
                            <div class="card-body">
                                <h5>Email:<strong> {{ $company->email }}</strong></h5>
                                <h5>Website: <strong> {{ $company->website }}</strong></h5>
                                <div class="card-header">
                                    <h2>Employees: </h2>
                                </div>
                                <div class="card-body">
                                    @foreach ($employees as $employee)
                                        <h5>{{ $employee->firstname . ' ' . $employee->lastname }}</h5>
                                    @endforeach

                                </div>

                                <a href="{{ route('company-edit', $company->id) }}" class="btn btn-warning">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
