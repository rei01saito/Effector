@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="pb-3">詳細情報（サンプル）</h3>
                        <ul>
                            <li>種類</li>
                            <li>メーカー名</li>
                            <li>値段</li>
                            <li>メモ</li>
                            <li>アップロードした日</li>                        
                        </ul>
                        <p style="color:rgb(255, 145, 0)">これらの情報が表示されます。</p>
                        <a href="/" class="btn btn-secondary">トップに戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection