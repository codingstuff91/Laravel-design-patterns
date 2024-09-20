<?php

namespace App\Patterns\Structural\Adapter;

class Kindle implements EBookContract
{
    public function turnOn(): void
    {
        var_dump('Turning on Kindle');
    }

    public function pressNext(): void
    {
        var_dump('Go to the next page');
    }

    public function shutdown(): void
    {
        var_dump('Shutting down Kindle');
    }
}
