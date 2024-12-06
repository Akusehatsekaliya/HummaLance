@php
    $translationKey =
        Request::query('editLanguage') && auth()->check() && auth()->user()->hasRole('admin')
            ? Request::query('route')
            : Request::route()->getName();

    $translationKey = str_replace('.', '/', $translationKey) . '.' . $slot;
@endphp

@if (Request::query('editLanguage') && auth()->check() && auth()->user()->hasRole('admin'))
    <span name="{{ $slot }}" class="language-edit"
        style="background-color: rgba(31, 31, 31, 0.5); padding: 0 1rem; border-radius: .25rem;" contenteditable="true">
        {{ __($translationKey) }}
    </span>
@else
    {!! __($translationKey) !!}
@endif
