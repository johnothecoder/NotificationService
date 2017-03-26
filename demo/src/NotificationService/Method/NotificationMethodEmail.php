<?php

namespace AcmeCorp\NotificationService\Method;

use JohnoTheCoder\NotificationService\NotificationMethod;
use JohnoTheCoder\NotificationService\Notification;

/**
 * Class NotificationMethodEmail
 * @author JohnoTheCoder <mattjohnsonuk@icloud.com>
 * @package JohnoTheCoder\NotificationService
 */
class NotificationMethodEmail extends NotificationMethod
{
    protected $methodName = Notification::METHOD_EMAIL;
    protected $providerNamespace = '\\AcmeCorp\\NotificationService\\Provider\\NotificationMethodEmailProviderSmtp';
}