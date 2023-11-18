<div class="input-holder @if($required) input-required @endif">
    <label for="name" class="input-label text-primary">{{ $label }}</label>

    <input id="{{ $name }}" type="text" class="input-form @error($name) is-invalid @enderror" name="{{ $name }}" value="{{ old( $name ) }}" required autocomplete="{{ $name }}" autofocus>
    @if($context)
    <span class="annotation-text">{{ $context }}</span>
    @endif
    {{-- @error( $name ) --}}
        <span class="input-error-message" role="alert">
            {{-- <strong>{{ $message }}</strong> --}}
            文字列で入力してください。
        </span>
    {{-- @enderror --}}
</div>