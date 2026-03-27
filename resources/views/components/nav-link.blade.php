@props(['active' => false])

<a 
class="{{ $active ? 'bg-gray-500 rounded  ' : '' }} text-white p-2 hover:opacity-75  " 
{{ $attributes }}>
{{ $slot }}</a>