<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>

  <body>
    <script>
      loadStreamingContent("http://127.0.0.1:8000/landing/about")
      async function loadStreamingContent(url) {
        try {
          const response = await fetch(url);
          const reader = response.body.getReader();
          const decoder = new TextDecoder();

          // Membuka dokumen baru
          document.open();
          let buffer = '';

          while (true) {
            const {
              done,
              value
            } = await reader.read();
            if (done) break;

            // Decode chunk data
            const text = decoder.decode(value, {
              stream: true
            });

            buffer += text;
            console.log(buffer);
            // Tulis konten ke halaman
            document.write(buffer);
          }

          // Menutup dokumen setelah selesai
          document.close();
        } catch (error) {
          console.error('Error:', error);
          // document.body.innerHTML = '<h1>Error loading content</h1>';
        }
      }
    </script>
  </body>

</html>
