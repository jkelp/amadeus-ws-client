<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderReshop;
use Amadeus\Client\RequestOptions\Travel\OrderReshop\DeleteOrderItem as RequestOptions;

class DeleteOrderItem 
{
    public $OrderItemRefID;
    public $RetainServiceID;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        $this->OrderItemRefID = $options->itemId;
        $this->RetainServiceID = $options->serviceId;

    }

}
