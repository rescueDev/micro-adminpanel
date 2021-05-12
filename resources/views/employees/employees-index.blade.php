@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <div class="col-sm-12 col-md-6 mx-auto mt-3 mb-4">
                <a class="btn btn-outline-success" href="{{ route('employee-create') }}">New Employee</a>
                <a class="btn btn-outline-secondary" href="{{ route('employee-restore-page') }}">Restore Employee</a>
            </div>
            <ul>
                @if ($employees)

                    <div class="d-flex flex-wrap col-12">
                        @foreach ($employees as $employee)
                            <div class="col-sm-12 col-md-6 col-lg-4 mt-2">
                                <div class="card text-center">
                                    <div class="card-header mb-2">
                                        <h4>{{ $employee->firstname . ' ' . $employee->lastname }}</h4>
                                    </div>
                                    <div class="card-body">
                                        <h5>{{ $employee->phone }}</h5>
                                        <h5>{{ $employee->email }}</h5>
                                        <div class="buttons d-flex justify-content-center mx-auto">
                                            <a href="{{ route('employee-show', $employee->id) }}"
                                                class="btn btn-primary mr-2">Show</a>
                                            <a href="{{ route('employee-edit', $employee->id) }}"
                                                class="btn btn-warning mr-2">Edit</a>

                                            <form action="{{ route('employee-delete', $employee->id) }}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </ul>
        </div>
        <div class="page mx-auto">

            {{ $employees->links() }}
        </div>
    </div>
@endsection
