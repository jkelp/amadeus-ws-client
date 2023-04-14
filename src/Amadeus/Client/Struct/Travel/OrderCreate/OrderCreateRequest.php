<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderCreate;

use Amadeus\Client\Struct\Travel\DataLists;
use Amadeus\Client\Struct\Travel\OrderCreate\CreateOrder;
use Amadeus\Client\Struct\Travel\OrderPay\PaymentInfo;
use Amadeus\Client\RequestOptions\Travel\OrderCreate\OrderCreateRequest as RequestOptions;

/**
 * OfferPriceRequest structure
 *
 */
class OrderCreateRequest 
{

    public $DataLists;
    public $CreateOrder; 
    public $PaymentInfo;

    /**
     * OfferPriceRequest constructor.
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        $this->DataLists = new DataLists($options->dataLists);

        $this->CreateOrder = new CreateOrder($options->createOrder);

        $this->PaymentInfo = new PaymentInfo($options->paymentInfo);
    }
}