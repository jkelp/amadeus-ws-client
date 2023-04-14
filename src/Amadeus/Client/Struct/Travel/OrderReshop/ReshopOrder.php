<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderReshop;

use Amadeus\Client\RequestOptions\Travel\OrderReshop\ReshopOrder as RequestOptions;

class ReshopOrder
{
    public $UpdatePaxName;
    public $ServiceOrder;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        if (isset($options->updatePaxName)) {
            $this->UpdatePaxName = new UpdatePaxName($options->updatePaxName);
        }

        if (isset($options->serviceOrder)) {
            $this->ServiceOrder = new ServiceOrder($options->serviceOrder);
        }
    }
}
