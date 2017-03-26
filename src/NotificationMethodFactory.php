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
    protected $methodNamespace = '';
    public function getMethod(Notification $notification)
    {
        $preferredMethod = $notification->getRecipient()->getPreferredMethod($notification->getContext());
        if(empty($preferredMethod)){
            $preferredMethod = $notification->getDefaultMethod();
        }
        return self::buildContext($preferredMethod);
    }
    protected function buildContext($context)
    {
        $className = $this->methodNamespace . '\\NotificationMethod' . ucwords($context);
        return new $className();
    }
}