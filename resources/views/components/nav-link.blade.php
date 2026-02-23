@props(['active' => false])

<a 
class="{{ $active ? 'active-link' : '' }}" 
{{ $attributes }}>
{{ $slot }}</a>