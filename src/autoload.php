<?php

$files = [
    'Notification',
    'NotificationMethod',
    'NotificationMethodProvider',
    'NotificationMethodFactory',
    'NotificationProviderFactory',
    'Recipient'
];

foreach($files as $file){
    require_once($file . '.php');
}