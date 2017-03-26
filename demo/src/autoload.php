<?php

$files = [
    'User/User',
    'NotificationService/Method/NotificationMethodFactory',
    'NotificationService/Method/NotificationMethodEmail',
    'NotificationService/Method/NotificationMethodOnSite',
    'NotificationService/Method/NotificationMethodSms',
    'NotificationService/Notification/AcmeNotification',
    'NotificationService/Notification/NotificationReceivedMessage',
    'NotificationService/Provider/NotificationMethodEmailProviderSmtp',
    'NotificationService/Provider/NotificationMethodOnSiteProviderEloquent',
    'NotificationService/Provider/NotificationMethodSmsProviderVoodoo'
];

foreach($files as $file){
    require_once($file . '.php');
}