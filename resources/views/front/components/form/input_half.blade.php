<div class="input-holder input-half 
    @if(optional($attribute)['required']) input-required @endif
    @if(optional($attribute)['disabled']) input-disabled @endif
">
    <label for="{{ $name }}" class="input-label text-primary">{{ $label }}</label>

    <input id="{{ $name }}" type="{{ $type }}" class="input-form @error($name) is-invalid @enderror" name="{{ $name }}"
    value="{{ old($name, optional($attribute)['value']) }}" 
    @if(optional($attribute)['required']) required @endif
    autocomplete="{{ $name }}" autofocus>
    @if(optional($attribute)['context'])
    <span class="annotation-text">{{ optional($attribute)['context'] }}</span>
    @endif
    @error( $name )
        <span class="input-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>