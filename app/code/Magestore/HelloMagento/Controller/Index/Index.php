<?php

namespace Magestore\HelloMagento\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        echo 'Hello Magento 2!';
        exit;
    }
}
