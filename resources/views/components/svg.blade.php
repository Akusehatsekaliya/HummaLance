@props(['file'])

@if (file_exists(public_path('assets/svg/' . $file . '.svg')))
  {!! file_get_contents(public_path('assets/svg/' . $file . '.svg')) !!}
@else
  <img src="" alt="{{ $file }}">
@endif
