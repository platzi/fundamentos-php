<?php

namespace App;

use OpenAI;

class OpenAiService implements AIServiceInterface
{
    protected $client;
    
    public function __construct() 
    {
        $this->client = OpenAI::client($_ENV['OPENAI_API_KEY']);
    }

    public function getResponse(string $input): string 
    {
        $result = $this->client->chat()->create([
            'model' => 'gpt-4o-mini', // 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => <<<EOT
                    Eres un asistente especializado exclusivamente en PHP.
                    - Si te preguntan algo que no esté relacionado con PHP, responde "No puedo ayudarte con eso".
                    - Si te preguntan algo relacionado con PHP, responde de forma breve y concisa. Sin rodeos.
                    EOT
                ],
                ['role' => 'user', 'content' => $input],
            ],
        ]);

        return $result['choices'][0]['message']['content'];
    }
}