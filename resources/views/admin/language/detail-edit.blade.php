<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Language</title>

    <style>
        .language-edit-container {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            padding: 10px;
            background: #fff;
            z-index: 9999;
        }

        .language-edit-container button {
            margin: 5px;
        }

        .language-edit-container select {
            left: 50%;
            transform: translateX(-50%);
            padding: 5px;
        }
    </style>
    <script src="{{ asset('template-admin/assets/extensions/jquery/jquery.min.js') }}"></script>
</head>

<body>

    <div class="language-edit-container">
        <button id="stopButton">Stop</button>
        <select name="languageSelect" id="languageSelect">
            <option value="">Test</option>
        </select>
        <button id="saveButton">Save</button>
    </div>

    <script>
        $(document).ready(function () {
            let searchTimeout;

            // Fetch the language content dynamically
            $.ajax({
                url: "{{ route(Request::query('route')) }}",
                data: {
                    editLanguage: true,
                    route: "{{ Request::query('route') }}"
                },
                success: (response) => {
                    $(response).prependTo('body');

                    // Handle input changes with a debounce mechanism
                    $('.language-edit').on('input', function () {
                        clearTimeout(searchTimeout);
                        searchTimeout = setTimeout(() => {
                            const languageKey = $(this).attr("name");
                            const languageValue = $(this).text();
                            saveLanguageChange(languageKey, languageValue);
                        }, 750); // 750ms debounce
                    });
                },
                error: function () {
                    alert("Failed to fetch content.");
                }
            });

            function saveLanguageChange(languageKey, languageValue) {
                $.ajax({
                    type: "PUT",
                    url: "{{ route('admin.language.detail.update', $id) }}",
                    data: {
                        file: "{{ Request::query('file') }}",
                        key: languageKey,
                        value: languageValue
                    },
                    success: function (response) {
                        console.log("Language saved successfully.");
                    },
                    error: function () {
                        alert("Failed to save language changes.");
                    }
                });
            }

            $('#stopButton').click(function () {
                alert("Editing stopped.");
            });

            $('#saveButton').click(function () {
                alert("Changes saved.");
            });
        });
    </script>

</body>

</html>
