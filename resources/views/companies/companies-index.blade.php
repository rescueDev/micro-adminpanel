@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <ul>
                @if ($companies)

                    @foreach ($companies as $company)
                        <div class="d-flex card justify-content-around align-items-center">

                            <img src="{{ asset('storage/logos/' . $company->logo) }}" alt="logo" height="100px"
                                width="100px">
                            <h3>Name: <strong> {{ $company->name }}</strong></h3>
                            <h3>Email:<strong> {{ $company->email }}</strong></h3>
                            <h3>{{ $company->logo }}</h3>
                            <h3>Website: <strong> {{ $company->website }}</strong></h3>
                            <div>

                                <a class="btn btn-success" href="{{ route('company-show', $company->id) }}">Show</a>
                                <a class="btn btn-warning" href="{{ route('company-edit', $company->id) }}">Edit</a>
                            </div>
                        </div>

                        <hr>
                        <br>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
@endsection
