<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

echo '<pre>';

require('../src/autoload.php');
require('src/autoload.php');

use AcmeCorp\NotificationService\Notification\NotificationReceivedMessage;
use AcmeCorp\User;

$user = new User();

$tags = [
    'TOKEN' => mt_rand(111111,999999)
];
$notification = new NotificationReceivedMessage($user, $tags);
$notification->send();

echo '</pre>';