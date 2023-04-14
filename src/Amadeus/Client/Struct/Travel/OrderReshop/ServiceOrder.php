<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderReshop;

use Amadeus\Client\RequestOptions\Travel\OrderReshop\ServiceOrder as RequestOptions;

class ServiceOrder
{
    public $AddOfferItems;
    public $DeleteOrderItem = [];

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        if($options->addOfferItems) {
            $this->AddOfferItems = new AddOfferItems($options->addOfferItems);
        }

        foreach($options->deleteOrderItem as $item) {
            $this->DeleteOrderItem[] = new DeleteOrderItem($item);
        }
    }
}
