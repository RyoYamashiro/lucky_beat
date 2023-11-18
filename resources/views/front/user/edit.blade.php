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

            @include('front.components.form.text', [
                'name' => 'name',
                'label' => 'ユーザーID',
                'context' => '※半角英数字と半角アンダーバー(_)で、他ユーザーと被らない文字列を入力してください。',
                'required' => true
            ])

            @include('front.components.form.email', [
                'name' => 'email',
                'label' => 'メールアドレス',
                'context' => '',
                'required' => true
            ])

            @include('front.components.form.textarea', [
                'name' => 'bio',
                'label' => '自己紹介文',
                'context' => '',
                'required' => false
            ])


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
@endsection