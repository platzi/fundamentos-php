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
        $this->welcome();

        while ($input = $this->prompt()) {
            if ($this->exit($input)) {
                break;
            }  

            $response = $this->getResponse($input);

            $this->output($response);
        }
    }

    private function welcome(): void
    {
        echo 'Ask anything to AI' . PHP_EOL;
    }

    private function prompt(): string
    {
        return readline('> ');
    }

    private function exit(string $input): bool
    {
        return trim($input) === 'exit';
    }

    private function output(string $response): void
    {
        echo $response . PHP_EOL;
    }

    public function getResponse(string $input): string
    {
        return $this->aiService->getResponse($input);
    }
}