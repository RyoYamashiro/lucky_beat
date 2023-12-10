<div class="input-holder
    @if(optional($attribute)['required']) input-required @endif
    @if(optional($attribute)['disabled']) input-disabled @endif
    ">
    <label for="{{ $name }}" class="input-label text-primary">{{ $label }}</label>

    <textarea name="{{ $name }}" class="input-form @error($name) is-invalid @enderror" rows="5">{!! old($name, optional($attribute)['value']) !!}</textarea>
    @error($name)
        <span class="input-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>