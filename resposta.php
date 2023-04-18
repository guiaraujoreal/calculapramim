<?php
require_once 'vendor/autoload.php';

use OpenAI\Client;
$client = OpenAI::client('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');

$texto = $_POST['texto'];

$result = $client->completions()->create([
    'model' => 'text-davinci-003',
    'prompt' => 'passo a passo '.$texto,
    'max_tokens' => 200,
    'temperature' => 0.5,
]);

echo $result['choices'][0]['text']; // an open-source, widely-used, server-side scripting language.
?>