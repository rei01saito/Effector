@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h3 class="pb-3">詳細情報</h3>
                        <ul>
                            @foreach ($details as $details)
                                <li>{{ $details->type }}</li>
                                <li>{{ $details->brand }}</li>
                                <li>{{ $details->price }}円</li>
                                <li>{{ $details->memo }}</li>
                                <li>{{ $details->updated_at }}</li>
                        </ul>
                                <a href="#"></a>
                            @endforeach
                        <a href="{{ route('index') }}" class="btn btn-primary">機材一覧に戻る</a>
                        <a href="{{ route('detail_edit', ['id'=>$details->effector_id]) }}" class="btn btn-secondary">編集する</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection