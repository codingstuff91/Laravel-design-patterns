<?php

namespace App\Patterns\Behavioral\Strategy\Logger;

class LogToFile implements Loggable
{
    public function log()
    {
        return "Log to a file";
    }
}
