@php
    $parsedUrl = parse_url($slot);
    $path = $parsedUrl['path'] ?? $slot;

    $path = ltrim($path, '/');

    $filePath = public_path($path);
@endphp

@if (file_exists($filePath))
    {!! file_get_contents($filePath) !!}
@else
    <img src="{{ $slot }}" alt="{{ basename($path) }}">
@endif
