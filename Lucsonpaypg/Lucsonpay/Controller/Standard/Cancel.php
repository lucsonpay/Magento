<?php

namespace Lucsonpaypg\Lucsonpay\Controller\Standard;

class Cancel extends \Lucsonpaypg\Lucsonpay\Controller\Lucsonpay
{

    public function execute()
    {
        $this->_cancelPayment();
        $this->_checkoutSession->restoreQuote();
        $this->getResponse()->setRedirect(
            $this->getLucsonpayHelper()->getUrl('checkout')
        );
    }

}
