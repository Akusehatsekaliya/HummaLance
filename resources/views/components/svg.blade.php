@php
  $filePath = public_path(str_replace(url('/'), '', $slot));
@endphp

@if (file_exists($filePath))
  {!! file_get_contents($filePath) !!}
@else
  <img src="" alt="{{ $slot }}">
@endif
