@extends('layouts.app')

@section('content')
<div class="white-holder">

    <div class="form-title">
        <span class="form-title-text">アカウント設定</span>
    </div>
    <div>
        <form method="POST" action="{{ route('user.update', ['user' => $user]) }}">
            @csrf
            {{-- TODO::画像登録をリアルタイムのAPI処理で入れる。Vue.js --}}
            <div class="input-holder">
                <label for="name" class="input-label text-primary">アイコン画像</label>
                <div class="input-icon-form">
                    <img />
                </div>
                <span class="annotation-text text-center">↑の丸をタップすると画像選択できます。</span>
            </div>

            @include('front.components.form.input', [
                'name' => 'name',
                'label' => 'ユーザー名',
                'type' => 'text',
                'attribute' => [
                    'required' => true,
                    'value' => $user->name,
                    // 'context' => '※半角英数字と半角アンダーバー(_)で、他ユーザーと被らない文字列を入力してください。',
                ]
            ])

            @include('front.components.form.input', [
                'name' => 'email',
                'label' => 'メールアドレス',
                'type' => 'email',
                'attribute' => [
                    'disabled' => true,
                    'value' => $user->email
                ]
            ])

            <div class="button-holder">
                @empty($user->email_verified_at)
                    <a class="button button-danger" href="{{ route('verification.send_again') }}">認証メール再送信</a>
                    {{-- TODO::①Post送信のverification.resendにする。jsのconfirmで送信してもいいですか？のメッセージ表示 --}}
                @endempty

                <a href="{{ route('user.email.edit', ['user' => $user]) }}" class="button button-success">メールアドレス変更</a>
            </div>
            @include('front.components.form.textarea', [
                'name' => 'bio',
                'label' => '自己紹介文',
                'attribute' => [
                    'value' => optional($user->profile)->bio,
                ]
            ])


            <div class="button-holder">
                <div>
                    <a class="button button-cancel" href="{{ route('user.detail', ['user' => $user]) }}">
                        キャンセル
                    </a>
                </div>
                <div>
                    <button type="submit" class="button button-success button-large">
                        登録
                    </button>
                </div>
            </div>
        </form>
        {{-- TODO::本当の認証メール送信処理。導入後「route('verification.send-again')」は削除 --}}
        {{-- <form action="{{ route('verification.resend')}}" method="post">
            @csrf
            <button>認証メールを送る</button>
        </form> --}}
    </div>
</div>
@endsection