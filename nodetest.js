const express = require('express');
const WolframAlphaAPI = require('wolfram-alpha-api');

const app = express();
const port = 3000;
const waApi = WolframAlphaAPI('R73LK6-787HQYGX78');

app.use(express.static('public'));

app.get('/query', (req, res) => {
    const query = req.query.query;

    waApi.getSimple(query)
        .then((url) => {
            console.log(`Veja a resposta na pagina`);
            res.json({ url: url });
        })
        .catch((error) => {
            console.error(error);
            res.status(500).json({ error: 'Erro ao consultar a API' });
        });
});

app.listen(port, () => {
    console.log(`Servidor rodando em http://localhost:${port}`);
});
