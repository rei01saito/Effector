@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="image-wrapper"><img class='effector-image' src="{{ asset('images/test3.jpg') }}" alt=""></div>
                <h3 class='h3 effector-title'>名前</h3>
                <p class='description'>
                    本来はここにエフェクターの種類をかく。
                </p>
                <a href="" class='btn btn-secondary detail-btn'>詳細を見る</a>
            </div>
        </div>
    </div>
</div>

@endsection
