@props(['active' => false, 'class' => ''])
<a class="nav-item nav-link {{ $active ? 'nav-active' : '' }} {{ $class }}"
    {{ $attributes }}>{{ $slot }}</a>
