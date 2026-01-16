<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderRetrieve;

use Amadeus\Client\LoadParamsFromArray;
use Amadeus\Client\RequestOptions\Travel\OrderRetrieve\FilterCriteria;

class OrderRetrieveRequest extends LoadParamsFromArray
{

    /**
     * @var FilterCriteria
     */
    public $filterCriteria;

}
