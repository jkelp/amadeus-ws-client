<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderReshop;
use Amadeus\Client\RequestOptions\Travel\OrderReshop\UpdateOrder as RequestOptions;

class UpdateOrder 
{
    public $RepriceOrder;
    public $ReshopOrder;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        if (isset($options->repriceOrder)) {
            $this->RepriceOrder = new RepriceOrder($options->repriceOrder);
        }

        if (isset($options->reshopOrder)) {
            $this->ReshopOrder = new ReshopOrder($options->reshopOrder);
        }

    }

}
