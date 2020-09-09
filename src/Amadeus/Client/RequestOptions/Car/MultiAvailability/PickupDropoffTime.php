<?php
/**
 * Amadeus
 *
 * Copyright 2015 Amadeus Benelux NV
 */

namespace Amadeus\Client\RequestOptions\Car\MultiAvailability;

use Amadeus\Client\LoadParamsFromArray;

/**
 * RequestOptions
 *
 * @package Amadeus\Client\RequestOptions\Air\MultiAvailability
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class PickupDropoffTime extends LoadParamsFromArray
{

  public $date;

  public $time;

}
