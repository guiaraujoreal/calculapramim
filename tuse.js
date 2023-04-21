

// Obter o formulário e o campo de entrada
const formulario = document.querySelector('#formulario');
const perguntaInput = document.querySelector('#pergunta');

// Quando o formulário for enviado
formulario.addEventListener('submit', (event) => {
  // Impedir que o formulário seja enviado normalmente
  event.preventDefault();

  // Obter a pergunta do campo de entrada
  const pergunta = perguntaInput.value;

  // Enviar a pergunta para a API OpenAI
  axios.post('https://api.openai.com/v1/engines/davinci-codex/completions', {
    prompt: pergunta,
    max_tokens: 200,
    temperature: 0.5,
  }, {
    headers: {
      'Content-Type': 'application/json',
      'Authorization': 'Bearer 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',
    },
  }).then((response) => {
    // Quando a resposta chegar, exibir no elemento de resposta com o efeito de digitação
    const resposta = response.data.choices[0].text;
    const divResposta = document.querySelector('#resposta');
    new TypeIt(divResposta, { speed: 50 }).type(resposta);
  }).catch((error) => {
    // Se houver um erro, exibir no console
    console.error(error);
  });
});
