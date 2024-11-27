<?php declare(strict_types=1);

namespace Codeculture\CustomModule\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

class Index implements HttpGetActionInterface
{
    /**
     * @var ResultFactory
     */
    private $resultFactory;

    /**
     * Constructor
     *
     * @param ResultFactory $resultFactory
     */
    public function __construct(ResultFactory $resultFactory)
    {
        $this->resultFactory = $resultFactory;
    }

    /**
     * Execute method
     *
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        // Create a page response
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        // Set a custom title (optional)
        $resultPage->getConfig()->getTitle()->set(__('My Custom Page'));

        return $resultPage;
    }
}
