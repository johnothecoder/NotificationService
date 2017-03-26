<?php
/**
 * Created by PhpStorm.
 * User: matthewjohnson
 * Date: 26/03/2017
 * Time: 16:22
 */

namespace JohnoTheCoder\NotificationService;

/**
 * Class NotificationProviderFactory
 * @author JohnoTheCoder <mattjohnsonuk@icloud.com>
 * @package JohnoTheCoder\NotificationService
 */
class NotificationProviderFactory
{
    public function getProvider(Notification $notification, $factoryNamespace = '\\JohnoTheCoder\\NotificationService\\NotificationMethodFactory')
    {
        $factory = new $factoryNamespace();
        $method = $factory->getMethod($notification);
        return $method->getProvider();
    }

}