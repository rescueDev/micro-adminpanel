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
                            <div class="mx-auto">

                                @if ($company->logo)
                                    <img class="" src="{{ asset('storage/logos/' . $company->logo) }}" alt="logo"
                                        width="100px" height="100px">
                                @else
                                    <img class="" src="{{ asset('storage/nologo.png') }}" alt="logo" width="100px"
                                        height="100px">
                                @endif

                            </div>

                            <div class="card-body">
                                <h5>Email:<strong> {{ $company->email }}</strong></h5>
                                <h5>Website: <strong> {{ $company->website }}</strong></h5>
                                <div class="card-header">
                                    @if (count($employees))
                                        <h2>Employees: </h2>
                                    @else
                                        <h2>This company has no employees</h2>
                                    @endif
                                </div>
                                <div class="card-body">
                                    @foreach ($employees as $employee)
                                        <a href="{{ route('employee-show', $employee->id) }}">

                                            <h5>{{ $employee->firstname . ' ' . $employee->lastname }}</h5>

                                        </a>
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
