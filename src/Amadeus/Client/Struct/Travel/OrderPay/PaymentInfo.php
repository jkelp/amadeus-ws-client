<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderPay;

use Amadeus\Client\Struct\Travel\OrderPay\PaymentMethod;
use Amadeus\Client\Struct\Travel\OrderPay\Amount;
use Amadeus\Client\RequestOptions\Travel\OrderPay\PaymentInfo as RequestOptions;

class PaymentInfo 
{

    public $Amount;
    public $TypeCode;
    public $PaymentMethod;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {
        //$this->Amount = $options->amount;

        $this->Amount = new Amount($options->amount);

        $this->TypeCode = $options->type;
        $this->PaymentMethod = new PaymentMethod($options->paymentMethod);
    }
}