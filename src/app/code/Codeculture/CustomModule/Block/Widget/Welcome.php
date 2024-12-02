<?php

namespace Codeculture\CustomModule\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
use Psr\Log\LoggerInterface;

class Welcome extends Template implements BlockInterface
{
    protected $_template = "widget/welcome.phtml";
    private $logger;

    /**
     * Get the widget title
     *
     * @return string|null
     */
    public function __construct(
        Template\Context $context,
        LoggerInterface $logger,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->logger = $logger;
    }

    public function logDebug()
    {
        $this->logger->info('Custom Widget Debug Log!');
    }
    public function getTitle()
    {
        return $this->getData('title');
    }

    /**
     * Get the widget message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->getData('message');
    }

    /**
     * Get the text color
     *
     * @return string|null
     */
    public function getTextColor()
    {
        return $this->getData('text_color');
    }

    public function getOptions()
    {
        return [
            'title' => $this->getTitle(),
            'message' => $this->getMessage(),
            'text_color' => $this->getTextColor()
        ];
    }

}
