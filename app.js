const express = require('express');
const bodyParser = require('body-parser');
const WolframAlphaAPI = require('wolfram-alpha-api');

const app = express();
const port = 3000;

const waApi = WolframAlphaAPI('R73LK6-787HQYGX78');

app.use(express.static(__dirname));

app.use(express.static('style', {
    setHeaders: (res, path) => {
        if (path.endsWith('.css')) {
            res.setHeader('Content-Type', 'text/css');
        }
    }
}));

app.use(bodyParser.json());

app.post('/ask', async (req, res) => {
    const question = req.body.question;

    try {
        const queryResult = await waApi.getSimple(question);
        res.json({ imageUrl: queryResult });
    } catch (error) {
        console.error('Erro na API do Wolfram Alpha:', error);
        res.status(500).json({ error: 'Erro ao obter resposta da API' });
    }
});

app.listen(port, () => {
    console.log(`Servidor rodando em http://localhost:${port}`);
});
