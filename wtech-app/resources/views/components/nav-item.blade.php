@props(['active' => false])
<a class="nav-item nav-link {{ $active ? 'nav-active' : '' }}" {{ $attributes }}>{{ $slot }}</a>
