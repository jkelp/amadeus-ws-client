<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderPay;
use Amadeus\Client\RequestOptions\Travel\OrderPay\CashPayment as RequestOptions;


class Cash 
{

    public $CashInd;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        $this->CashInd = $options->cashInd;

    }

}