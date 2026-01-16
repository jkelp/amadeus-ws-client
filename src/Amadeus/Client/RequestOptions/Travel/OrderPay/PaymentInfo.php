<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderPay;

use Amadeus\Client\LoadParamsFromArray;
use Amadeus\Client\RequestOptions\Travel\OrderPay\PaymentMethod;
use Amadeus\Client\RequestOptions\Travel\OrderPay\Amount;

class PaymentInfo extends LoadParamsFromArray
{

    /**
     * @var Amount
     */
    public $amount;
    
    public $type;

    /**
     * @var PaymentMethod
     */
    public $paymentMethod;
    


}