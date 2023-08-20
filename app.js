const express = require('express');
const bodyParser = require('body-parser');
const WolframAlphaAPI = require('wolfram-alpha-api');

const app = express();
const port = 3000;

const waApi = WolframAlphaAPI('R73LK6-787HQYGX78');

app.use(express.static(__dirname));
app.get('/', (req, res) => {
    res.sendFile(__dirname + '/node/index.html');
});
app.get('/big', (req, res) => {
    //versao de dev
    
    // res.redirect('http://localhost:80/sites/math-learn/php/pages/index.php');
    //versao de producao
    res.redirect('https://www.mathlearn.com.br');
    
});

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
