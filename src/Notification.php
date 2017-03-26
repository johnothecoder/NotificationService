<?php

namespace JohnoTheCoder\NotificationService;

/**
 * Class Notification
 * @author JohnoTheCoder <mattjohnsonuk@icloud.com>
 * @package JohnoTheCoder\NotificationService
 */
abstract class Notification
{

    const METHOD_EMAIL = 'email';
    const METHOD_DEFAULT = self::METHOD_EMAIL;

    protected $notificationNamespace = '';
    protected $context = self::METHOD_EMAIL;
    protected $subject = '';
    protected $plainTextContents = '';
    protected $htmlContents = '';
    protected $replacementTags = [];
    protected $recipient;
    protected $templateLocation = '';
    protected $isSent = false;
    protected $defaultMethod = self::METHOD_DEFAULT;

    protected $methodFactory;
    protected $methodFactoryNamespace = '\\JohnoTheCoder\\NotificationService\\NotificationMethodFactory';
    protected $providerFactoryNamespace = '\\JohnoTheCoder\\NotificationService\\NotificationProviderFactory';

    /**
     * Notification constructor.
     * @param Recipient $recipient
     * @param array $replacementTags
     */
    final public function __construct(Recipient $recipient, array $replacementTags = [])
    {

        $this->recipient = $recipient;
        $this->replacementTags = $replacementTags;

        $methodFactory = $this->methodFactoryNamespace;
        $this->methodFactory = new $methodFactory();

        return $this;
    }

    /**
     * @return bool
     */
    final public function send()
    {
        // This has previously sent - do not send it again
        if($this->isSent == true){
            return;
        }

        // Get the Provider
        $provider = $this->methodFactory->getMethod($this)->getProvider($this, $this->providerFactoryNamespace);
        $provider->setRecipient($this->recipient);
        $provider->setSubject($this->subject);
        $provider->setContents($this->plainTextContents, $this->htmlContents);

        // Send the message and return TRUE
        if($provider->send()){
            return true;
        }

        // Return false - for some reason this notification did not send
        return false;

    }

    /**
     * @return Recipient
     */
    final public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @return string
     */
    final public function getContext()
    {
        return $this->context;
    }

    /**
     * @return string
     */
    final public function getNamespace()
    {
        return $this->notificationNamespace;
    }

    final public function getDefaultMethod()
    {
        return $this->defaultMethod;
    }

}