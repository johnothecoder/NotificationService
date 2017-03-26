<?php

namespace AcmeCorp\NotificationService\Provider;

use JohnoTheCoder\NotificationService\NotificationMethodProvider;
use JohnoTheCoder\NotificationService\Recipient;

/**
 * Class NotificationMethodEmailProviderSmtp
 * @author JohnoTheCoder <mattjohnsonuk@icloud.com>
 * @package JohnoTheCoder\NotificationService
 */
class NotificationMethodEmailProviderSmtp implements NotificationMethodProvider
{
    public function setRecipient(Recipient $recipient)
    {

    }

    public function setSubject($subject)
    {

    }

    public function setContents($plainText, $html = '')
    {

    }

    public function send()
    {
        die('Send via SMTP (php mail function)');
    }

}