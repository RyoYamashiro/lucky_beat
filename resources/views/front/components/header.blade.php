<header class="header">
    <h1 class="logo"><a class="logo-link" href="{{ route('index')}}">LuckyBeat</a></h1>
    <div class="header-right-part">
        {{-- TODO::@authにする --}}
        <a class="user-icon-frame">
            {{-- <img src=""> --}}
        </a>
        <div class="hamburger js-toggle-hamburger-menu">
            <!-- ハンバーガーアイコン -->
            <span class="span1"></span>
            <span class="span2"></span>
            <span class="span3"></span>
            <p class="menu-notation">メニュー</p>
        </div>
    </div>
    <nav class="nav-menu js-nav-menu">
        <ul class="menu">
            <li class="menu-item"><a class="menu-link">トップ</a></li>
            <li class="menu-item"><a class="menu-link">マイページ</a></li>
            <li class="menu-item"><a class="menu-link">トップ</a></li>
            <li class="menu-item"><a class="menu-link">トップ</a></li>
            <li class="menu-item"><a class="menu-link">トップ</a></li>
            <li class="menu-item"><a class="menu-link">退会</a></li>
            <li class="menu-item"><a class="menu-link" href="{{ route('contact')}}">お問い合わせ</a></li>
        </ul>
    </nav>
</header>