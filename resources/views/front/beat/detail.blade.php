@extends('layouts.app')

@section('content')
    <div class="white-holder beat-detail">
        <div class="content-haeder">
            <a class="back-link">&lt;戻る</a>
            <div class="toggle-swtich">
                <span class="toggle-swtich-item active">通常</span>
                <span class="toggle-swtich-item">カスタム</span>
            </div>
        </div>

        <div class="beat-main-image">
        </div>
        <h2 class="beat-title">
            ビートのタイトル
        </h2>
        ビートの尺
        <i class="fad fa-solid fa-backward-step"></i>
        <i class="fa fa-solid fa-play"></i>
        <i class="fad fa-solid fa-repeat" aria-hidden="true"></i>
        <span class="hash-tag-badge">#hash_tag</span>
        <span class="hash-tag-badge">#hash_tag</span>
        <span class="hash-tag-badge">#hash_tag</span>

        ビートの説明ビートの説明ビートの説明ビートの説明ビートの説明ビートの説明ビートの説明ビートの説明ビートの説明ビートの説明ビートの説明
        ダウンロード
    </div>
@endsection