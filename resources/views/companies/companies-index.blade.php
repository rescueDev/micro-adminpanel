@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="text-center mt-4 mb-4">
                <a class="btn btn-outline-success" href="{{ route('company-create') }}">New Company</a>
            </div>

            @if ($companies)
                @foreach ($companies as $company)


                    <div class="col-10 mx-auto">
                        <div class="border d-flex text-center justify-content-around align-items-center"
                            style="height:150px ">
                            <div class="col">
                                @if ($company->logo)
                                    <img class="" src="{{ asset('storage/logos/' . $company->logo) }}" alt="logo"
                                        width="100px" height="100px">
                                @else
                                    <img class="" src="{{ asset('storage/nologo.png') }}" alt="logo" width="100px"
                                        height="100px">
                                @endif

                            </div>
                            <div class="col text-left pl-4">
                                <h4>{{ $company->name }}</h4>
                            </div>
                            <div class="col">

                                <a href="{{ route('company-show', $company->id) }}" class="btn btn-primary">Show</a>
                                <a href="{{ route('company-edit', $company->id) }}" class="btn btn-warning">Edit</a>
                            </div>
                            <form action="{{ route('company-delete', $company->id) }}" method="post">
                                @csrf
                                @method('POST')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
        </div>
        @endif
    </div>
    <div class="row">
        <div class="mt-3 mx-auto">
            {{ $companies->links() }}
        </div>

    </div>



    </div>
@endsection
