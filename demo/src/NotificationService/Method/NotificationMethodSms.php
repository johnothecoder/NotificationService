<?php

namespace AcmeCorp\NotificationService\Method;

use JohnoTheCoder\NotificationService\NotificationMethod;
use AcmeCorp\NotificationService\Notification\AcmeNotification;

class NotificationMethodSms extends NotificationMethod
{
    protected $methodName = AcmeNotification::METHOD_ONSITE;
    protected $providerNamespace = '\\AcmeCorp\\NotificationService\\Provider\\NotificationMethodSmsProviderVoodoo';
}