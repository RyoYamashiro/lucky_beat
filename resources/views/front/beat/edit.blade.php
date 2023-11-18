@extends('layouts.app')

@section('content')
<div class="white-holder">

    <div class="form-title">
        <span class="form-title-text">ビート編集</span>
    </div>
    <div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-holder">
                <label for="title" class="input-label text-primary">ビートのタイトル</label>

                <input id="name" type="text" class="input-form @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                {{-- @error('title') --}}
                    <span class="input-error-message" role="alert">
                        {{-- <strong>{{ $message }}</strong> --}}
                        文字列で入力してください。
                    </span>
                {{-- @enderror --}}
            </div>
            
            <div class="input-holder">
                <label for="bpm" class="input-label text-primary">BPM</label>

                <div>
                    <input id="bpm" type="number" class="input-form" disabled name="bpm" value="{{ old('email') }}" required autocomplete="bpm" autofocus>

                    {{-- @error('bpm') --}}
                        <span class="input-error-message" role="alert">
                            {{-- <strong>{{ $message }}</strong> --}}
                            240以下の数字で入力してください。
                        </span>
                    {{-- @enderror --}}
                </div>
            </div>

            <div class="input-holder">
                <label for="custom" class="input-label text-primary">カスタムビート</label>

                <div>
                    <label for="custom" class="input-label text-primary">
                        <input type="radio" class="input-form" disabled name="custom" value="0" autocomplete="custom" autofocus>
                        無
                    </label>
                    <label for="custom" class="input-label text-primary">
                        <input type="radio" class="input-form" disabled name="custom" value="1" autocomplete="custom" autofocus>
                        有
                    </label>
                    
                    {{-- @error('bpm')
                        <span class="input-error-message" role="alert">
                            <strong>{{ $message }}</strong>
                            メールアドレス形式で入力してください。
                        </span>
                    @enderror --}}
                </div>
            </div>

            <div class="input-holder">
                <label for="title" class="input-label text-primary">サウンド</label>

                <input id="name" type="text" class="input-form @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                {{-- @error('title') --}}
                    <span class="input-error-message" role="alert">
                        {{-- <strong>{{ $message }}</strong> --}}
                        文字列で入力してください。
                    </span>
                {{-- @enderror --}}
            </div>

            <div class="input-holder">
                <label for="name" class="input-label text-primary">画像</label>
                <span class="annotation-text text-center">※一覧でのサムネイルとプレイヤーでのジャケット画像として表示</span>
                <div class="input-icon-form">
                    <img />
                </div>
            </div>

            <div class="input-holder">
                <label for="title" class="input-label text-primary">ハッシュタグ</label>

                <div class="hash-tag-holder">
                    <span class="hash-tag-badge">#hash_tag</span>
                    <span class="hash-tag-badge">#hash_tag</span>
                    <span class="hash-tag-badge">#hash_tag</span>
                </div>

                {{-- @error('title') --}}
                    <span class="input-error-message" role="alert">
                        {{-- <strong>{{ $message }}</strong> --}}
                        文字列で入力してください。
                    </span>
                {{-- @enderror --}}
            </div>
            

            <div class="input-holder">
                <label for="password" class="input-label text-primary">説明</label>

                <textarea class="input-form input-form-error {{--@error('explanation') is-invalid @enderror --}}" name="explanation" rows="5"></textarea>
                {{-- @error('email') --}}
                    <span class="input-error-message" role="alert">
                        {{-- <strong>{{ $message }}</strong> --}}
                        パスワードかメールアドレスが誤っております。
                    </span>
                {{-- @enderror --}}
            </div>


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