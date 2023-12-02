@extends('layouts.app')

@section('content')
<div class="white-holder">
    <div class="form-header">
        <a class="form-header-link" href="{{ route('login') }}">ログインページへ</a>
    </div>

    <div class="form-title">
        <span class="form-title-text">ユーザー登録</span>
    </div>
        <div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                {{-- TODO::requiredを任意入力にしたい。 --}}
                @include('front.components.form.input', [
                    'name' => 'name',
                    'label' => 'ユーザー名',
                    'type' => 'text',
                    // 'context' => '※半角英数字と半角アンダーバー(_)で、他ユーザーと被らない文字列を入力してください。',
                    'context' => '',
                    'required' => true
                ])
                
                @include('front.components.form.input', [
                    'name' => 'email',
                    'label' => 'メールアドレス',
                    'type' => 'email',
                    'context' => '',
                    'required' => true
                ])

                @include('front.components.form.input', [
                    'name' => 'password',
                    'label' => 'パスワード',
                    'type' => 'password',
                    'context' => '',
                    'required' => true
                ])

                @include('front.components.form.input', [
                    'name' => 'password_confirmation',
                    'label' => '確認用パスワード',
                    'type' => 'password',
                    'context' => '',
                    'required' => true
                ])
                <div class="input-holder">
                    <div class="input-label-holder">
                        <label for="password-confirm" class="input-label text-success">利用規約</label>
                    </div>
                    <div class="checkbox-holder">
                        <input class="input-checkbox @error('term') is-invalid @enderror" type="checkbox" name="term" id="term">
                        <p class="annotation-text"><a class="strong-text">こちら</a>を確認し、問題なければチェックしてください。</p>
                    </div>
                    @error('term')
                        <span class="input-error-message" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="button-holder">
                    @if (Route::has('password.request'))
                        <div>
                            <a class="button button-danger" href="{{ route('password.request') }}">
                                パスワードを忘れた
                            </a>
                        </div>
                    @endif
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
