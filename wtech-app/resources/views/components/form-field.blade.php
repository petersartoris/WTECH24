<div class="mb-3">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" placeholder="{{ $placeholder }}" class="form-control" id="{{ $id }}"
        name="{{ $name }}" autocomplete="{{ $autocomplete }}" value="{{ old($name) }}">
</div>