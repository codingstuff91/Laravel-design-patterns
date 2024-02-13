<?php

namespace App\Patterns\Behavioral\Strategy\Logger;

class App
{
    public function __construct(Private Loggable $logger)
    {
        //
    }

    public function log()
    {
        return $this->logger->log();
    }
}
