<?php

namespace AcmeCorp\NotificationService\Notification;

use AcmeCorp\NotificationService\Notification\AcmeNotification;

/**
 * Class NotificationReceivedMessage
 * @author Matt Johnson <mattjohnsonuk@icloud.com>
 * @package JohnoTheCoder\NotificationService
 */
class NotificationReceivedMessage extends AcmeNotification
{
    protected $context = 'received_message';
}