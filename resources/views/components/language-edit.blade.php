@isset($editLanguage)
    @push('links')
        <style>
            .language-edit-container {
                position: fixed;
                top: 0;
            }
        </style>
    @endpush

    @push('contents')
        <div class="language-edit-container">
            <button>Back</button>
        </div>
    @endpush
@endisset
