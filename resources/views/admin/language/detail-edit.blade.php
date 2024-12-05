<style>
    .language-edit-container {
        position: fixed;
        top: 0;

        & * {
            position: absolute;
        }

        & button {}

        & select {
            left: 50%;
            transform: translateX(50%);
        }
    }
</style>

<div class="language-edit-container">
    <button>Stop</button>
    <select name="" id="">
        <option value="">Test</option>
    </select>
    <button>Save</button>
</div>

<script>
    let searchTimeout;

    $('.language-edit').on('input', function() {
        clearTimeout(searchTimeout);

        searchTimeout = setTimeout(() => {
            const languageKey = $(this).attr("name");
            const languageValue = $(this).text();
            $.ajax({
                type: "PUT",
                url: "{{ route('admin.language.detail.update', $id) }}",
                data: {
                    file: "{{ Request::query('file') }}",
                    key: languageKey,
                    value: languageValue
                },
                success: function(response) {

                }
            });

        }, 750);
    });
</script>
