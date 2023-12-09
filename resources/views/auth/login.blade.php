@extends('layouts.app')

@section('content')
    <div class="white-holder">
        <div class="form-header">
            <a class="form-header-link" href="{{ route('register') }}">ユーザー登録ページへ</a>
        </div>

        <div class="form-title">
            <span class="form-title-text">ログイン</span>
        </div>

        <div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                @include('front.components.form.input', [
                    'name' => 'email',
                    'label' => 'メールアドレス',
                    'type' => 'email',
                    'context' => '',
                    'attribute' => [
                        'required' => true
                    ]
                ])

                @include('front.components.form.input', [
                    'name' => 'password',
                    'label' => 'パスワード',
                    'type' => 'password',
                    'context' => '',
                    'attribute' => [
                        'required' => true
                    ]
                ])

                <input class="form-check-input" type="hidden" name="remember" id="remember" value="true">

                <div class="button-holder">
                    @if (Route::has('password.request'))
                        <a class="button button-danger" href="{{ route('password.request') }}">
                            パスワードを忘れた
                        </a>
                    @endif
                    <button type="submit" class="button button-success">
                        ログイン
                    </button>
                </div>
            </form>
        </div>
@endsection
