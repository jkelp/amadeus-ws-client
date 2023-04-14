<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderReshop;
use Amadeus\Client\RequestOptions\Travel\OrderReshop\RepriceOrder as RequestOptions;

class RepriceOrder 
{
    public $OrderItemRefID;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $order)
    {

        $this->OrderItemRefID = $order->id;


    }

}
