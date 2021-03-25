@extends('layouts.app')

@section('content')

@guest
    <div class="row justify-content-center pb-4">
        <div class="col-md-10">
            <div class="card" style="background-color:rgb(223, 219, 219)">
                <div class="card-body">
                    <div class="description pb-4">
                        <h2>〜Guitarist Memoについて〜</h2>
                        <p>自分が持っている機材の情報を登録し、管理することができます。</p>
                        <p>機材を登録することで、今まで使っていなかった物に対しても新しい発見があるかもしれません。</p>
                    </div>
                    <div class="border-bottom border-dark pt-3">
                        <h5>使用方法</h5>
                    </div>
                    <div class="description">
                        <p class="pt-2">①右上からユーザー情報を登録してください。<br>登録が完了すると機材登録の画面に遷移します。</p>
                        <p class="pt-2">②機材情報を登録して下さい。完了すると以下のような登録した機材一覧のページに飛びます。</p>                                     
                        <div class="image-wrapper pt-2"><img class='effector-image' src="{{ asset('images/test3.jpg') }}" alt=""></div>
                        <h3 class='h3 effector-title pt-2'>名前</h3>
                        <a href="{{ route('sample') }}" class="btn btn-secondary">詳細を見る</a>
                        <p class="pt-4">③登録した機材の詳細な情報も登録、確認することができます。<br></p>
                        <button class="btn btn-outline-secondary">詳細を追加する</button><button class="btn btn-secondary">詳細を見る</button>
                        <p class="pt-2">詳細情報が登録されていなければ"詳細を追加する"のボタン、登録されていれば"詳細を見る"のボタンが表示されます。詳細情報を登録した後も自由にその情報を編集することができます。</p>
                    </div>
                    <div class="border-bottom border-dark pt-3">
                        <h5>登録はこちらから</h5>
                    </div>
                    <div class="to_register pt-2"><a href="{{ route('register') }}" class="btn btn-primary">{{ __('Register') }}</a></div>
                    <div class="border-bottom border-dark pt-3">
                        <h5>お試しログインはこちら</h5>
                    </div>
                    <div class="to_login pt-2">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input type="hidden" name="email" value="TestUser@mail.com">
                            <input type="hidden" name="password" value="password">
                            <input type="submit" class="btn btn-primary" value="お試しログイン">
                        </form>    
                    </div>
                </div>                
            </div>            
        </div>
    </div>

@else
    <div class="row justify-content-center row-eq-height pt-4">
        @foreach ($effectors as $eff)
            <div class="col-md-4 py-2">
                <div class="card">
                    <div class="card-body">
                        @if(!empty($eff->image))
                            <div class="image-wrapper"><img src="{{ asset('storage/images/'.$eff->image) }}"></div>
                        @else
                            <div class="image-wrapper"><div class="no-image"><p>imgなし</p></div></div>
                        @endif
                        <h3 class="h3 effector-title">{{ $eff->name }}</h3>

                        @if ($eff->detail_status === 1)
                            <a href="{{ route('show', ['id' => $eff->id ]) }}" class="btn btn-secondary detail-btn">詳細を読む</a>
                        @else
                            <a href="{{ route('detail_create', ['id' => $eff->id ]) }}" class="btn btn-outline-secondary">詳細を追加する</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endguest

@endsection
