<?php

//require_once __DIR__ . '/app/interfaces/PostInterface.php';
//require_once __DIR__ . '/app/interfaces/StatusInterface.php';
//require_once __DIR__ . '/app/senders/AbstractProtocol.php';
//require_once __DIR__ . '/app/senders/channels/Telegram.php';
//require_once __DIR__ . '/app/senders/channels/SMS.php';
//require_once __DIR__ . '/app/senders/channels/Viber.php';
//require_once __DIR__ . '/app/senders/channels/EMail.php';
//require_once __DIR__ . '/app/senders/Sender.php';

//function __autoload(string $class)
//{
//    $file = __DIR__ . '/' . str_replace('_', DIRECTORY_SEPARATOR, $class) . '.php';
//    if (!file_exists($file)) {
//        exit("Class {$class} can not be loaded");
//    }
//
//    require_once $file;
//}

use app\senders\Sender;
use app\senders\channels\Telegram as TelegramChannel;
use app\senders\validators\Telegram as TelegramValidator;

require_once __DIR__ . '/ClassLoader.php';

spl_autoload_register([new ClassLoader(), 'load']);

//$channel = new \app\senders\channels\SMS();
$channel = new TelegramChannel();
$validar = new TelegramValidator();

$sender = new Sender();
$sender->send('Hell!!!', $channel);
