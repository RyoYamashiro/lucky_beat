@extends('layouts.app')

@section('content')
<div class="white-holder">

    <div class="form-title">
        <span class="form-title-text">アカウント設定</span>
    </div>
        <div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-holder">
                    <label for="name" class="input-label text-primary">アイコン画像</label>
                    <div class="input-icon-form">
                        <img />
                    </div>
                    <span class="annotation-text text-center">↑の丸をタップすると画像選択できます。</span>
                </div>

                <div class="input-holder">
                    <label for="name" class="input-label text-primary">ユーザーID</label>

                    <input id="name" type="text" class="input-form @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <span class="annotation-text">※半角英数字と半角アンダーバー(_)で、他ユーザーと被らない文字列を入力してください。</span>
                    {{-- @error('name') --}}
                        <span class="input-error-message" role="alert">
                            {{-- <strong>{{ $message }}</strong> --}}
                            文字列で入力してください。
                        </span>
                    {{-- @enderror --}}
                </div>
                <div class="input-holder">
                    <label for="email" class="input-label text-primary">メールアドレス</label>

                    <div>
                        <input id="email" type="email" class="input-form input-form-disabled" disabled name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        {{-- @error('email') --}}
                            <span class="input-error-message" role="alert">
                                {{-- <strong>{{ $message }}</strong> --}}
                                メールアドレス形式で入力してください。
                            </span>
                        {{-- @enderror --}}
                    </div>
                </div>

                <div class="input-holder">
                    <label for="password" class="input-label text-primary">自己紹介文</label>

                    <textarea class="input-form input-form-error {{--@error('password') is-invalid @enderror --}}" rows="5"></textarea>
                    {{-- @error('email') --}}
                        <span class="input-error-message" role="alert">
                            {{-- <strong>{{ $message }}</strong> --}}
                            パスワードかメールアドレスが誤っております。
                        </span>
                    {{-- @enderror --}}
                </div>


                <div class="button-holder">
                    <div>
                        <a class="button button-cancel" href="">{{-- TODO::遷移先はブラウザバックにする。 --}}
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
        </div>
    </div>
</div>
@endsection