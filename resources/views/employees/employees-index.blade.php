@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <ul>
                @if ($employees)

                    @foreach ($employees as $employee)
                        <li>FirstName: <strong> {{ $employee->firstname }}</strong></li>
                        <li>LastName:<strong> {{ $employee->lastname }}</strong></li>
                        <li>{{ $employee->email }}</li>
                        <li>Phone: <strong> {{ $employee->phone }}</strong></li>
                        <a class="btn btn-success" href="{{ route('employee-show', $employee->id) }}">Show</a>
                        <a class="btn btn-warning" href="{{ route('employee-edit', $employee->id) }}">Edit</a>
                        <hr>
                        <br>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
@endsection
