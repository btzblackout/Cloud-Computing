<?php

namespace App\Http\Controllers;

use MonoLog\Logger;
use Monolog\Handler\StreamHandler;
use App\Http\Controllers\Controller;

class LoggingController
{
    private static $logger = null;

    static function getLogger()
    {
        if(self::$logger == null)
        {
            //Log to the standard out
            self::$logger = new Logger('Logging Controller');
            self::$logger ->pushHandler(new StreamHandler(__DIR__.'/log_file.log', logger::DEBUG));
        }
        return self::$logger;
    }

    public static function debug($message)
    {
        self::getLogger()->debug($message);
    }
    public static function info($message)
    {
        self::getLogger()->info($message);
    }
    public static function warning($message)
    {
        self::getLogger()->warning($message);
    }
    public static function error($message)
    {
        self::getLogger()->error($message);
    }

}
