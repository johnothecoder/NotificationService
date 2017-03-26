<?php

namespace AcmeCorp\NotificationService\Method;

use JohnoTheCoder\NotificationService\NotificationMethod;
use JohnoTheCoder\NotificationService\Notification;

class NotificationMethodEmail extends NotificationMethod
{
    protected $methodName = Notification::METHOD_EMAIL;
    protected $providerNamespace = '\\AcmeCorp\\NotificationService\\Provider\\NotificationMethodEmailProviderSmtp';
}