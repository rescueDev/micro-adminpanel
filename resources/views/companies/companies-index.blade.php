@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="text-center mt-4 mb-4">
                <a class="btn btn-outline-success" href="{{ route('company-create') }}">New Company</a>
            </div>

            @if ($companies)
                <div class="d-flex flex-wrap col-12">
                    @foreach ($companies as $company)
                        <div class="col-4 mt-2">
                            <div class="card text-center">
                                <div class="card-header mb-2">
                                    <h2>{{ $company->name }}</h2>
                                </div>
                                <img class="img-thumbnail mx-auto" src="{{ asset('storage/logos/' . $company->logo) }}"
                                    alt="logo" width="100px" height="100px">
                                <div class="card-body">

                                    <a href="{{ route('company-show', $company->id) }}" class="btn btn-primary">Show</a>
                                    <a href="{{ route('company-edit', $company->id) }}" class="btn btn-warning">Edit</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="page mx-auto">

            {{ $companies->links() }}
        </div>
    </div>
@endsection
