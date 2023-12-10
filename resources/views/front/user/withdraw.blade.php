@extends('layouts.app')

@section('content')
<div class="white-holder">
    <div class="form-title">
        <span class="form-title-text">退会</span>
    </div>

    <div>
        <form method="POST" action="{{ route('user.withdraw', ['user' => $user]) }}">
            @csrf
            {{-- TODO::説明文を定かにする。 --}}
            下記「退会する」ボタン押下後に、アカウントの情報が削除されます。<br>
            今一度アカウント情報を確認した上で削除のほどよろしくお願いします。
            <div class="button-holder">
                <button type="submit" class="button button-success">
                    退会する
                </button>
            </div>
        </form>
    </div>
@endsection
