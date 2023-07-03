<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderReshop;

use Amadeus\Client\LoadParamsFromArray;

class ReshopParameters extends LoadParamsFromArray
{

    public $alerts;
    public $notices;
    public $currCodes;
    public $reason;
    //public $refs;

}
