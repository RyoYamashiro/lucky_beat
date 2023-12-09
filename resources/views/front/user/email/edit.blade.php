@extends('layouts.app')

@section('content')
<div class="white-holder">
    <div class="form-title">
        <span class="form-title-text">メールアドレス編集</span>
    </div>

    <div>
        <form method="POST" action="">
            @csrf
            @include('front.components.form.input', [
                'name' => 'email',
                'label' => 'メールアドレス',
                'type' => 'email',
                'attribute' => [
                    'required' => true,
                    'context' => '※「更新」ボタン押下後に認証メールが届きますので、メール内のリンク押下後にメールアドレス更新が完了します。'
                ]
            ])
            <div class="button-holder">
                <button type="submit" class="button button-success">
                    認証メール送信
                </button>
            </div>
        </form>
    </div>
@endsection
