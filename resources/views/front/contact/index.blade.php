@extends('layouts.app')

@section('content')
    <div class="white-holder">
        <div class="form-header">
            <a class="form-header-link" href="#">トップページへ</a>
        </div>

        <div class="form-title">
            <span class="form-title-text">お問い合わせ</span>
        </div>

        <div>
            <form method="POST" action="{{ route('contact') }}">
                @csrf

                <div class="input-holder">
                    <label for="email" class="input-label text-primary">メールアドレス</label>

                    <input id="email" type="email" class="input-form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    {{-- @error('email') --}}
                        <span class="input-error-message" role="alert">
                            {{-- <strong>{{ $message }}</strong> --}}
                            メールアドレス形式で入力してください
                        </span>
                    {{-- @enderror --}}
                </div>

                <div class="input-holder">
                    <label for="email" class="input-label text-primary">氏名</label>

                    <input id="email" type="email" class="input-form @error('name') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    {{-- @error('name') --}}
                        <span class="input-error-message" role="alert">
                            {{-- <strong>{{ $message }}</strong> --}}
                            氏名は必須入力です。
                        </span>
                    {{-- @enderror --}}
                </div>

                <div class="input-holder">
                    <label for="content" class="input-label text-primary">お問い合わせ内容</label>

                    <textarea id="content" class="input-form input-form-error {{--@error('content') is-invalid @enderror --}}" name="content" required rows="8">
                    </textarea>
                    {{-- @error('content') --}}
                        <span class="input-error-message" role="alert">
                            {{-- <strong>{{ $message }}</strong> --}}
                            お問い合わせ内容は必須入力です。
                        </span>
                    {{-- @enderror --}}
                </div>

                <div class="button-holder">
                    <button type="submit" class="button button-success">
                        送信
                    </button>
                </div>
            </form>
        </div>
@endsection
