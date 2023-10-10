<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>LuckyBeat</title>
        <link href="{{ asset('./css/app.css') }}" rel="stylesheet">
        <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>
        <header class="header">
            <h1 class="logo">LuckyBeat</h1>
            <div class="header-right-part">
                <a class="user-icon-frame">
                    {{-- <img src=""> --}}
                </a>
                <div class="hambergar">
                    <!-- ハンバーガーアイコン -->
                    <span class="span1"></span>
                    <span class="span2"></span>
                    <span class="span3"></span>
                    <p class="menu-notation">メニュー</p>
                </div>

            </div>
        </header>
        
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
                <div>
                Beat_Title
                <div>usericon</div>
                #hash_tag
                #hash_tag
                #hash_tag
                #hash_tag
                ビートの説明文です。ビートの説明文です。ビートの説明文です。ビートの説明文です。ビートの説明文です。
                <p class="badge">¥5000</p>
                <div>
            </article>

            

            <i class="fa fa-search" aria-hidden="true"></i>

        |<
        1
        2
        3
        >|
        </main>
        <footer class="footer">
            Copyright © 2023 ryo_lio All Rights Reserved.
        </footer>
    </body>
</html>

