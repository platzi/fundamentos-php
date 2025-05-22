<?php

namespace App;

use ArdaGnsrn\Ollama\Ollama;

class OllamaAiService implements AIServiceInterface
{
    protected $client;
    
    public function __construct() 
    {
        $this->client = Ollama::client();
    }

    public function getResponse(string $input): string 
    {
        $result = $this->client->chat()->create([
            'model' => 'deepseek-r1:1.5b',
            'messages' => [
                ['role' => 'user', 'content' => $input],
            ],
        ]);

        return $result->message->content;
    }
}