# Magento
This plugin belongs to Lucsonpay payment gateway.

Magento v2.x
This is a Magento 2.0 v  which is supported by Magento version 2.0.x onward. 


Installation and Configuration upload app/code/Lucsonpaypg (all files and folder) at you server end.

Run below command: php bin/magento module:enable Lucsonpaypg_Lucsonpay php bin/magento setup:upgrade php bin/magento setup:static-content:deploy

goto Admin->Store->Configuration->Sales->Payment Method->Lucsonpay fill details here and save them.

goto Admin->System->Cache Management Clear all Cache.

Now you can collect payment via Lucsonpay .


Go to Store/Configuration/Sales/Payment Methods/Lucsonpay

Fill all the required details:

1)Enable:yes

2)Title:Lucsonpay

3)Merchant Id:Pay Id { Provided by Lucsonpay }

4)Merchant Key:Salt { Provided by Lucsonpay }

5)Custom Callback Url:no

6)Transaction Url: For Test:https://uat.lucsonpay.com/crm/jsp/paymentrequest
                 : For Live:https://merchant.lucsonpay.com/crm/jsp/paymentrequest

7)Industry Type Id: Name of your choice

8)Website:Your website Name
