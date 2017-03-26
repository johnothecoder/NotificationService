<?php
/**
 * Created by PhpStorm.
 * User: matthewjohnson
 * Date: 26/03/2017
 * Time: 16:21
 */

namespace JohnoTheCoder\NotificationService;

/**
 * Interface NotificationProvider
 * @author JohnoTheCoder <mattjohnsonuk@icloud.com>
 * @package JohnoTheCoder\NotificationService
 */
interface NotificationMethodProvider
{
    public function setRecipient(Recipient $recipient);
    public function setSubject($subject);
    public function setContents($plainText, $html = '');
    public function send();
}