<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderPay;

use Amadeus\Client\LoadParamsFromArray;
use Amadeus\Client\RequestOptions\Travel\OrderPay\PaymentCard;

class PaymentMethod extends LoadParamsFromArray
{

    //A payment method request should include exactly one of these payment types

    /**
     * @var PaymentCard
     */
    public $paymentCard;

    /**
     * @var Cash
     */
    public $cash;

    /**
     * @var Voucher
     */
    public $voucher;



}