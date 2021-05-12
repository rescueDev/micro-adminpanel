@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12 text-center">
            <div class="col-sm-12 col-md-6 mx-auto mt-3 mb-4"> <a class="btn btn-outline-success"
                    href="{{ route('company-create') }}">New Company</a>
            </div>

            @if ($companies)
                <div class="row ">
                    <div class="col-sm-12">

                        @foreach ($companies as $company)


                            <div class="border col-sm-12 pt-3 d-md-flex align-items-center justify-content-center"
                                style="min-height: 150px">
                                <div class="col-sm-12 mt-sm-2 mt-0 col-md-4 ">
                                    @if ($company->logo)
                                        <img class="" src="{{ asset('storage/logos/' . $company->logo) }}" alt="logo"
                                            width="100px" height="100px">
                                    @else
                                        <img class="" src="{{ asset('storage/nologo.png') }}" alt="logo" width="100px"
                                            height="100px">
                                    @endif

                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <h4>{{ $company->name }}</h4>
                                </div>
                                <div class="col-sm-12 col-md-4 py-2">
                                    <div class="d-flex col-sm-6 mx-auto col-md-10 col-lg-8 justify-content-around">

                                        <a href="{{ route('company-show', $company->id) }}" class="btn btn-primary"><i
                                                class="far fa-eye"></i></a>
                                        <a href="{{ route('company-edit', $company->id) }}" class="btn btn-warning"><i
                                                class="fas fa-edit text-white"></i></a>
                                        <form action="{{ route('company-delete', $company->id) }}" method="post">
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
            @endif
        </div>
    </div>
    <div class="page mt-4 mx-auto">

        {{ $companies->links() }}
    </div>
    </div>
@endsection
