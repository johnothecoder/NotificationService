<?php
/**
 * Created by PhpStorm.
 * User: matthewjohnson
 * Date: 26/03/2017
 * Time: 16:32
 */

namespace JohnoTheCoder\NotificationService;

/**
 * Class NotificationMethodFactory
 * @author JohnoTheCoder <mattjohnsonuk@icloud.com>
 * @package JohnoTheCoder\NotificationService
 */
class NotificationMethodFactory
{
    public function getMethod(Notification $notification)
    {
        $preferredMethod = $notification->getRecipient()->getPreferredMethod($notification->getContext());
        return self::buildContext($preferredMethod, $notification->getNamespace());
    }
    protected static function buildContext($context)
    {
        $class = 'NotificationMethod' . ucwords($context);
        return new $class();
    }
}