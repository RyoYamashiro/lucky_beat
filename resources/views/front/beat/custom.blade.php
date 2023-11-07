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
        <h3 class="beat-length">
            <div class="play-done"></div>
            <span class="play-now"></span>
            <div class="play-yet"></div>
        </h3>
        <div class="beat-operation-button-holder">
            <span class="operation-button operation-button-middle">
                <i class="fad fa-solid fa-backward-step backward-step-icon operation-button-icon"></i>
            </span>

            <span class="operation-button operation-button-big">
                <i class="fa fa-solid fa-play play-icon operation-button-icon big-icon"></i>
            </span>
            <span class="operation-button operation-button-middle">
                <i class="fad fa-solid fa-repeat repeat-icon operation-button-icon"></i>
            </span>
        </div>
        <div class="custom-track-holder beat-operation-button-holder">
            <div class="custom-track-culomn operation-button operation-button-big">
                <i class="fa-solid fa-drum operation-button-icon drum-icon big-icon"></i>
            </div>
            <div class="custom-track-culomn operation-button operation-button-big">
                <i class="fa-solid fa-music operation-button-icon music-icon big-icon"></i>
            </div>
        </div>

        <div class="custom-track-holder beat-operation-button-holder">
        
            <div class="custom-track-culomn operation-button operation-button-big">
                <i class="fa-solid fa-guitar operation-button-icon guitar-icon big-icon"></i>
            </div>
            <div class="custom-track-culomn operation-button operation-button-big">
                <i class="fa-solid fa-hands-clapping operation-button-icon clapping-icon big-icon"></i>
            </div>
        </div>
        <div class="custom-track-holder beat-operation-button-holder">
            <div class="custom-track-culomn operation-button operation-button-big">
            <i class="fa-solid fa-volume-xmark operation-button-icon mute-icon big-icon"></i> 
            </div>
        </div>
        {{-- <div class="hash-tag-holder">
            <span class="hash-tag-badge">#hash_tag</span>
            <span class="hash-tag-badge">#hash_tag</span>
            <span class="hash-tag-badge">#hash_tag</span>
        </div>
        <div class="beat-context">
            ビートの説明ビートの説明ビートの説明ビートの説明ビートの説明ビートの説明ビートの説明ビートの説明ビートの説明ビートの説明ビートの説明
        </div>
        <div class="bottom-button-holder">
            <button class="download-button">
                ダウンロード
            </button>
        </div> --}}
    </div>
@endsection