<?php


namespace Codeculture\Disable2FA\Plugin;


use Magento\Framework\Event\Observer;
use Magento\TwoFactorAuth\Observer\ControllerActionPredispatch;

class ControllerActionPredispatchPlugin
{

    /**
     * @param \Magento\TwoFactorAuth\Observer\ControllerActionPredispatch $subject
     * @param callable $proceed
     * @param Observer $observer
     */
    public function aroundExecute(\Magento\TwoFactorAuth\Observer\ControllerActionPredispatch $subject, callable $proceed, Observer $observer)
    {
        return null;
    }
}
