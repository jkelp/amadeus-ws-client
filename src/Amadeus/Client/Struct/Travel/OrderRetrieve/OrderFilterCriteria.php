<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderRetrieve;

use Amadeus\Client\RequestOptions\Travel\OrderRetrieve\FilterCriteria;
use Amadeus\Client\Struct\Travel\Order;

class OrderFilterCriteria
{

    public $Order;

    /**
     *
     * @param $options
     */
    public function __construct(FilterCriteria $options)
    {

        $this->Order = new Order($options->order);

    }

}
