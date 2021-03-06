@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
@if ($errors->any())
    <div class="alert alert-danger col-md-10">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>

<div class="row justify-content-center">
    <div class="col-md-10">
        <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label>機材名<label>
                        <input type="text" class="form-control" name="name" placeholder="エフェクターやアンプ">
                    </div>
                    <div class="form-group">
                        <label for="file">画像<label>
                        <input type="file" id="file" class="form-control-file" name="image">
                    </div>
                    <input type="submit" class="btn btn-primary" value="機材を登録">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection