@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <img src="#">
                        <h1 class="pt-4">Name: {{ $user->name }}</h1><a href="#">編集する</a>
                        <h2 class="pt-2">Email: {{ $user->email }}</h1><a href="#">編集する</a>
                        <h2 class="pt-2">ID: {{ $user->id }}</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection