<?php

namespace App\Patterns\Strategy;

class LogToDatabase implements Loggable
{
    public function log()
    {
        return "Log to a local database";
    }
}
