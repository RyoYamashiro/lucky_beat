@extends('layouts.app')

@section('content')
    <div class="white-form-holder">
        <div class="form-header">
            <a class="form-header-link" href="#">ユーザー登録ページへ</a>
        </div>

        <div class="form-title">
            <span class="form-title-text">ログイン</span>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="input-holder">
                    <label for="email" class="input-label">メールアドレス</label>

                    <div>
                        <input id="email" type="email" class="input-form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        {{-- @error('email') --}}
                            <span class="input-error-message" role="alert">
                                {{-- <strong>{{ $message }}</strong> --}}
                                メールアドレス形式で入力してください
                            </span>
                        {{-- @enderror --}}
                    </div>
                </div>

                <div class="input-holder">
                    <label for="password" class="input-label">パスワード</label>

                    <div>
                        <input id="password" type="password" class="input-form input-form-error {{--@error('password') is-invalid @enderror --}}" name="password" required autocomplete="current-password">

                        {{-- @error('email') --}}
                            <span class="input-error-message" role="alert">
                                {{-- <strong>{{ $message }}</strong> --}}
                                パスワードかメールアドレスが誤っております。
                            </span>
                        {{-- @enderror --}}
                    </div>
                </div>

                <input class="form-check-input" type="hidden" name="remember" id="remember" value="true">

                <div class="button-holder">
                    @if (Route::has('password.request'))
                        <a class="button button-danger" href="{{ route('password.request') }}">
                            パスワードを忘れた
                        </a>
                    @endif
                    <button type="submit" class="button button-primary">
                        ログイン
                    </button>
                </div>
            </form>
        </div>
@endsection
