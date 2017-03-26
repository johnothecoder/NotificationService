<?php
/**
 * Created by PhpStorm.
 * User: matthewjohnson
 * Date: 26/03/2017
 * Time: 16:32
 */

namespace AcmeCorp\NotificationService\Method;

use AcmeCorp\NotificationService\Notification\AcmeNotification;
use JohnoTheCoder\NotificationService\Notification;

class NotificationMethodFactory extends \JohnoTheCoder\NotificationService\NotificationMethodFactory
{
     protected $methodNamespace = '\\AcmeCorp\\NotificationService\\Method';
}