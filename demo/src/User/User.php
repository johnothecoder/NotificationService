<?php

namespace AcmeCorp;

use JohnoTheCoder\NotificationService\Recipient;
use AcmeCorp\NotificationService\Notification\AcmeNotification;

class User implements Recipient
{
    public function getUserId()
    {
        return 1;
    }

    public function getName()
    {
        return 'Matt Johnson';
    }

    public function getMobileNumber()
    {
        return '+441234123412';
    }

    public function getEmailAddress()
    {
        return 'mattjohnsonuk@icloud.com';
    }

    public function getPreferredMethod($context = 'default')
    {
        switch($context){
            case 'received_message':
                return AcmeNotification::METHOD_SMS;
                break;
        }
        return false;
    }

}