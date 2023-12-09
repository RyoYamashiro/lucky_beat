<header class="header">
    <h1 class="logo"><a class="logo-link" href="{{ route('index')}}">LuckyBeat</a></h1>
    <div class="header-right-part">
        {{-- TODO::@authにする --}}
        @auth
            <a class="user-icon-frame" href="{{ route('user.detail', ['user' => Auth::user()])}}">
                {{-- <img src=""> --}}
            </a>
        @endauth
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
            @auth
                <li class="menu-item"><a href="{{ route('user.detail', ['user' => Auth::user()]) }}" class="menu-link">マイページ</a></li>
                <li class="menu-item"><a class="menu-link">ビート登録</a></li>
                <li class="menu-item"><a href="{{ route('user.confirm_withdraw', Auth::user())}}" class="menu-link">退会</a></li>
            @endauth
            
            <li class="menu-item"><a class="menu-link" href="{{ route('contact')}}">お問い合わせ</a></li>
            
            @auth
                <form class="menu-item" action="{{ route('logout' )}}" method="post">
                @csrf
                    <input type="submit" class="menu-link" value="ログアウト"></button>
                </form>
            @endauth
            @guest
                <li class="menu-item"><a href="{{ route('register') }}" class="menu-link">新規登録</a></li>
                <li class="menu-item"><a href="{{ route('login') }}" class="menu-link">ログイン</a></li>
            @endguest
        </ul>
    </nav>
</header>