<?php

namespace App\Patterns\Structural\Adapter;

interface EBookContract
{
    public function turnOn(): void;

    public function pressNext(): void;

    public function shutdown(): void;
}
