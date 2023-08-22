const express = require('express');
const path = require('path');
const WolframAlphaAPI = require('wolfram-alpha-api');

const app = express();
const port = 3000;

const waApi = WolframAlphaAPI('R73LK6-787HQYGX78');
app.use(express.static(__dirname));
app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'node/index.html'));
});

app.use(express.json());

app.post('/ask', async (req, res) => {
    const question = req.body.question;

    try {
        const response = await waApi.getFull({
            input: question,
            podstate: 'Step-by-step solution',
            language: 'pt',
            excludepodid: 'Input',
            width: '700',
            mag: '3',
        });

        const pods = response.pods;
        const responseHTML = pods.map((pod) => {
            const subpodHTML = pod.subpods.map(subpod =>
                `<div class="d-flex justify-content-center">
                    <img src="${subpod.img.src}" alt="${subpod.img.alt}" class="img-fluid">
                </div>`
            ).join('\n');
            return `<p class="col-12 subtextForm">${pod.title}</p>\n${subpodHTML}`;
        }).join('\n');

        res.json({ responseHTML });
    } catch (error) {
        console.error('Erro ao processar pergunta:', error);
        res.status(500).json({ error: 'Erro ao processar pergunta' });
    }
});



app.listen(port, () => {
    console.log(`Servidor rodando em http://localhost:${port}`);
});
