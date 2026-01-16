<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderReshop;

use Amadeus\Client\LoadParamsFromArray;

class AddOfferItems extends LoadParamsFromArray
{

    public $paxs;
    public $responseParameters;	
    public $shoppingCriteria;
    public $flightRequest;

}
