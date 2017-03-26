<?php
/**
 * Created by PhpStorm.
 * User: matthewjohnson
 * Date: 26/03/2017
 * Time: 19:41
 */

namespace AcmeCorp\NotificationService\Notification;

use JohnoTheCoder\NotificationService\Notification;

class AcmeNotification extends Notification
{
    const METHOD_SMS = 'sms';
    const METHOD_ONSITE = 'onsite';

    protected $methodFactoryNamespace = '\\AcmeCorp\\NotificationService\\Method\\NotificationMethodFactory';
}