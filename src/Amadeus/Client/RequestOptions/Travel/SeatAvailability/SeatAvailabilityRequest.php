<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\SeatAvailability;

use Amadeus\Client\LoadParamsFromArray;
use Amadeus\Client\RequestOptions\Travel\SeatAvailability\CoreRequest;
use Amadeus\Client\RequestOptions\Travel\SeatAvailability\ShoppingResponse;
use Amadeus\Client\RequestOptions\Travel\PaxList;

class SeatAvailabilityRequest extends LoadParamsFromArray
{

    /**
     * @var CoreRequest
     */
    public $coreRequest;

    /**
     * @var ShoppingResponse
     */
    public $shoppingResponse;

    /**
     * @var PaxList
     */
    public $paxList;
}
