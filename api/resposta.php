<?php
require_once '../../vendor/autoload.php';
?>

<form method="POST" action="">
  <input type="text" name="texto" placeholder="Digite seu texto aqui">
  <button type="submit">Enviar</button>
</form>

<?php
use OpenAI\Client;
if(isset($_POST['texto'])){

$client = OpenAI::client('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');

$texto = $_POST['texto'];

$result = $client->completions()->create([
    'model' => 'text-davinci-003',
    'prompt' => 'passo a passo '.$texto,
    'max_tokens' => 200,
    'temperature' => 0.5,
]);
$paragrafo = explode("\n", $result['choices'][0]['text']);
echo '<div style="border: 1px solid #ccc; padding: 10px; background-color:black;color:white;">'; 
foreach ($paragrafo as $paragrafo) {
    echo "<p>" . $paragrafo . "</p>";
}
echo '</div>';
}
?>