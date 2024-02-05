<?php

namespace App\Patterns\Strategy;

class LogToFile implements Loggable
{
    public function log()
    {
        return "Log to a file";
    }
}
