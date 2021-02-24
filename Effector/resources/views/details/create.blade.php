@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="#" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>機材の種類</label>
                                <input type="text" class="form-control" name="type">
                            </div>
                            <div class="form-group">
                                <label>メモ</label>
                                <input type="text" class="form-control" name="memo">
                            </div>
                            <div class="form-group">
                                <label>メーカー名</label>
                                <input type="text" class="form-control" name="brand">
                            </div>
                            <div class="form-group">
                                <label>価格</label>
                                <input type="number" class="form-control" name="price">                
                            </div>                    
                                <input type="hidden" value="{{ $id }}">                        
                            <input type="submit" value="詳細を追加する">                
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection