const express = require('express');
const path = require('path');
const WolframAlphaAPI = require('wolfram-alpha-api');

const app = express();
const port = 3000;

const waApi = WolframAlphaAPI('R73LK6-787HQYGX78');

/*waApi.getSimple({
    i: '2x+30=60',
    podstate: 'Step-by-step',
  }).then(console.log).catch(console.error);*/
  
  
waApi.getFull({
    input: '4.(x – 2) – 5.(2 – 3x) = 4.(2x – 6)',
    podstate: 'Step-by-step solution',
    language: 'pt',
}).then((queryresult) => {
    const pods = queryresult.pods;
    const output = pods.map((pod) => {
      const subpodContent = pod.subpods.map(subpod =>
        `  <img src="${subpod.img.src}" alt="${subpod.img.alt}">`
      ).join('\n');
      return `<p>${pod.title}</p>\n${subpodContent}`;
    }).join('\n');
    console.log(output);
    console.log('\n----------------------------------------------------');
  }).catch(console.error); 

 /* waApi.getFull({
    input: '2x-30=60',
    podstate: 'Step-by-step solution',
    output: 'xml',
  }).then((queryresult) => {
    console.log(queryresult)
  }).catch(console.error) */
app.listen(port, () => {
    console.log(`Servidor rodando em http://localhost:${port}`);
});
