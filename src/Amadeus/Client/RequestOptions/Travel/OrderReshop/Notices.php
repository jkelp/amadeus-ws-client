<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderReshop;

use Amadeus\Client\LoadParamsFromArray;

class Notices extends LoadParamsFromArray
{

    public $localization;
    public $infoPolicies;	

    /**
     * @var PricingParameters
     */
    public $pricingParameters;


}
