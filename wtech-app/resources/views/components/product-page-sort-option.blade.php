@props(['name', 'label', 'options' => ['' => '----', 'ASC' => 'Ascending', 'DESC' => 'Descending']])
<label for="{{ $name }}" class="dropdown-label">{{ $label }}:</label>
<select class="dropdown-custom" id="{{ $name }}" name="{{ $name }}">
    @foreach ($options as $value => $text)
        <option value="{{ $value }}" {{ request($name) == $value ? 'selected' : '' }}>{{ $text }}</option>
    @endforeach
</select>
