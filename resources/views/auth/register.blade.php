@extends('layouts.app')

@section('content')
<div class="white-form-holder">
    <div class="form-header">
        <a class="form-header-link" href="#">ログインページへ</a>
    </div>

    <div class="form-title">
        <span class="form-title-text">ユーザー登録</span>
    </div>
        <div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="input-holder">
                    <label for="name" class="input-label text-primary">ユーザーID</label>

                    <div>
                        <input id="name" type="text" class="input-form @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        {{-- @error('name') --}}
                            <span class="input-error-message" role="alert">
                                {{-- <strong>{{ $message }}</strong> --}}
                                文字列で入力してください。
                            </span>
                        {{-- @enderror --}}
                    </div>
                </div>
                <div class="input-holder">
                    <label for="email" class="input-label text-primary">メールアドレス</label>

                    <div>
                        <input id="email" type="email" class="input-form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        {{-- @error('email') --}}
                            <span class="input-error-message" role="alert">
                                {{-- <strong>{{ $message }}</strong> --}}
                                メールアドレス形式で入力してください。
                            </span>
                        {{-- @enderror --}}
                    </div>
                </div>

                <div class="input-holder">
                    <label for="password" class="input-label text-primary">パスワード</label>

                    <div>
                        <input id="password" type="password" class="input-form input-form-error {{--@error('password') is-invalid @enderror --}}" name="password" required autocomplete="new-password">

                        {{-- @error('email') --}}
                            <span class="input-error-message" role="alert">
                                {{-- <strong>{{ $message }}</strong> --}}
                                パスワードかメールアドレスが誤っております。
                            </span>
                        {{-- @enderror --}}
                    </div>
                </div>

                <div class="input-holder">
                    <label for="password-confirm" class="input-label text-primary">確認用パスワード</label>

                    <div>
                        <input id="password-confirm" type="password" class="input-form" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="input-holder">
                    <div class="input-label-holder">
                        <label for="password-confirm" class="input-label text-success">利用規約</label>
                    </div>
                    {{-- TODO::チェックボックスと他文字のスタイル効かせよう fontawesomeで良いかも --}}
                    <div class="checkbox-holder">
                        <input class="input-checkbox" type="checkbox" name="term" id="term">
                        <p class="annotation-text"><a class="strong-text">こちら</a>を確認し、問題なければチェックしてください。</p>
                    </div>
                </div>

                <div class="button-holder">
                    @if (Route::has('password.request'))
                        <a class="button button-danger" href="{{ route('password.request') }}">
                            パスワードを忘れた
                        </a>
                    @endif
                    <button type="submit" class="button button-success">
                        登録
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
