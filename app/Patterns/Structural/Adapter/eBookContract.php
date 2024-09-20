<?php

namespace App\Patterns\Structural\Adapter;

interface eBookContract
{
    public function turnOn(): void;

    public function pressNext(): void;

    public function shutdown(): void;
}
