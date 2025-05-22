<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$aiService = new  App\FakeAiService();
// $aiService = new  App\OllamaAiService();
// $aiService = new  App\OpenAiService();

return new App\Chat($aiService);