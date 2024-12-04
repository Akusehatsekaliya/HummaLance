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
    // const langKey = @json($langKey);

    // // Combine all langKey values into one regex to replace all at once
    // const regex = new RegExp(Object.values(langKey).join('|'), 'g');

    // document.body.innerHTML = document.body.innerHTML.replace(regex, (match) => {
    //     // Find the key associated with the matched text
    //     const key = Object.keys(langKey).find(k => langKey[k] === match);
    //     return `<span name="${key}" style="background-color: #1f1f1f;" contenteditable="true">${match}</span>`;
    // });
</script>
