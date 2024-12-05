@php
    $translationKey =
        str_replace(
            '.',
            '/',
            Request::routeIs('admin.language.detail.edit') ? Request::query('route') : Request::route()->getName(),
        ) .
        '.' .
        $slot;
@endphp

@if (Request::routeIs('admin.language.detail.edit'))
    <span name="{{ $slot }}" class="language-edit"
        style="background-color: rgba(31, 31, 31, 0.5); padding: 0 1rem; border-radius: .25rem;"
        contenteditable="true">{{ __($translationKey) }}</span>
@else
    {!! __($translationKey) !!}
@endif
