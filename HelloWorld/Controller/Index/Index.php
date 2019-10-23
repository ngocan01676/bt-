<?php

namespace AN\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;


class Index extends Action
{
 
 	protected $pageFactory;

	
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory
	
    )
	{

		$this->pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{  
	
		return $this->pageFactory->create();
	}
}