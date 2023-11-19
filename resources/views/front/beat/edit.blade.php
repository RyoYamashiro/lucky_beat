@extends('layouts.app')

@section('content')
<div class="white-holder">

    <div class="form-title">
        <span class="form-title-text">ビート編集</span>
    </div>
    <div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            @include('front.components.form.input', [
                'name' => 'title',
                'label' => 'ビートのタイトル',
                'type' => 'text',
                'context' => '※半角英数字と半角アンダーバー(_)で、他ユーザーと被らない文字列を入力してください。',
                'required' => true
            ])
            
            <div class="justify-space-between">
                @include('front.components.form.input_half', [
                    'name' => 'bpm',
                    'label' => 'BPM',
                    'type' => 'number',
                    'context' => '',
                    'required' => true
                ])

                <div class="input-holder input-half">
                    <label for="custom" class="input-label text-primary">カスタムビート</label>

                    <div class="input-radio-holder">
                        <label for="custom" class="input-label input-radio-label">
                            <input type="radio" class="input-radio" checked name="custom" value="0" autocomplete="custom" autofocus>
                            無
                        </label>
                        <label for="custom" class="input-label input-radio-label">
                            <input type="radio" class="input-radio" name="custom" value="1" autocomplete="custom" autofocus>
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
        </div>

        
            <div class="input-holder input-required">
                <label for="title" class="input-label text-primary">サウンド</label>
                <div class="justify-space-between">
                    <label class="input-file-holder">
                        <input id="name" type="file" class="input-file @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                        サンプル
                    </label>
                    <label class="input-file-holder">
                        <input id="name" type="file" class="input-file @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                        メイン
                    </label>
                </div>
                {{-- @error('title') --}}
                    <span class="input-error-message" role="alert">
                        {{-- <strong>{{ $message }}</strong> --}}
                        文字列で入力してください。
                    </span>
                {{-- @enderror --}}
            </div>

            <div class="input-holder">
                <div class="display-flex">
                    <label for="image" class="input-label text-primary">画像</label>
                    <span class="annotation-text">※一覧でのサムネイルとプレイヤーでのジャケット画像として表示</span>
                </div>
                <label class="input-image-form">
                    <img />画像ファイルを<br>選択してください
                <input type="file" name="image">
            </label>
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