@extends('layouts.app')

@section('content')
<div class="white-form-holder">

    <div class="form-title">
        <span class="form-title-text">新しいパスワード設定</span>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="input-holder">
                <label for="email" class="input-label text-primary">メールアドレス</label>

                <input id="email" type="email" class="input-form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="input-error-message" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            
            <div class="input-holder">
                <label for="password" class="input-label text-primary">パスワード</label>

                <input id="password" type="password" class="input-form input-form-error {{--@error('password') is-invalid @enderror --}}" name="password" required autocomplete="new-password">

                {{-- @error('email') --}}
                    <span class="input-error-message" role="alert">
                        {{-- <strong>{{ $message }}</strong> --}}
                        パスワードかメールアドレスが誤っております。
                    </span>
                {{-- @enderror --}}
            </div>

            <div class="input-holder">
                <label for="password-confirm" class="input-label text-primary">確認用パスワード</label>

                <input id="password-confirm" type="password" class="input-form" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="button-holder">
                <button type="submit" class="button button-success">
                    パスワードを更新
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
