<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;
use Illuminate\Support\Facades\Log;

class Order 
{
    public $OrderID;
    public $OwnerCode;

    /**
     *
     * @param $options
     */
    public function __construct($order)
    {
        $this->OrderID = $order->orderId;
        $this->OwnerCode = $order->ownerCode;

    }

}
