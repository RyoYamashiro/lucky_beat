<div class="input-holder">
    <label for="{{ $name }}" class="input-label text-primary">{{ $label }}</label>

    <input id="{{ $name }}" type="password" class="input-form input-form-error {{--@error($password) is-invalid @enderror --}}" name="{{ $name }}" required autocomplete="current-password">

    {{-- @error($name) --}}
        <span class="input-error-message" role="alert">
            {{-- <strong>{{ $message }}</strong> --}}
            パスワードかメールアドレスが誤っております。
        </span>
    {{-- @enderror --}}
</div>