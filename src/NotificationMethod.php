<?php

namespace JohnoTheCoder\NotificationService;

/**
 * Class NotificationMethod
 * @author JohnoTheCoder <mattjohnsonuk@icloud.com>
 * @package JohnoTheCoder\NotificationService
 */
abstract class NotificationMethod
{
    protected $methodName = '';
    protected $provider = null;
    protected $providerNamespace = '';
    public function getMethodName()
    {
        return $this->methodName;
    }
    public function getProvider()
    {
        if(is_null($this->provider)){
            $namespace = $this->providerNamespace;
            $this->provider = new $namespace();
        }
        return $this->provider;
    }
}