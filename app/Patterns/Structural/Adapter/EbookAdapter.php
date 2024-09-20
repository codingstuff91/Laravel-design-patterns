<?php

namespace App\Patterns\Structural\Adapter;

use App\Patterns\Structural\Adapter\BookContract;

class EbookAdapter implements BookContract
{
    public function __construct(public Kindle $kindle)
    {
        //
    }

    public function open()
    {
        var_dump($this->kindle->turnOn());
    }

    public function nextPage()
    {
        var_dump($this->kindle->pressNext());
    }

    public function close()
    {
        var_dump($this->kindle->shutdown());
    }
}
