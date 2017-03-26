<?php
/**
 * Created by PhpStorm.
 * User: matthewjohnson
 * Date: 26/03/2017
 * Time: 16:25
 */

namespace JohnoTheCoder\NotificationService;

/**
 * Interface Recipient
 * @author JohnoTheCoder <mattjohnsonuk@icloud.com>
 * @package JohnoTheCoder\NotificationService
 */
interface Recipient
{

    /**
     * @return int
     */
    public function getUserId();

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @return string
     */
    public function getEmailAddress();

    /**
     * @return string
     */
    public function getMobileNumber();

    /**
     * @param string $context
     * @return string
     */
    public function getPreferredMethod($context = 'default');
}