@extends('layouts.app')

@section('content')
<div class="white-holder justify-space-between">
    <div>
        <div class="user-icon-holder">
            <img />
        </div>
        <a href="{{ route('user.edit', ['user' => $user]) }}">編集</a>
    </div>


    <div class="user-info">
            <p class="user-name text-primary">{{ $user->name }}</p>
        <span class="user-bio">
            {{-- TODO::リレーションのプロフィールデータのbioから取得。サニタイズもする。 --}}
            {{ optional($user->profile)->bio }}
        </span>
    </div>
</div>
<div class="switch-holder">
    <div class="toggle-switch">
        <span class="toggle-switch-item active">マイビート</span>
        <span class="toggle-switch-item">お気に入り</span>
    </div>
</div>

<div class="user-beat-list-holder">
    <article class="beat-list-item">
        <div class="beat-left-side">
            <div class="beat-left-upper">
                <div class="fav-icon-holder">
                    <i class="fa fa-heart fav-icon" aria-hidden="true"></i>
                </div>
                <p class="badge bpm-badge">BPM120</p>
            </div>
            <div class="play-button">
                <i class="fa fa-play play-icon" aria-hidden="true"></i>
            </div>

            <div class="beat-left-lower">
                <p class="badge custom-beat-badge">カスタム</p>
                <p class="badge play-time-badge">3:30</p>
            </div>
        </div>
        <div class="beat-right-side">
            <div class="beat-right-upper">
                <h2 class="beat-title">Beat_Title</h2>
            </div>

            <div class="user-icon-frame"></div>
            <div class="beat-right-middle">
                <span class="hash-tag-badge">#hash_tag</span>
                <span class="hash-tag-badge">#hash_tag</span>
                <span class="hash-tag-badge">#hash_tag</span>
            </div>
            <div class="beat-context">
                ビートの説明文です。ビートの説明文です。ビートの説明文です。
            </div>
            {{-- TODO::値段のバッジが下はみ出す。最悪有料は第2フェーズだから無視する。 --}}
            {{-- <div class="baet-right-lower">
                <p class="badge price-badge">¥5000</p>
            </div> --}}
        </div>
    </article>

    <article class="beat-list-item">
        <div class="beat-left-side">
            <div class="beat-left-upper">
                <div class="fav-icon-holder">
                    <i class="fa fa-heart fav-icon" aria-hidden="true"></i>
                </div>
                <p class="badge bpm-badge">BPM120</p>
            </div>
            <div class="play-button">
                <i class="fa fa-play play-icon" aria-hidden="true"></i>
            </div>

            <div class="beat-left-lower">
                <p class="badge custom-beat-badge">カスタム</p>
                <p class="badge play-time-badge">3:30</p>
            </div>
        </div>
        <div class="beat-right-side">
            <div class="beat-right-upper">
                <h2 class="beat-title">Beat_Title</h2>
            </div>

            <div class="user-icon-frame"></div>
            <div class="beat-right-middle">
                <span class="hash-tag-badge">#hash_tag</span>
                <span class="hash-tag-badge">#hash_tag</span>
                <span class="hash-tag-badge">#hash_tag</span>
            </div>
            <div class="beat-context">
                ビートの説明文です。ビートの説明文です。ビートの説明文です。
            </div>
        </div>
    </article>

    <article class="beat-list-item">
        <div class="beat-left-side">
            <div class="beat-left-upper">
                <div class="fav-icon-holder">
                    <i class="fa fa-heart fav-icon" aria-hidden="true"></i>
                </div>
                <p class="badge bpm-badge">BPM120</p>
            </div>
            <div class="play-button">
                <i class="fa fa-play play-icon" aria-hidden="true"></i>
            </div>

            <div class="beat-left-lower">
                <p class="badge custom-beat-badge">カスタム</p>
                <p class="badge play-time-badge">3:30</p>
            </div>
        </div>
        <div class="beat-right-side">
            <div class="beat-right-upper">
                <h2 class="beat-title">Beat_Title</h2>
            </div>

            <div class="user-icon-frame"></div>
            <div class="beat-right-middle">
                <span class="hash-tag-badge">#hash_tag</span>
                <span class="hash-tag-badge">#hash_tag</span>
                <span class="hash-tag-badge">#hash_tag</span>
            </div>
            <div class="beat-context">
                ビートの説明文です。ビートの説明文です。ビートの説明文です。
            </div>
        </div>
    </article>

    <article class="beat-list-item">
        <div class="beat-left-side">
            <div class="beat-left-upper">
                <div class="fav-icon-holder">
                    <i class="fa fa-heart fav-icon" aria-hidden="true"></i>
                </div>
                <p class="badge bpm-badge">BPM120</p>
            </div>
            <div class="play-button">
                <i class="fa fa-play play-icon" aria-hidden="true"></i>
            </div>

            <div class="beat-left-lower">
                <p class="badge custom-beat-badge">カスタム</p>
                <p class="badge play-time-badge">3:30</p>
            </div>
        </div>
        <div class="beat-right-side">
            <div class="beat-right-upper">
                <h2 class="beat-title">Beat_Title</h2>
            </div>

            <div class="user-icon-frame"></div>
            <div class="beat-right-middle">
                <span class="hash-tag-badge">#hash_tag</span>
                <span class="hash-tag-badge">#hash_tag</span>
                <span class="hash-tag-badge">#hash_tag</span>
            </div>
            <div class="beat-context">
                ビートの説明文です。ビートの説明文です。ビートの説明文です。
            </div>
        </div>
    </article>


    <section class="pagination-holder">
        <p class="pagination-item">
            <span class="pagination-text">|<</span>
        </p>
        <p class="pagination-item">
            <span class="pagination-text">1</span>
        </p>
        <p class="pagination-item">
            <span class="pagination-text">2</span>
        </p>
        <p class="pagination-item pagination-item-active">
            <span class="pagination-text">3</span>
        </p>
        <p class="pagination-item">
            <span class="pagination-text">4</span>
        </p>
        <p class="pagination-item">
            <span class="pagination-text">5</span>
        </p>
        <p class="pagination-item">
            <span class="pagination-text">>|</span>
        </p>
    </section>
</div>
@endsection