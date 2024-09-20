<?php

namespace App\Patterns\Structural\Adapter;

interface BookContract
{
    public function open();

    public function nextPage();

    public function close();
}
