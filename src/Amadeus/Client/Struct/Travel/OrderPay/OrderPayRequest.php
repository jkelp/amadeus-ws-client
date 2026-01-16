<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderPay;

use Amadeus\Client\Struct\Travel\DataLists;
use Amadeus\Client\RequestOptions\Travel\OrderPay\OrderPayRequest as RequestOptions;
use Amadeus\Client\Struct\Travel\Order;
use Amadeus\Client\Struct\Travel\OrderPay\PaymentInfo;

/**
 * OfferPriceRequest structure
 *
 */
class OrderPayRequest 
{

    public $DataLists;
    public $PaymentInfo; 
    public $Order; 
    public $BookingRef;
    public $Parameters;

    /**
     * OrderPayRequest constructor.
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        if ($options->dataLists){
            $this->DataLists = new DataLists($options->dataLists);
        }
        
        $this->PaymentInfo = new PaymentInfo($options->paymentInfo);

        $this->Order = new Order($options->order);

        
    }
}