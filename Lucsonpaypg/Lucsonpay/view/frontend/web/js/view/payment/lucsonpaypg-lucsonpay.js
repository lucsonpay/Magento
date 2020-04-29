define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'lucsonpay',
                component: 'Lucsonpaypg_Lucsonpay/js/view/payment/method-renderer/lucsonpaypg-lucsonpay'
            }
        );
        return Component.extend({});
    }
 );