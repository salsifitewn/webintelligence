@props(['name', 'label', 'for', 'type', 'value', 'pattern' => null, 'errors'])

<div {{ $attributes->merge(['class' => 'form-group row']) }}>
    <label for="{{ $for }}" class="col-md-4 col-form-label text-md-right">{{ __($label) }}</label>

    <div class="col-md-6">
        <input id="{{ $for }}" type="{{ $type }}"
            class="form-control @error($name) is-invalid @enderror" name="{{ $name }}"
            value="{{ $value }}" @if (!is_null($pattern)) pattern="{{ $pattern }}" @endif required
            autocomplete="{{ $for }}" autofocus>

        @error($name)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
