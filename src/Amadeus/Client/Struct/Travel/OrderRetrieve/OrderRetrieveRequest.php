<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderRetrieve;
use Illuminate\Support\Facades\Log;

use Amadeus\Client\RequestOptions\Travel\OrderRetrieve\OrderRetrieveRequest as RequestOptions;

class OrderRetrieveRequest 
{

    public $OrderFilterCriteria;
    public $OrderRetrieveParameters; 

    /**
     * OrderRetrieveRequest constructor.
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        $this->OrderFilterCriteria = new OrderFilterCriteria($options->filterCriteria);

    }
}