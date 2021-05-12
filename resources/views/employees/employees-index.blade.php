@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12 text-center">
            <div class="col-sm-12 col-md-6 mx-auto mt-3 mb-4">
                <a class="mt-2 btn btn-outline-success" href="{{ route('employee-create') }}">New Employee</a>
                <a class="mt-2 btn btn-outline-secondary" href="{{ route('employee-restore-page') }}">Restore Employee</a>
            </div>
            @if ($employees)
                <div class="row ">
                    <div class="col-sm-12">
                        @foreach ($employees as $employee)

                            <div class="rows border col-sm-12 pt-3 d-md-flex align-items-center justify-content-center"
                                style="min-height: 150px">
                                <div class="col-sm-12 mt-sm-2 mt-0 col-md-4 ">
                                    <h4>ID: {{ $employee->id }}</h4>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <h4>{{ $employee->firstname . ' ' . $employee->lastname }}</h4>
                                </div>
                                <div class="col-sm-12 col-md-4 ">
                                    <div class="d-flex col-sm-6 mx-auto col-md-10 col-lg-8 justify-content-around">

                                        <a href="{{ route('employee-show', $employee->id) }}" class="btn btn-primary"><i
                                                class="far fa-eye"></i></a>
                                        <a href="{{ route('employee-edit', $employee->id) }}" class="btn btn-warning"><i
                                                class="fas fa-edit text-light"></i></a>
                                        <form class="" action="{{ route('employee-delete', $employee->id) }}"
                                            method="post">
                                            @csrf
                                            @method('POST')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
        <div class="mt-4 mx-auto">

            {{ $employees->links() }}
        </div>
    </div>
@endsection
