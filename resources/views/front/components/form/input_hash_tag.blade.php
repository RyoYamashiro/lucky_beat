<label class="input-holder input-hash-tag @if($required) input-required @endif">
    <label class="input-hash-tag-label">
        #
        <input id="{{ $name }}" type="{{ $type }}" class="input-form @error($name) is-invalid @enderror" name="{{ $name }}" value="{{ old( $name ) }}" required autocomplete="{{ $name }}" autofocus>
    </label>
    @if($context)
    <span class="annotation-text">{{ $context }}</span>
    @endif
</label>