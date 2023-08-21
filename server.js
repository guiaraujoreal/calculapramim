const express = require('express');
const path = require('path');
const WolframAlphaAPI = require('wolfram-alpha-api');

const app = express();
const port = 3000;

const waApi = WolframAlphaAPI('R73LK6-787HQYGX78');

waApi.getSimple({
    i: '2x+30=60',
    podstate: 'Step-by-step%20solution',
  }).then(console.log).catch(console.error);
  /*
waApi.getFull({
    input: '3x+27=0',
    podstate: 'Step-by-step%20solution',
}).then((queryresult) => {
    const pods = queryresult.pods;
    const output = pods.map((pod) => {
      const subpodContent = pod.subpods.map(subpod =>
        `  <img src="${subpod.img.src}" alt="${subpod.img.alt}">`
      ).join('\n');
      return `<h2>${pod.title}</h2>\n${subpodContent}`;
    }).join('\n');
    console.log(output);
  }).catch(console.error); */
app.listen(port, () => {
    console.log(`Servidor rodando em http://localhost:${port}`);
});
