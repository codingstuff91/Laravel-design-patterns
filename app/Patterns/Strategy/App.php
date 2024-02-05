<?php

namespace App\Patterns\Strategy;

class App
{
    public function log(Loggable $logger = null)
    {
        $defaultLogger = $logger ?: new LogToFile();

        return $defaultLogger->log();
    }
}
