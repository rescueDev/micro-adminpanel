@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12  d-flex justify-content-center mt-4">
                <div class="card text-center">
                    <div class="card-header">Company</div>
                    <h1>{{ $company->name }}</h1>
                    <h1>{{ $company->email }}</h1>
                    <h1>{{ $company->logo }}</h1>
                    <h1>{{ $company->wesite }}</h1>

                </div>
            </div>
        </div>
    </div>
@endsection
