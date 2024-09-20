<?php

namespace App\Patterns\Structural\Adapter;

class Book implements BookContract
{
    public function open() :void
    {
        var_dump('open the book');
    }

    public function nextPage(): void
    {
        var_dump('next page');
    }

    public function close() :void
    {
        var_dump('close the book');
    }
}
