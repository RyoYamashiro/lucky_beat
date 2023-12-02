<div class="input-holder">
    <label for="{{ $name }}" class="input-label text-primary">{{ $label }}</label>

    <textarea name="{{ $name }}" class="input-form @error($name) is-invalid @enderror" rows="5"></textarea>
    @error($name)
        <span class="input-error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>