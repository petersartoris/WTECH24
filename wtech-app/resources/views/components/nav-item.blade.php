@props(['url', 'id' => '', 'name'])

<a class="nav-item nav-link" href="{{ route($url) }}#{{ $id }}">{{ $name }}</a>
