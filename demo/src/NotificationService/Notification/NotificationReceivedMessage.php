<?php

namespace AcmeCorp\NotificationService\Notification;

use AcmeCorp\NotificationService\Notification\AcmeNotification;

class NotificationReceivedMessage extends AcmeNotification
{
    protected $context = 'received_message';
}