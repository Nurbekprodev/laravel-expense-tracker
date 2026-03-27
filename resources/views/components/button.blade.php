@props(['active' => 'false'])

<a 
    {{ $attributes->merge(["class" =>  ($active ? 'bg-gray-500 rounded  ' : '' ) . 'text-white p-2 hover:opacity-75 bg-blue-950 rounded']) }}>
    {{$slot}}
</a>