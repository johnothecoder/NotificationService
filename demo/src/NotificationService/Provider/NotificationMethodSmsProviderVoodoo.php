<?php

namespace AcmeCorp\NotificationService\Provider;

use JohnoTheCoder\NotificationService\NotificationMethodProvider;
use JohnoTheCoder\NotificationService\Recipient;

class NotificationMethodSmsProviderVoodoo implements NotificationMethodProvider
{
    public function setRecipient(Recipient $recipient)
    {

    }

    public function setContents($plainText, $html = '')
    {

    }

    public function setSubject($subject)
    {

    }

    public function send()
    {
        die('Send via VoodooSMS');
    }

}