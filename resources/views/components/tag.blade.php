@props(['tag', 'size' => 'base'])

@php
    $classes = 'hover:bg-white/25 transition-colors font-bold duration-300 bg-white/10 rounded-xl';
    if($size == 'base'){
        $classes .= ' px-5 py-1 text-sm';
    }
    if($size == 'small'){
        $classes .= ' px-3 py-1 text-xs';
    }
@endphp

<a class="{{ $classes }}" href="/tags/{{ strtolower($tag->name) }}">{{ $tag->name }}</a>