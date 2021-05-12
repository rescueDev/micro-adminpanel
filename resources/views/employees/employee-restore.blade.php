@extends('layouts.app')
@section('content')

    <div class="container">

        <div class="row justify-content-center">
            <div class="pt-4 col-md-8">
                @if (count($deletedEmployees))
                    <div class="mx-2 pt-4 row d-flex align-items-center">

                        <a href="{{ route('employees-index') }}" class="text-center">
                            <button class="btn btn-outline-primary">&#171; Back to Employees</button>
                        </a>

                        <h2 class="px-3">{{ __('Restore Employee') }}</h2>
                    </div>
                    <div class=" mb-5 p-5">
                        <form method="POST" action="{{ route('employee-restore') }}">
                            @csrf
                            @method('POST')

                            <div class="">
                                <div class="form-group">
                                    <label for="name" class="p-3">{{ __('Employee Name') }}</label>

                                    <select class="form-control" name="name" id="name">
                                        @foreach ($deletedEmployees as $employee)
                                            <option value="{{ $employee->id }}">
                                                {{ $employee->firstname . ' ' . $employee->lastname }}</option>

                                        @endforeach
                                    </select>
                                </div>

                                <div class="">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Restore') }}
                                    </button>
                                </div>

                            </div>

                        </form>

                    </div>
                @else
                    <div class="col-12 text-center">
                        <h1>No employees to restore</h1>

                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
