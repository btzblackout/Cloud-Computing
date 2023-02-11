<?php

namespace App\Http\Controllers;

use MonoLog\Logger;
use Monolog\Handler\StreamHandler;
use App\Http\Controllers\Controller;
use Google\Cloud\Logging\LoggingClient;


class LoggingController
{

    private static $logger = null;
    private static $logging = null;



    static function getLogger()
    {
        if(self::$logger == null)
        {
            self::$logging = new LoggingClient([
                'projectId' => 'central-trees-374323'
            ]);
            self::$logger = self::$logging->psrLogger('app');

            /*
            //Log to the standard out
            self::$logger = new Logger('Logging Controller');
            self::$logger ->pushHandler(new StreamHandler(__DIR__.'/log_file.log', logger::DEBUG));
            self::$logger ->setFormatter(new GoogleCloudJsonFormatter());
            */
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

/*
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Superbalist\Monolog\Formatter;

// create a handler
$handler = new StreamHandler('path/to/your.log', Logger::WARNING);

// use custom formatter in handler
$handler->setFormatter(new GoogleCloudJsonFormatter());

// create a log channel
$log = new Logger('name');
$log->pushHandler($handler);

// add records to the log
$log->addWarning('Foo');
$log->addError('Bar');
*/
