<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\RequestOptions\Car\Availability;

use Amadeus\Client\LoadParamsFromArray;
use Amadeus\Client\RequestOptions\Car\Availability\PUDOTimes;
use Amadeus\Client\RequestOptions\Car\Availability\AirportLoc;
use Amadeus\Client\RequestOptions\Car\Availability\GeocodeInfo;

/**
 * PickupDropoffInfo
 *
 * @package Amadeus\Client\RequestOptions\Car\Availability
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class PUDOInfo extends LoadParamsFromArray
{

  /**
   * Times for pickup and dropoff
   *
   * @var PUDOTimes
   */
    public $times;


  /**
   * Nested Info
   *
   * @var PUDOInfo
   */
    public $nestedInfo;


  /**
   * Location Type
   *
   * @var string
   */
    public $locationType;


  /**
   * Iata code and name
   *
   * @var AirportLoc
   */
    public $iataAirportLoc;

    /**
     * Geo lat long
     *
     * @var GeocodeInfo
     */
      public $locationGeocodeInfo;



}
