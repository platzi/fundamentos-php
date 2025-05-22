<?php

namespace App;

class Chat
{
    public function __construct(
        protected AIServiceInterface $aiService
    ) {
        // ...
    }

    public function start()
    {
        echo 'Ask anything to AI' . PHP_EOL;

        while (true) {
            $input = readline('> ');

            if ($input === 'exit' || $input === '') {
                break;
            }  

            $response = $this->aiService->getResponse($input);

            echo $response . PHP_EOL;
        }
    }
}