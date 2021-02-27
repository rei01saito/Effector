@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        @if (!empty($user->user_image))
                            <img src="#">
                        @else
                            <img src={{ asset('images/test_user.png') }}>
                        @endif
                        
                
                        <h1 class="pt-4">Name: {{ $user->name }}</h1>
                        <h2 class="pt-2">Email: {{ $user->email }}</h1>
                        <h2 class="pt-2">ID: {{ $user->id }}</h1>
                        <a href="{{ route('user_edit', ['id'=>$user->id]) }}">編集する</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection