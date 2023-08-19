const express = require('express');
const path = require('path');
const phpExpress = require('php-express')({
    binPath: 'php' // Caminho para o executável PHP
});

const app = express();
const port = 3000;

app.engine('php', phpExpress.engine);
app.set('view engine', 'php');
app.set('views', path.join(__dirname));
app.use(express.static(path.join(__dirname)));

app.use(express.urlencoded({ extended: true }));

app.get('/', (req, res) => {
    res.render('php/pages/index');
});

app.get('/artigos', (req, res) => {
    res.render('art-mat');
});

app.listen(port, () => {
    console.log(`Servidor rodando em http://localhost:${port}`);
});
