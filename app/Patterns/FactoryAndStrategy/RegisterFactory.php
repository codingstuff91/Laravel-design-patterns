<?php

namespace App\Patterns\FactoryAndStrategy;

use Exception;

class RegisterFactory
{
    public static function create($type = null)
    {
        if ($type === 'player') {
            return new RegisterPlayer();
        }

        if ($type === 'game_master') {
            return new RegisterGameMaster();
        }

        throw new Exception('Type non reconnu');
    }
}
