<?php
/**
 * Amadeus
 *
 * Copyright 2015 Amadeus Benelux NV
 */

namespace Amadeus\Client\RequestOptions;

use Amadeus\Client\LoadParamsFromArray;

/**
 * RequestOptions
 *
 * @package Amadeus\Client\RequestOptions\Air\MultiAvailability
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class CarMultiAvailabilityOptions extends LoadParamsFromArray
{

    const LOCATION_TYPE_PICKUP = '176';

    const LOCATION_TYPE_DROPOFF = 'DOL';

    public $pickupLocation;

    public $dropoffLocation;

    public $pickupTime;

    public $dropoffTime;

}
