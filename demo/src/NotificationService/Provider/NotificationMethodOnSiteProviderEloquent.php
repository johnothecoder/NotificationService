<?php

namespace AcmeCorp\NotificationService\Provider;

use JohnoTheCoder\NotificationService\NotificationMethodProvider;
use JohnoTheCoder\NotificationService\Recipient;

class NotificationMethodOnSiteProviderEloquent implements NotificationMethodProvider
{
    public function setContents($plainText, $html = '')
    {

    }

    public function setRecipient(Recipient $recipient)
    {

    }

    public function setSubject($subjecrt)
    {

    }

    public function send()
    {
        die('Send via Eloquent (On Site Notification)');
    }

}