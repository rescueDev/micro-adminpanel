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

                    <div class="col-12 ">
                        @foreach ($employees as $employee)
                            <div class="col-10 mx-auto">
                                <div class="border text-center d-flex justify-content-around align-items-center"
                                    style="height:150px ">
                                    <div class="col text-left">
                                        <h4>ID: {{ $employee->id }}</h4>
                                    </div>
                                    <div class="col text-left pl-4">
                                        <h4>{{ $employee->firstname . ' ' . $employee->lastname }}</h4>
                                    </div>
                                    <div class="col">

                                        <a href="{{ route('employee-show', $employee->id) }}"
                                            class="btn btn-primary">Show</a>
                                        <a href="{{ route('employee-edit', $employee->id) }}"
                                            class="btn btn-warning">Edit</a>
                                    </div>
                                    <form action="{{ route('employee-delete', $employee->id) }}" method="post">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
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
