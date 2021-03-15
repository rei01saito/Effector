@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="/users/{{$user->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>画像</label>
                                <input type="file" class="form-control-file" name="image">
                            </div>
                            <div class="form-group">
                                <label>名前</label>
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                            </div>
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <input type="submit" value="編集完了">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection