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
    @foreach ($effectors as $eff)
        <div class="col-md4">
            <div class="card">
                <div class="card-body">
                    @if(!empty($eff->image))
                        <div class="image-wrapper"><img src="{{ asset('storage/images/'.$eff->image) }}"></div>
                    @else
                        <div class="image-wrapper"><p>imgなし<p></div>
                    @endif
                    <h3 class="h3 effector-title">{{ $eff->name }}</h3>
                    <a href="" class="btn btn-secondary detail-btn">詳細を読む</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
