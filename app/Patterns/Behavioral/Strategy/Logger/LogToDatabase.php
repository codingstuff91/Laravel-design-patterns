<?php

namespace App\Patterns\Behavioral\Strategy\Logger;

class LogToDatabase implements Loggable
{
    public function log()
    {
        return "Log to a local database";
    }
}
