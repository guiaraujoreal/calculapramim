<!DOCTYPE html>
<html>
<head>
    <title>Consulta Wolfram Alpha</title>
    <style>
        #image-container {
            display: none;
        }
    </style>
</head>
<body>
    <h1>Consultar Wolfram Alpha</h1>
    <form id="query-form">
        <label for="query">Digite sua pergunta:</label>
        <input type="text" id="query" required>
        <button type="button" onclick="sendQuery()">Enviar</button>
    </form>

    <h2 id="image-heading">Imagem da API Wolfram Alpha</h2>
    <div id="image-container">
        <img id="result-image" alt="Imagem da API">
    </div>

    <script>
        function sendQuery() {
            const query = document.getElementById("query").value;
            const resultImage = document.getElementById("result-image");
            const imageHeading = document.getElementById("image-heading");
            const imageContainer = document.getElementById("image-container");

            fetch(`/query?query=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(data => {
                    console.log("URL da imagem:", data.url);
                    resultImage.src = data.url;
                    imageHeading.style.display = "block"; // Mostra o elemento h2
                    imageContainer.style.display = "block"; // Mostra o contêiner da imagem
                })
                .catch(error => {
                    console.error("Erro:", error);
                });
        }
    </script>
</body>
</html>
