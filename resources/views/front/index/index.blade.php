<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>LuckyBeat</title>
        <link href="{{ asset('./css/app.css') }}" rel="stylesheet">
        <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>
        @include('front.components.header')
        
        <main class="main-container">
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
                        <span class="hash-tag-badge">#hash_tag</span>
                    </div>
                    <div class="beat-context">
                    ビートの説明文です。ビートの説明文です。ビートの説明文です。ビートの説明文です。ビートの説明文です。ビートの説明文です。
                    </div>
                    <div class="baet-right-lower">
                        <p class="badge price-badge">¥5000</p>
                    </div>
                <div>
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
                        <span class="hash-tag-badge">#hash_tag</span>
                    </div>
                    <div class="beat-context">
                    ビートの説明文です。ビートの説明文です。ビートの説明文です。ビートの説明文です。ビートの説明文です。ビートの説明文です。
                    </div>
                    <div class="baet-right-lower">
                        <p class="badge price-badge">¥5000</p>
                    </div>
                <div>
            </article><article class="beat-list-item">
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
                        <span class="hash-tag-badge">#hash_tag</span>
                    </div>
                    <div class="beat-context">
                    ビートの説明文です。ビートの説明文です。ビートの説明文です。ビートの説明文です。ビートの説明文です。ビートの説明文です。
                    </div>
                    <div class="baet-right-lower">
                        <p class="badge price-badge">¥5000</p>
                    </div>
                <div>
            </article><article class="beat-list-item">
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
                        {{-- TODO::カスタムのバッジを省くとスタイル崩れる --}}
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
                        <span class="hash-tag-badge">#hash_tag</span>
                    </div>
                    <div class="beat-context">
                    ビートの説明文です。ビートの説明文です。ビートの説明文です。ビートの説明文です。ビートの説明文です。ビートの説明文です。
                    </div>
                    <div class="baet-right-lower">
                        <p class="badge price-badge">¥5000</p>
                    </div>
                <div>
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
                        <span class="hash-tag-badge">#hash_tag</span>
                    </div>
                    <div class="beat-context">
                    ビートの説明文です。ビートの説明文です。ビートの説明文です。ビートの説明文です。ビートの説明文です。ビートの説明文です。
                    </div>
                    <div class="baet-right-lower">
                        <p class="badge price-badge">¥5000</p>
                    </div>
                <div>
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
                        <span class="hash-tag-badge">#hash_tag</span>
                    </div>
                    <div class="beat-context">
                    ビートの説明文です。ビートの説明文です。ビートの説明文です。ビートの説明文です。ビートの説明文です。ビートの説明文です。
                    </div>
                    <div class="baet-right-lower">
                        <p class="badge price-badge">¥5000</p>
                    </div>
                <div>
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

            {{-- TODO::第2フェーズで使う。 --}}
            <div class="search-button-holder">
                <i class="fa fa-search search-icon" aria-hidden="true"></i>
            </div>
        </main>
        @include('front.components.footer')
    </body>
</html>

