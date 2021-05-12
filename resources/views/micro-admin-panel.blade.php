@extends('layouts.app')
@section('content')
    {{-- <div class="container-fluid"> --}}
    <div class="jumbotron jumbotron-fluid"
        style="height: 50vh;   background: linear-gradient(rgba(0, 0, 0, .4), rgba(0, 0, 0, .4)), url('{{ asset('storage/crm.png') }}'); background-size:cover;">
        <div class="py-3 text-center">
            <h1 class="display-sm-2 display-md-4 mb-4 text-light">Welcome to CRM ADMIN PANEL</h1>
            <h4 class="text-light display-sm-2">This is a micro panel service for manage companies and employees</h4>
        </div>
    </div>
    <div class="row text-center no-gutters">
        <div class="col-sm-12 col-md-6 border">
            <div class="p-3" style="height: 300px">
                <h2>Manage Companies</h2>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi tempore, saepe sapiente illum nulla
                    corrupti id iure incidunt laborum eligendi fugiat reprehenderit ipsum ut quos cupiditate assumenda
                    alias beatae consequuntur?</p>
                <a href="#" class="btn btn-outline-dark">Demo</a>
            </div>
        </div>
        <div class="col-sm-12 col-md-6  border">
            <div class="p-3" style="height: 300px">
                <h2>Manage Employees</h2>
                <img src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel nulla inventore neque. Explicabo quod
                    ipsum facere quas ratione magni fugit error quibusdam atque! Dignissimos beatae corporis quis
                    delectus cumque libero?</p>
                <a href="#" class="btn btn-outline-dark">Demo</a>
            </div>
        </div>

    </div>

@endsection
