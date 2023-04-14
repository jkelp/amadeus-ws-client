<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderPay;

use Amadeus\Client\Struct\Travel\OrderPay\PaymentCard;
use Amadeus\Client\Struct\Travel\OrderPay\Voucher;
use Amadeus\Client\Struct\Travel\OrderPay\Cash;
use Amadeus\Client\RequestOptions\Travel\OrderPay\PaymentMethod as RequestOptions;

class PaymentMethod
{

    /**
     * @var PaymentCard
     */
    public $PaymentCard;

    /**
     * @var Cash
     */
    public $Cash;

    /**
     * @var Voucher
     */
    public $Voucher;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        if ($options->paymentCard) {
            $this->PaymentCard = new PaymentCard($options->paymentCard);
        }

        if ($options->cash) {
            $this->Cash = new Cash($options->cash);
        }

        if ($options->voucher) {
            $this->Voucher = new Voucher($options->voucher);
        }
        
    }
}
