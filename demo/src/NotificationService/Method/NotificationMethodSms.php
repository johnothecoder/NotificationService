<?php

namespace AcmeCorp\NotificationService\Method;

use JohnoTheCoder\NotificationService\NotificationMethod;
use AcmeCorp\NotificationService\Notification\AcmeNotification;

/**
 * Class NotificationMethodSms
 * @author JohnoTheCoder <mattjohnsonuk@icloud.com>
 * @package JohnoTheCoder\NotificationService
 */
class NotificationMethodSms extends NotificationMethod
{
    protected $methodName = AcmeNotification::METHOD_ONSITE;
    protected $providerNamespace = '\\AcmeCorp\\NotificationService\\Provider\\NotificationMethodSmsProviderVoodoo';
}