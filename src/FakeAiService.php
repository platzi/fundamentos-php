<?php

namespace App;

class FakeAiService 
{
    public function getResponse(string $input): string 
    {
        sleep(2);

        if (strpos($input, 'PHP') !== false) {
            return "Response fake for: $input";
        } else {
            return 'No puedo ayudar con eso';
        }
    }
}