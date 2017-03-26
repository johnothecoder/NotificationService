<?php

namespace AcmeCorp\NotificationService\Method;

use AcmeCorp\NotificationService\Notification\AcmeNotification;
use JohnoTheCoder\NotificationService\NotificationMethod;

class NotificationMethodOnSite extends NotificationMethod
{
    protected $methodName = AcmeNotification::METHOD_ONSITE;
    protected $providerNamespace = '\\AcmeCorp\\NotificationService\\Provider\\NotificationMethodOnSiteProviderEloquent';
}