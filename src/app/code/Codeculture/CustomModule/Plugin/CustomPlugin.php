<?php

namespace Codeculture\CustomModule\Plugin;
use Magento\Framework\App\Config\ScopeConfigInterface;

class CustomPlugin
{
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }
    public function beforeExecute(\Codeculture\CustomModule\Controller\Index\Index $subject)
    {
        // Add logic before the `execute` method
        \Magento\Framework\App\ObjectManager::getInstance()->get(\Psr\Log\LoggerInterface::class)
            ->info('Before Execute Method');
    }

    public function afterExecute(\Codeculture\CustomModule\Controller\Index\Index $subject, $result)
    {
        // Fetch the custom title from the admin configuration
        $customTitle = $this->scopeConfig->getValue(
            'custommodule/general/custom_title',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );

        if ($customTitle) {
            // Set the custom title dynamically
            $result->getConfig()->getTitle()->set($customTitle);
        }

        return $result;
    }
}
