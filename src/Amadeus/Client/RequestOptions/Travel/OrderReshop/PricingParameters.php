<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderReshop;

use Amadeus\Client\LoadParamsFromArray;

class PricingParameters extends LoadParamsFromArray
{

    public $autoExchRequestInd;
    public $includeAwardRequestInd;	
    public $awardOnlyRequestInd;
    public $simpleRequestInd;


}
