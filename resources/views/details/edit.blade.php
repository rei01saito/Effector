@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            @foreach ($details as $detail)
                                <div class="form-group">
                                    <label>機材の種類</label>
                                    <input type="text" class="form-control" name="type" placeholder="{{ $detail->type }}">
                                </div>
                                <div class="form-group">
                                    <label>メーカー名</label>
                                    <input type="text" class="form-control" name="brand" placeholder="{{ $detail->brand }}">
                                </div>
                                <div class="form-group">
                                    <label>メモ</label>
                                    <input type="text" class="form-control" name="memo" placeholder="{{ $detail->memo }}">
                                </div>
                                <div class="form-group">
                                    <label>価格</label>
                                    <input type="text" class="form-control" name="price" placeholder="{{ $detail->price }}">
                                </div>
                                <input type="submit" class="btn btn-primary" value="更新する">
                                <a href="{{ route('show', ['id' => $detail->effector_id]) }}" class="btn btn-secondary">詳細情報に戻る</a>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection