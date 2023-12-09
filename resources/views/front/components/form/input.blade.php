<div class="input-holder
    @if(optional($attribute)['required']) input-required @endif
    @if(optional($attribute)['disabled']) input-disabled @endif
    ">
    <label for="{{ $name }}" class="input-label text-primary">{{ $label }}</label>

    <input
        id="{{ $name }}"
        type="{{ $type }}"
        class="input-form @error($name) is-invalid @enderror"
        name="{{ $name }}" value="{{ old( $name ) }}"
        @if(optional($attribute)['required']) required @endif
        autocomplete="{{ $name }}"
        @if(optional($attribute)['disabled']) disabled @endif
        autofocus>
    @if($context)
    <span class="annotation-text">{{ $context }}</span>
    @endif
    @error( $name )
        <span class="input-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>