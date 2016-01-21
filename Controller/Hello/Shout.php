<?php

namespace Foggyline\Unitly\Controller\Hello;

class Shout extends \Foggyline\Unitly\Controller\Hello
{
    protected $resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        return parent::__construct($context);
    }

    /**
     * http://magento2.ce/index.php/foggyline_unitly/hello/shout/name/szabi
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();

        $resultPage->getConfig()->getTitle()->set(__('Unitly -  Title from controller'));

        return $resultPage;
    }
}
