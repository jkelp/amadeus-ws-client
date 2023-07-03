<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel;
use Amadeus\Client\LoadParamsFromArray;
use Amadeus\Client\RequestOptions\Travel\Org;
use Amadeus\Client\RequestOptions\Travel\Carrier;

class BookingEntity extends LoadParamsFromArray
{

    /**
     * @var Org
     */
    public $org;

    /**
     * @var Carrier
     */
    public $carrier;

}