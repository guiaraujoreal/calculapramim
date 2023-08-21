const request = require('axios');


// Substitua 'YOUR_APP_ID' pelo seu ID de aplicativo da Wolfram Alpha
const app_id = 'R73LK6-787HQYGX78';

// Consulta que você deseja realizar
const query = "2x=38";

// Parâmetros da consulta
const params = {
    input: query,
    format: 'plaintext',  // Formato de resposta em texto
    output: 'JSON',       // Formato de saída em JSON
    appid: app_id,
    podstate: 'Step-by-step solution'  // Solicita o passo a passo
};

// URL da API da Wolfram Alpha
const url = 'http://api.wolframalpha.com/v2/query';

// Fazendo a solicitação GET para a API
request({ url: url, qs: params }, (error, response, body) => {
    if (!error && response.statusCode === 200) {
        const data = JSON.parse(body);
        if (data.queryresult.success === 'true') {
            // Itera sobre os pods (seções) da resposta
            for (const pod of data.queryresult.pods) {
                if (pod.title === 'Step-by-step solution') {
                    // Imprime o passo a passo do cálculo
                    for (const subpod of pod.subpods) {
                        console.log(subpod.plaintext);
                    }
                }
            }
        } else {
            console.log("Consulta sem sucesso.");
        }
    } else {
        console.log("Erro na solicitação:", error);
    }
});
app.listen(port, () => {
    console.log(`Servidor rodando em http://localhost:${port}`);
});