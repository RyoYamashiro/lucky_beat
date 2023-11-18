<div class="input-holder @if($required) input-required @endif">
    <label for="{{ $name }}" class="input-label text-primary">{{ $label }}</label>

    <div>
        <input id="email" type="email" class="input-form" disabled name="{{ $name }}" value="{{ old($name) }}" required autocomplete="{{ $name }}" autofocus>
        {{-- @error($name) --}}
            <span class="input-error-message" role="alert">
                {{-- <strong>{{ $message }}</strong> --}}
                メールアドレス形式で入力してください。
            </span>
        {{-- @enderror --}}
    </div>
</div>