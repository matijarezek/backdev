<?php

namespace Core;

use Symfony\Component\Dotenv\Dotenv;

class Boot
{
    public function boot()
    {
        // parser za .env fileove
        

        $envParaser = new Dotenv();
        $envParaser->load(ROOT . '/.env');

        // spremanje podataka za povezivanje u konstante
        define('DB_DSN', $_ENV['DB_DSN']);
        define('DB_USERNAME', $_ENV['DB_USERNAME']);
        define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
    }
}