@extends('layouts.app')

@section('content')
<div class="white-holder">
    <div class="form-header">
        <a class="form-header-link" href="#">ログインページへ</a>
    </div>

    <div class="form-title">
        <span class="form-title-text">パスワード再設定</span>
    </div>

    <div>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="input-holder">
                <label for="email" class="input-label text-primary">メールアドレス</label>

                <input id="email" type="email" class="input-form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="input-error-message" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="button-holder">
                <button type="submit" class="button button-success">
                    トークンをメールに送る
                </button>
            </div>
        </form>
    </div>
@endsection
