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

/**
 * Class NotificationMethodFactory
 * @author JohnoTheCoder <mattjohnsonuk@icloud.com>
 * @package JohnoTheCoder\NotificationService
 */
class NotificationMethodFactory extends \JohnoTheCoder\NotificationService\NotificationMethodFactory
{
    static protected $methodNamespace = '\\AcmeCorp\\NotificationService\\Method';
    public function getMethod(Notification $notification)
    {
        $preferredMethod = $notification->getRecipient()->getPreferredMethod($notification->getContext());
        if(empty($preferredMethod)){
            $preferredMethod = $notification->getDefaultMethod();
        }
        return self::buildContext($preferredMethod);
    }
    protected static function buildContext($context)
    {
        $className = self::$methodNamespace . '\\NotificationMethod' . ucwords($context);
        return new $className();
    }
}