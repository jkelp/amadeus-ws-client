<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderCancel;

use Amadeus\Client\Struct\Travel\Order;
use Amadeus\Client\Struct\Travel\BookingRef;
use Amadeus\Client\RequestOptions\Travel\OrderCancel\OrderCancelRequest as RequestOptions;

class OrderCancelRequest 
{

    public $BookingRef;
    public $OrderCancelParameters; 
    public $Order;
    public $ExpectedRefundAmount;

    /**
     * OrderCancelRequest constructor.
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        if ($options->bookingRef) {
            $this->BookingRef = new BookingRef($options->bookingRef);
        }

        if ($options->order) {
            $this->Order = new Order($options->order);
        }

        $this->OrderCancelParameters = $options->parameters;
        $this->ExpectedRefundAmount = $options->refundAmount;

    }
}