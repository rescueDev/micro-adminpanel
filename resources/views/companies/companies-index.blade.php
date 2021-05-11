@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <ul>
                @if ($companies)

                    @foreach ($companies as $company)
                        <li>Name: <strong> {{ $company->name }}</strong></li>
                        <li>Email:<strong> {{ $company->email }}</strong></li>
                        <li>{{ $company->logo }}</li>
                        <li>Website: <strong> {{ $company->website }}</strong></li>
                        <a class="btn btn-success" href="{{ route('company-show', $company->id) }}">Show</a>
                        <a class="btn btn-warning" href="{{ route('company-edit', $company->id) }}">Edit</a>

                        <hr>
                        <br>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
@endsection
