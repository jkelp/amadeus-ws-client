<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderReshop;

use Amadeus\Client\Struct\Travel\Order;
use Amadeus\Client\Struct\Travel\BookingRef;
use Amadeus\Client\RequestOptions\Travel\OrderReshop\OrderReshopRequest as RequestOptions;

class OrderReshopRequest 
{

    public $OrderItemRefID;
    public $OrderActionContextText;
    public $BookingRef;
    public $FareWaiver;
    public $ReshopParameters; 
    public $UpdateOrder;

    /**
     * OrderReshop Request
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        $this->OrderItemRefID = $options->orderId;
        $this->OrderActionContextText = $options->actionContext;
     
        if ($options->bookingRef) {
            $this->BookingRef = new BookingRef($options->bookingRef);
        }

        if ($options->fareWaiver) {
            $this->FareWaiver = new FareWaiver($options->fareWaiver);
        }

        if ($options->parameters) {
            $this->ReshopParameters = new ReshopParameters($options->parameters);
        }

        if ($options->updateOrder) {
            $this->UpdateOrder = new UpdateOrder($options->updateOrder);
        }


    }
}