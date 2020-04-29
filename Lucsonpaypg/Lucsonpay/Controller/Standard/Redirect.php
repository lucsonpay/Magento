<?php

namespace Lucsonpaypg\Lucsonpay\Controller\Standard;

class Redirect extends \Lucsonpaypg\Lucsonpay\Controller\Lucsonpay
{
    public function execute()
    {
        $promo='';
        if(isset($_GET['promo'])){
            if(trim($_GET['promo'])!=''){
                $promo=$_GET['promo'];
            }
        }
        $order = $this->getOrder();
        if ($order->getBillingAddress())
        {
            $order->setState("pending_payment")->setStatus("pending_payment");
            $order->addStatusToHistory($order->getStatus(), "Customer was redirected to lucsonpay.");
            $order->save();
            
            if($promo!=''){
                $order->lucsonpayPromoCode=$promo;
            }

            $this->getResponse()->setRedirect(
                $this->getLucsonpayModel()->buildLucsonpayRequest($order)
            );
        }
        else
        {
            $this->_cancelPayment();
            $this->_lucsonpaySession->restoreQuote();
            $this->getResponse()->setRedirect(
                $this->getLucsonpayHelper()->getUrl('checkout')
            );
        }
    }
}